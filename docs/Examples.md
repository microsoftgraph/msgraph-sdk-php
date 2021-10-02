# Usage Examples

## Creating a Graph client
This creates a default Graph client that uses `https://graph.microsoft.com` as the default base URL and default
configured Guzzle HTTP client to make the requests.

```php
use Microsoft\Graph\Graph;

$graph = new Graph();
```


Changing the National Cloud endpoint:
```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Core\NationalCloud;

$graph = new Graph(NationalCloud::GERMANY);
```

Customizing the default Guzzle client:
```php
use Microsoft\Graph\Http\HttpClientFactory;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Core\NationalCloud;

$guzzleConfig = [
    // your preferred Guzzle request options (https://docs.guzzlephp.org/en/stable/request-options.html)
];

$guzzleClient = HttpClientFactory::setClientConfig($guzzleConfig)::createAdapter();

$graph = new Graph(NationalCloud::GLOBAL, $guzzleClient);

```

Please ensure you set your access token on the Graph client before making requests using it:
```php
use Microsoft\Graph\Graph;

$graph = new Graph();
$graph->setAccessToken("xxx");

```

## Get an item from the Graph
This sample fetches the current signed-in user. Note that to use `\me` you need
a delegated permission. Alternatively, using application permissions, you can request `/users/[userPrincipalName]`.
See [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions) for more.


```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\User;

$graph = new Graph();
$graph->setAccessToken($_SESSION['access_token']);

$user = $graph->createRequest("GET", "/me")
                ->setReturnType(User::class)
                ->execute();

```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

In the PHP SDK, we expose this with a custom Request method called `createCollectionRequest` which works similarly to `createRequest`:

This snippet retrieves the file names in the root of your OneDrive. Ensure you have the [correct permissions](https://docs.microsoft.com/en-us/graph/api/driveitem-list-children?view=graph-rest-1.0&tabs=http#permissions) set.
The Graph API response is deserialized into a collection of `DriveItem` - a model class provided by the SDK.

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\DriveItem;

$graph = new Graph();

$docGrabber = $graph->setAccessToken("xxx")
                    ->createCollectionRequest("GET", "/me/drive/root/children")
			        ->setReturnType(DriveItem::class)
			        ->setPageSize(2);

$docs = $docGrabber->getPage();

foreach ($docs as $doc){
	$docArray[] = $doc->getName();
}

```

This eliminates the need to work with the @odata.nextLink directly.

If you would like to merge the full results into a collection, you can page through the results until the last page by checking `isEnd()`:

```php
while (!$docGrabber->isEnd()) {
  $docs = array_merge($docs,$docGrabber->getPage());
}
```

Alternatively, you can do this asynchronously using the `pageIterator()`. The Page Iterator passes each item in the collection to a custom-provided callback
function and automatically requests the next page of results until all results have been processed:

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\DriveItem;

$graph = new Graph();
$graph->setAccessToken("xxx");

$docNames = [];
/**
* Define a callback which is processes each item in the collection
*/
$callback = function (DriveItem $doc) use (&$docNames) {
    $docNames[] = $doc->getName();
    return true;
};

$docGrabber = $graph->createCollectionRequest("GET", "/me/drive/root/children")
                    ->setReturnType(DriveItem::class)
                    ->setPageSize(2)
                    ->pageIterator($callback);

$promise = $docGrabber->iterate(); // returns a promise

while (!$docGrabber->isComplete()) {
    $promise->wait();
}

```

More on the [Page Iterator](https://github.com/microsoftgraph/msgraph-sdk-php/blob/feat/2.0.0/UPGRADING.md#introducing-the-pageiterator)



## Get the raw response
Using `setReturnType()` causes the response body from the Graph to be deserialized into the model type provided, or a stream to be returned
if the return type is set to `Psr\Http\Message\StreamInterface`.

To get the raw response:
```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\User;

$graph = new Graph();
$graph->setAccessToken("xxx");

$response = $graph->createRequest("GET", "/me")
                  ->execute();

echo "Response status code: ".$response->getStatus();
echo "Response headers: ".join(", ", $response->getHeaders());
echo "Response JSON-decoded payload: ".$response->getRawBody();

// Deserialize the payload
$user = $response->getResponseAsObject(User::class);

```


## Send an email
This sample sends an email. The request body is constructed using the provided models. For a sample that uses an array as the request body, see [Create a Calendar Event](#create-a-calendar-event).
Ensure you have the [right permissions](https://docs.microsoft.com/en-us/graph/api/user-sendmail?view=graph-rest-1.0&tabs=http#permissions).

```php
use Microsoft\Graph\Model\Message;
use Microsoft\Graph\Model\Recipient;
use Microsoft\Graph\Model\EmailAddress;
use Microsoft\Graph\Model\ItemBody;
use Microsoft\Graph\Model\BodyType;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Exception\GraphClientException;


$senderEmail = new EmailAddress();
$senderEmail->setAddress("john.doe@outlook.com");
$senderEmail->setName("John Doe");

$toRecipients = [];

$recipientEmail = new EmailAddress();
$recipientEmail->setAddress("jane.doe@outlook.com");
$recipientEmail->setName("Jane Doe");
$toRecipients[] = (new Recipient())->setEmailAddress($recipientEmail);

$body = new ItemBody();
$body->setContent("Dummy email content");
$body->setContentType(new BodyType(BodyType::TEXT));

$email = new Message();
$email->setSubject("Test Email");
$email->setFrom((new Recipient())->setEmailAddress($senderEmail));
$email->setToRecipients($toRecipients);
$email->setBody($body);

$graph = new Graph();
$graph->setAccessToken("xxx");

try {
    $response = $graph->createRequest("POST", "/me/sendMail")
                        ->attachBody($email)
                        ->execute();

    echo "Email sent successfully";

} catch (GraphClientException $ex) {
    // Server returned a 4xx, log error
    echo "Failed to send email. Server returned".$ex->getResponseStatusCode().".\nPayload: ".$ex->getError();
}

```

## Create a Calendar event
This snippet creates a calendar event using an array as the payload body instead of a model as shown in the [Send an email](#send-an-email)
sample. Please ensure you have the [right permissions](https://docs.microsoft.com/en-us/graph/api/user-post-events?view=graph-rest-1.0&tabs=http#permissions).

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Event;
use Microsoft\Graph\Exception\GraphClientException;

$data = [
    'Subject' => 'Discuss the Calendar REST API',
    'Body' => [
        'ContentType' => 'HTML',
        'Content' => 'I think it will meet our requirements!',
    ],
    'Start' => [
        'DateTime' => '2017-04-03T10:00:00',
        'TimeZone' => 'Pacific Standard Time',
    ],
    'End' => [
        'DateTime' => '2017-04-03T11:00:00',
        'TimeZone' => 'Pacific Standard Time',
    ],
];
$baseId = 'base-ID';
$calendarId = $baseId . 'calendar-ID';
$url = "/me/calendars/$calendarId/events";

$graph = new Graph();
$graph->setAccessToken("xxx");

try {
    $response = $graph->createRequest("POST", $url)
                        ->attachBody($data)
                        ->setReturnType(Event::class)
                        ->execute();

    echo "Successfully created calendar event id=".$response->getId().", subject=".$response->getSubject();

} catch (GraphClientException $ex) {
    // Server returned a 4xx, log error
    echo "Failed to create Calendar event. Server returned".$ex->getResponseStatusCode().".\nPayload: ".$ex->getError();
}

```

## Making asynchronous requests
Calling `executeAsync()` returns a promise that resolves to the set return type or a raw `GraphResponse` object if none is set.

This sample gets the messages in the signed-in user's mailbox using the default Graph API page size. Ensure you have the
[right permissions](https://docs.microsoft.com/en-us/graph/api/user-list-messages?view=graph-rest-1.0&tabs=http#permissions).


```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Message;

$graph = new Graph();
$graph->setAccessToken("xxx");

$promise = $graph->createRequest("GET", "/me/messages")
                    ->setReturnType(Message::class)
                    ->executeAsync();

$promise->then(function ($messages) {
    echo "Emails in your mailbox: ";
    foreach ($messages as $message) {
        echo $message->getSubject()."\n";
    }
});

try {
    $promise->wait();
} catch (\Microsoft\Graph\Exception\GraphClientException $ex) {
    // Server returned a 4xx, log error
    echo "Failed to fetch email messages. Server returned".$ex->getResponseStatusCode().".\nPayload: ".$ex->getError();
}

```


## Download an item

```php
$graph->createRequest("GET", "/me/drive/items/{id}/content")
	  ->download('C:/dump.docx');

```


## Upload an item

```php
$graph->createRequest("PUT", "/me/drive/root/children/copydoc.docx/content")
	  ->upload('C:/copydoc.docx');

```

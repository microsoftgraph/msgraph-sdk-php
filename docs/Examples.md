# Usage Examples

## Creating a Graph client
This creates a default Graph client that uses `https://graph.microsoft.com` as the default base URL and default configured Guzzle HTTP client to make the requests.

To make requests with a signed-in user, you can initialise an `AuthorizationCodeContext` with the code returned by Microsoft Identity after redirecting the
user to the sign-in page. The same redirect URI provided while requesting the auth code is required:

```php

use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read', 'Mail.ReadWrite'];
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);

```

To make requests on behalf of an already signed in user where your front-end application has already acquired an access token for the user, you can use the `OnBehalfOfContext` which uses the [On-Behalf-Of flow](https://learn.microsoft.com/en-us/azure/active-directory/develop/v2-oauth2-on-behalf-of-flow) to fetch
an access token for your backend application to access the Microsoft Graph API. To do this, you pass the already acquired access token as the "assertion";

```php
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\OnBehalfOfContext;

$tokenRequestContext = new OnBehalfOfContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'assertion'
);

$scopes = ['User.Read', 'Mail.ReadWrite'];
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);

```


To make requests without a signed-in user (using application permissions), you can initialise a `ClientCredentialsContext` object:

```php
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;

// Uses https://graph.microsoft.com/.default scopes if none are specified
$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

```

Using a custom National Cloud deployment:
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes, NationalCloud::CHINA);
```

Customizing the default Guzzle client:
```php

use Microsoft\Graph\Core\GraphClientFactory;
use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext);
$guzzleConfig = [
    // your custom config
];
$httpClient = GraphClientFactory::createWithConfig($guzzleConfig);
$requestAdapter = new GraphRequestAdapter($authProvider, $httpClient);
$graphServiceClient = GraphServiceClient::createWithRequestAdapter($requestAdapter);

```

## Get an item from the Graph
This sample fetches the current signed-in user. Note that to use `\me` you need
a delegated permission. Alternatively, using application permissions, you can request `/users/[userPrincipalName]`.
See [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions) for more.


```php
$user = $graphServiceClient->me()->get()->wait();

// Or

$user = $graphServiceClient->users()->byUserId('userPrincipalName')->get()->wait();
```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

This snippet retrieves the messages in the signed-in user's mailbox. Ensure you have the [correct permissions](https://docs.microsoft.com/en-us/graph/api/user-list-messages?view=graph-rest-1.0&tabs=http#permissions) set.
The Graph API response is deserialized into a collection of `Message` - a model class provided by the SDK.

```php
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetQueryParameters;
use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = MessagesRequestBuilderGetRequestConfiguration::createQueryParameters();
$requestConfig->queryParameters->select = ['subject'];
$requestConfig->queryParameters->top = 2;
$requestConfig->headers = ['Prefer' => 'outlook.body-content-type=text'];

// or with PHP 8
$requestConfig = new MessagesRequestBuilderGetRequestConfiguration(
    queryParameters: MessagesRequestBuilderGetRequestConfiguration::createQueryParameters(
        select: ['subject'],
        top: 2
    ),
    headers: ['Prefer' => 'outlook.body-content-type=text']
);

$messages = $graphServiceClient->users()->byUserId(USER_ID)->messages()->get($requestConfig)->wait();

foreach ($messages->getValue() as $message) {
    echo "Subject: {$message->getSubject()}\n";
}
```

## Paging through a collection

Using our `PageIterator` you can page through a collection applying a callback to be executed against each item in the collection.
The Page Iterator automatically requests the next page until the last.

It is initialised with an initial response to a collection request and the request adapter to be used for subsequent page requests.

We call `iterate()` while passing a callback to be executed. If the callback returns `false` iteration pauses at the current item.

Iteration can be resumed by calling `iterate()` again.

```php
use Microsoft\Graph\Core\Tasks\PageIterator;
use Microsoft\Graph\Generated\Models\Message;
use DateTimeInterface;

$messages = $graphServiceClient->users()->byUserId(USER_ID)->messages()->get()->wait();

$pageIterator = new PageIterator($messages, $graphServiceClient->getRequestAdapter());

$counter = 0;
$callback = function (Message $message) use (&$counter) {
    echo "Subject: {$message->getSubject()}, Received at: {$message->getReceivedDateTime()->format(DateTimeInterface::RFC2822)}\n";
    $counter ++;
    return ($counter % 5 != 0);
};

while ($pageIterator->hasNext()) {
    // iteration pauses and resumes after every 5 messages
    $pageIterator->iterate($callback);

    echo "\nPaused iteration...Total messages: {$counter}\n\n";
}

```


## Use a Custom Response Handler / Get the raw HTTP response
Define a response handler that implements the [Response Handler interface](https://github.com/microsoft/kiota-abstractions-php/blob/dev/src/ResponseHandler.php) and pass it into the request using the request options.

The SDK provides a default asynchronous response handler which returns a promise that resolves to a raw HTTP response.

To get the raw response:
```php

// PHP 7
$config = new MeRequestBuilderGetRequestConfiguration();
$config->options = [new ResponsehandlerOption(new NativeResponseHandler())];
$user = $graphServiceClient->me()->get($config)->wait()->wait();


// PHP 8
$user = $graphServiceClient->me()->get(new MeRequestBuilderGetRequestConfiguration(
    options: [new ResponseHandlerOption(new NativeResponseHandler())]
))->wait()->wait();
```

## Send an email
This sample sends an email. The request body is constructed using the provided models.
Ensure you have the [right permissions](https://docs.microsoft.com/en-us/graph/api/user-sendmail?view=graph-rest-1.0&tabs=http#permissions).

```php

use Microsoft\Graph\Generated\Me\SendMail\SendMailPostRequestBody;
use Microsoft\Graph\Generated\Models\BodyType;
use Microsoft\Graph\Generated\Models\EmailAddress;
use Microsoft\Graph\Generated\Models\ItemBody;
use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Graph\Generated\Models\Recipient;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;


$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Mail.Send'];
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);

try {
    $sender = new EmailAddress();
    $sender->setAddress('john.doe@outlook.com');
    $sender->setName('John Doe');
    $fromRecipient = new Recipient();
    $fromRecipient->setEmailAddress($sender);

    $recipients = [];

    $recipientEmail = new EmailAddress();
    $recipientEmail->setAddress('jane.doe@outlook.com');
    $recipientEmail->setName('Jane Doe');
    $recipient = new Recipient();
    $toRecipient->setEmailAddress($recipientEmail);
    $recipients[] = $toRecipient;

    $emailBody = new ItemBody();
    $emailBody->setContent('Dummy content');
    $emailBody->setContentType(new BodyType(BodyType::TEXT));

    $message = new Message();
    $message->setSubject('Test Email');
    $message->setFrom($fromRecipient);
    $message->setToRecipients($recipients);
    $message->setBody($emailBody);

    $requestBody = new SendMailPostRequestBody();
    $requestBody->setMessage($message);

    $response = $graphServiceClient->me()->sendMail()->post($requestBody)->wait();

} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```

## Download an item

```php

use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['Files.ReadWrite'];
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);

try {
    $fileContents = $graphServiceclient->drives()->byDriveId('driveId')->items()->byDriveItemId('itemId')->content()->get()->wait();

} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```


## Upload an item

For files less than 3MB, you can send a byte stream to the API with the sample below. See the next section for files larger than 3MB.

```php

$driveItemId = 'root:/upload.txt:';

$inputStream = Utils::streamFor(fopen('upload.txt', 'r'));
$uploadItem = $graphServiceClient->drives()->byDriveId('[driveId]')->items()->byDriveItemId($driveItemId)->content()->put($inputStream)->wait();

```


## Uploading large files

To upload files larger than 3MB, the Microsoft Graph API supports uploads using resumable upload sessions where a number of bytes are uploaded at a time.

The SDK provides a `LargeFileUpload` task that slices your file into bytes and progressively uploads them until completion.

To add a large attachment to an Outlook message:

```php
use Psr\Http\Client\NetworkExceptionInterface;


// create a file stream
$file = Utils::streamFor(fopen('fileName', 'r'));

// create an upload session
$attachmentItem = new AttachmentItem();
$attachmentItem->setAttachmentType(new AttachmentType('file'));
$attachmentItem->setName('fileName');
$attachmentItem->setSize($file->getSize());

$uploadSessionRequestBody = new CreateUploadSessionPostRequestBody();
$uploadSessionRequestBody->setAttachmentItem($attachmentItem);

$uploadSession = $graphServiceClient->users()->byUserId(USER_ID)->messages()->byMessageId('[id]')->attachments()->createUploadSession()->post($uploadSessionRequestBody)->wait();

// upload
$largeFileUpload = new LargeFileUploadTask($uploadSession, $graphServiceClient->getRequestAdapter(), $file);
try {
    $uploadSession = $largeFileUpload->upload()->wait();
} catch (NetworkExceptionInterface $ex) {
    // resume upload in case of network errors
    $retries = 0;
    $maxRetries = 3;
    while ($retries < $maxRetries) {
        try {
            $uploadSession = $largeFileUpload->resume()->wait();
            if ($uploadSession) {
                break;
            }
        } catch (NetworkExceptionInterface $ex) {
            $retries ++;
        }
    }
    throw $ex;
}

```

You can also cancel a large file upload session:

```php
$largeFileUpload->cancel()->wait();
```

*Known Issue*
At the moment, when attaching large files to Outlook Messages and Events, we don't expose the `Location` header value. For now, you'd need to fetch the message's attachments/events.

## Passing request headers
Each execution method i.e. get(), post(), put(), patch(), delete() accepts a Request Configuration object where the request headers can be set:

```php

use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->headers = ['Prefer' => 'outlook.body-content-type=text'];

$messages = $graphServiceclient->me()->messages()->get($requestConfig)->wait();

// PHP 8
$messages = $graphServiceClient->me()->messages()->get(new MessagesRequestBuilderGetRequestConfiguration(
    headers: ['Prefer' => 'outlook.body-content-type=text']
))->wait();

```

## Passing query parameters

```php

use Microsoft\Graph\Generated\Me\Messages\MessagesRequestBuilderGetRequestConfiguration;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = MessagesRequestBuilderGetRequestConfiguration::createQueryParameters();
$requestConfig->queryParameters->select = ['subject', 'from'];
$requestConfig->queryParameters->skip = 2;
$requestConfig->queryParameters->top = 3;

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();

// PHP 8
$messages = $graphServiceClient->me()->messages()->get(new MessagesRequestBuilderGetRequestConfiguration(
    queryParameters: MessagesRequestBuilderGetRequestConfiguration::createQueryParameters(
        select: ['subject', 'from'],
        skip: 2,
        top: 3
    )
))->wait();


```

## Customizing middleware configuration

```php

use Microsoft\Graph\Generated\Users\Item\Messages\MessagesRequestBuilderGetRequestConfiguration;
use Microsoft\Kiota\Http\Middleware\Options\RetryOption;

$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->options = [new RetryOption(2, 5)];

$messages = $graphServiceClient->me()->messages()->get($requestConfig)->wait();

```

## Batching requests

Up to 20 individual requests can be batched together to reduce network latency of making each request separately.

The `BatchRequestBuilder` allows you to make requests to the `/$batch` endpoint of the Microsoft Graph API.

### 1.  Create a `BatchRequestContent` object

The `BatchRequestContent` object consists of a list of requests to be batched together.

Here we batch 3 requests.
```php
use Microsoft\Graph\Core\Requests\BatchRequestContent;
use Microsoft\Graph\Generated\Models\Message;

$message = new Message();
$message->setSubject("Test Subject");

$batchRequestContent = new BatchRequestContent([
    $graphServiceClient->users()->byUserId(USER_ID)->messages()->byMessageId('id')->toDeleteRequestInformation(),
    $graphServiceClient->users()->byUserId(USER_ID)->messages()->toPostRequestInformation($message),
    $graphServiceClient->users()->byUserId(USER_ID)->toGetRequestInformation()
]);

```

You can also add requests to the `BatchRequestContent` via `addPsrRequest()`, `addRequest()` and `addRequestInformation()`

### 2. Send the batch request using the `BatchRequestBuilder`

```php
use Microsoft\Graph\BatchRequestBuilder;
use Microsoft\Graph\Core\Requests\BatchResponseItem;

$requestBuilder = new BatchRequestBuilder($graphServiceClient->getRequestAdapter());
$batchResponse = $requestBuilder->postAsync($batchRequestContent)->wait();

```

### 3. Get the responses to the batch request items

The responses are by default returned in a `BatchResponseContent` object comprised of various `BatchResponseItem` objects corresponding to the requests made in step 1

An `id` is automatically assigned to each request in the `BatchRequestContent` object.

The assigned `id` can be fetched by calling `getRequests()` on the `BatchRequestContent` object.

The SDK supports getting the response status code, body and headers.

```php
$batchRequests = $batchRequestContent->getRequests();
// Uses the auto-generated ID added to the batch request content
$response1 = $batchResponse->getResponse($batchRequests[0]->getId());
echo "Response1 status code: {$response1->getStatusCode()}";

```

By default, the body is a `StreamInterface` object.
However, you can deserialize a `BatchResponseItem` to a `Parsable` (model) implementation

```php
use Microsoft\Graph\Generated\Models\Message;

$message = $batchResponse->getResponseBody($batchRequests[0]->getId(), Message::class);
echo "Initial subject: {$message->getSubject()}\n";

// patched message
$updatedMessage = $batchResponse->getResponseBody($batchRequests[1]->getId(), Message::class);
echo "Updated subject: {$updatedMessage->getSubject()}\n";
```

If you would like fine-grained control over each request in the batch, you can initialise `BatchRequestItem` objects and set dependencies betweeen requests etc.

For example, here we want to update a message but also want the API to return the previous message object before the update. We would need to set a dependency
between the requests so that the update only happens after the initial message has been fetched.

```php
use Microsoft\Graph\Core\Requests\BatchRequestContent;
use Microsoft\Graph\Core\Requests\BatchRequestItem;
use Microsoft\Graph\Generated\Models\Message;

$message = new Message();
$message->setSubject("Test Subject");

$request1 = new BatchRequestItem($graphServiceClient->users()->byUserId(USER_ID)->messages()->byMessageId('[id]')->toGetRequestInformation());
$request2 = new BatchRequestItem($graphServiceClient->users()->byUserId(USER_ID)->messages()->byMessageId('[id]')->toPatchRequestInformation($message));
$request2->dependsOn([$request1]);

$batchRequestContent = new BatchRequestContent([
    $request1, $request2
]);

```

## Continuous Access Evaluation (CAE)

See https://learn.microsoft.com/en-us/azure/active-directory/conditional-access/concept-continuous-access-evaluation

CAE is disabled by default. The SDK attempts to refresh the access token only ONCE when a claims challenge is returned by the Microsoft Graph API.
Should the SDK be unable to refresh the token, it calls a custom method provided by you which should ensure the user logs in again and provides an
updated `TokenRequestContext`. The SDK uses this new `TokenRequestContext` to fetch a new access token. If the same request fails again with the new
access token, the SDK returns the deserialized 401 response body:

```php

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$tokenRequestContext->setCAEEnabled(true);
$tokenRequestContext->setCAERedirectCallback(function (string $claims) {
    // your app makes the user log in again asynchronously
    return yourCustomLoginAsync()->then(
        function (string $authCode) {
            $newTokenRequestContext = new AuthorizationCodeContext(
                'tenantId',
                'clientId',
                'clientSecret',
                $authCode,
                'redirectUri'
            );
            return $newTokenRequestContext;
        }
    );
});

try {
    $numUsers = $graphServiceClient->users()->count()->get()->wait();
} catch (ContinuousAccessEvaluationException $ex) {
    echo $ex->getError()->getMessage();
}
```

# Usage Examples

## Creating a Graph client
This creates a default Graph client that uses `https://graph.microsoft.com` as the default base URL and default configured Guzzle HTTP client to make the requests.

```php

use Microsoft\Graph\GraphRequestAdapter;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$scopes = ['https://graph.microsoft.com/.default'];
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);
$graphServiceClient = new GraphServiceClient($requestAdapter);

```

Customizing the default Guzzle client:
```php

use Microsoft\Graph\Core\GraphClientFactory;
use Microsoft\Graph\GraphRequestAdapter;

$guzzleConfig = [
    // your custom config
];
$httpClient = GraphClientFactory::createWithConfig($guzzleConfig);
$requestAdapter = GraphRequestAdapter::withHttpClient($httpClient)::withTokenRequestContext($tokenRequestContex, $scopes);

```

## Get an item from the Graph
This sample fetches the current signed-in user. Note that to use `\me` you need
a delegated permission. Alternatively, using application permissions, you can request `/users/[userPrincipalName]`.
See [Microsoft Graph Permissions](https://docs.microsoft.com/en-us/graph/auth/auth-concepts#microsoft-graph-permissions) for more.


```php

use Microsoft\Graph\GraphRequestAdapter;
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
$scopes = ['User.Read'];
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $response = $graphServiceClient->me()->get();
    $user = $response->wait();
} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

This snippet retrieves the file names in the root of your OneDrive. Ensure you have the [correct permissions](https://docs.microsoft.com/en-us/graph/api/driveitem-list-children?view=graph-rest-1.0&tabs=http#permissions) set.
The Graph API response is deserialized into a collection of `DriveItem` - a model class provided by the SDK.

```php

//TODO: /me/drive/root/children?$top=2

```

For now, you can page through the collection using the @odata.nextLink value. We intend to introduce a Page Iterator component in the future releases:

```php

// TODO: Page through a collection using nextLink

```

## Get the raw response
The SDK allows passing your own response handler (a callable) which will be invoked with the raw PSR-7 response.

To get the raw response:
```php

//TODO: Default raw response handler?

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
use Microsoft\Graph\GraphRequestAdapter;
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
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);
$graphServiceClient = new GraphServiceClient($requestAdapter);

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
    echo $ex->getMessage();
}

```

## Download an item

```php

use Microsoft\Graph\GraphRequestAdapter;
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
$requestAdapter = GraphRequestAdapter::withTokenRequestContext($tokenRequestContext, $scopes);
$graphServiceClient = new GraphServiceClient($requestAdapter);

try {
    $fileContents = $graphClient->drivesById('driveId')->itemsById('itemId')->content()->get()->wait();

} catch (ApiException $ex) {
    echo $ex->getMessage();
}

```


## Upload an item

```php

//TODO: /me/drive/root/children/copydoc.docx/content

```

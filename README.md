# Get started with the Microsoft Graph SDK for PHP

*This SDK is currently in preview. Please continue to provide [feedback](https://github.com/microsoftgraph/msgraph-sdk-php/issues/new) as we iterate towards a production-supported library.*

## Install the SDK
You can install the PHP SDK with Composer.
```
{
    "require": {
        "Microsoft/Graph": "0.1.*"
    }
}
```
## Get started with Microsoft Graph

### Register your application

Register your application to use the Microsoft Graph API by using one of the following
supported authentication portals:

* [Microsoft Application Registration Portal](https://apps.dev.microsoft.com) (**Recommended**):
  Register a new application that authenticates using the v2.0 authentication endpoint. This endpoint autthenticates both personal (Microsoft) and work or school (Azure Active Directory) accounts.
* [Microsoft Azure Active Directory](https://manage.windowsazure.com): Register
  a new application in your tenant's Active Directory to support work or school
  users for your tenant, or multiple tenants.

### Authenticate with the Microsoft Graph service

The Microsoft Graph SDK for PHP does not include any default authentication implementations.
Instead, you can authenticate with the library of your choice, or against the OAuth
endpoint directly.

To connect with OAuth2, see the [PHP Connect Sample](https://github.com/microsoftgraph/php-rest-connect-sample.php).

### Call Microsoft Graph

The following is an example that shows how to call Microsoft Graph.

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

class UsageExample
{
    $accessToken = 'xxx';

    $graph = new Graph();
    $graph->setAccessToken($accessToken);

    $user = $graph->createRequest("GET", "/me")
                  ->setReturnType(Model\User::class)
                  ->execute();

    echo "Hello, I am $user->getGivenName() ";
}
```

## Develop

### Running Tests

Run ```vendor/bin/phpunit``` from the base directory.


## Documentation and resources

* [Documentation](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Examples](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Microsoft Graph website](https://graph.microsoft.io)

## Issues

View or log issues on the [Issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues) tab in the repo.

## Copyright and license

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

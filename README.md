# Getting started with the Microsoft Graph SDK for PHP

*This SDK is currently in preview, please continue to provide [feedback](https://github.com/microsoftgraph/msgraph-sdk-php/issues/new) as we iterate towards a production supported library.*

[![Build Status](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)


## Installation
The PHP SDK can be installed with Composer:
```
{
    "require": {
        "Microsoft/Graph": "0.1.*"
    }
}
```
## Getting started

### Register your application

Register your application to use Microsoft Graph API using one of the following
supported authentication portals:

* [Microsoft Application Registration Portal](https://apps.dev.microsoft.com) (**Recommended**):
  Register a new application that authenticates using the v2.0 authentication endpoint. This endpoint autthenticates both personal (Microsoft) and work or school (Azure Active Directory) accounts.
* [Microsoft Azure Active Directory](https://manage.windowsazure.com): Register
  a new application in your tenant's Active Directory to support work or school
  users for your tenant, or multiple tenants.

### Authenticate with the Microsoft Graph service

The Microsoft Graph SDK for PHP does not include any default authentication implementations.
Instead, the user will want to authenticate with the library of their choice, or against the OAuth
endpoint directly.

See the [PHP Connect Sample](https://github.com/microsoftgraph/php-rest-connect-sample.php) for connecting with OAuth2.

### Usage example

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

## Development

### Running Tests

Run ```vendor/bin/phpunit``` from the base directory


## Documentation and resources

* [Documentation](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Examples](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Microsoft Graph API](https://graph.microsoft.io)

## Issues

To view or log issues, see [issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues).

## License

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

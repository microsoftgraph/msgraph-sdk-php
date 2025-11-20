# Get started with the Microsoft Graph SDK for PHP

![Build Status](https://github.com/microsoftgraph/msgraph-sdk-php/actions/workflows/pr-validation.yml/badge.svg)
[![Latest Stable Version](http://poser.pugx.org/microsoft/microsoft-graph/v)](https://packagist.org/packages/microsoft/microsoft-graph)
[![Total Downloads](http://poser.pugx.org/microsoft/microsoft-graph/downloads)](https://packagist.org/packages/microsoft/microsoft-graph)
[![PHP Version Require](http://poser.pugx.org/microsoft/microsoft-graph/require/php)](https://packagist.org/packages/microsoft/microsoft-graph)

## Install the SDK
You can install the PHP SDK with Composer by editing your `composer.json` file:
```jsonc
{
    "require": {
        // x-release-please-start-version
        "microsoft/microsoft-graph": "^2.51.0"
        // x-release-please-end
    }
}
```
## Get started with Microsoft Graph

### Register your application

Register your application to use the Microsoft Graph API using [Microsoft Azure Active Directory](https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade) in your tenant's Active Directory to support work or school users for your tenant, or multiple tenants.

### Create a Token Request Context

A Token Request Context contains the credentials used to authenticate requests. The SDK supports various contexts that align with OAuth 2.0 flows: `client_credentials`, `authorization_code` and `on_behalf_of` with support for secret-based and certificate-based client authentication.

Under the hood, the Token Request Context is passed to an authentication provider which fetches, caches and refreshes access tokens ensuring all requests are authenticated against the Microsoft Identity platform.

The following sample creates a TokenRequestContext that [gets access without a user](https://docs.microsoft.com/en-us/graph/auth-v2-service?context=graph%2Fapi%2F1.0&view=graph-rest-1.0):

```php
<?php
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);

```

To [gets access on behalf of a user](https://docs.microsoft.com/en-us/graph/auth-v2-user?context=graph%2Fapi%2F1.0&view=graph-rest-1.0):

```php
<?php
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);

```
Note that your application will need to handle redirecting the user to the Microsoft Identity login page to get the `authorization_code` that's passed into the `AuthorizationCodeContext`.
[See](https://docs.microsoft.com/en-us/azure/active-directory/develop/v2-oauth2-auth-code-flow) for more on the `authorization_code` grant flow.
To keep your user signed in across multiple requests within a session, see section on [access token management](docs/authentication_samples.md#access-token-management)


### Initialize a GraphServiceClient

Using the Token Request Context and optional scopes, a `GraphServiceClient` can be initialised:

```php
use Microsoft\Graph\GraphServiceClient;

// Defaults to using https://graph.microsoft.com/.default scopes
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

// With specific scopes
$scopes = ['User.Read', 'Mail.ReadWrite'];
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);
```

To initialize the `GraphServiceClient` with an already acquired access token or to retrieve the access token that the SDK fetches on your behalf, see section on [access token management](docs/authentication_samples.md#access-token-management).

For more on Graph client configuration, see [more examples](docs/authentication_samples.md#creating-a-graph-client)

### Call Microsoft Graph using the v1.0 endpoint and models

The following is an example that shows how to fetch a user from Microsoft Graph

```php
<?php
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Authentication\Oauth\ClientCredentialContext;

$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
    $user = $graphServiceClient->users()->byUserId('[userPrincipalName]')->get()->wait();
    echo "Hello, I am {$user->getGivenName()}";

} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```

> Note: The SDK is designed to make async requests by default. Operations (`get()`, `post()`...) return a [Promise](https://docs.php-http.org/en/latest/components/promise.html). To get the result, call `wait()` after the operation.
> Example: `->get()->wait();`

Note that to calling `me()` requires a signed-in user and therefore delegated permissions (obtained using the `authorization_code` flow):
```php
<?php
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
$graphServiceClient = new GraphServiceClient($tokenRequestContext, $scopes);

try {
    $user = $graphServiceClient->me()->get()->wait();
    echo "Hello, I am {$user->getGivenName()}";
} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}

```
## Documentation and resources

* [Documentation](docs/README.md)

* [Examples](docs/README.md#using-the-sdk)

* [Microsoft Graph website](https://aka.ms/graph)

## Update Schedule

The Microsoft Graph PHP SDK is scheduled to be updated during the second and fourth week of each month

## Upgrading

For detailed information on breaking changes, bug fixes and new functionality introduced during major upgrades, check out our [Upgrade Guide](UPGRADING.md)

## Develop

### Run Tests

Run
 ```shell
vendor/bin/phpunit
```
from the base directory.

## Issues

View or log issues on the [Issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues) tab in the repo.

## Contribute

Please read our [Contributing](CONTRIBUTING.md) guidelines carefully for advice on how to contribute to this repo.

## Copyright and license

Copyright (c) Microsoft Corporation. All Rights Reserved. Licensed under the MIT [license](LICENSE).

This project has adopted the [Microsoft Open Source Code of Conduct](https://opensource.microsoft.com/codeofconduct/). For more information see the [Code of Conduct FAQ](https://opensource.microsoft.com/codeofconduct/faq/) or contact [opencode@microsoft.com](mailto:opencode@microsoft.com) with any additional questions or comments.

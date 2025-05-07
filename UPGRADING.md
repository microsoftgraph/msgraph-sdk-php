# Microsoft Graph PHP SDK Upgrade Guide

This guide highlights breaking changes, bug fixes and new features introduced during major upgrades.


# Upgrading to 2.0.0
- [New Features](#new-features)
- [Breaking Changes](#breaking-changes)
- [Bug Fixes](#bug-fixes)


# New Features

## Authentication Provider support
Version 2 introduces an Authentication Provider that handles the fetching, caching and refreshing of tokens ensuring all your requests are always authenticated.

The Authentication Provider provided wraps around PHP League's [OAuth 2.0 client](https://oauth2-client.thephpleague.com/) hence its name - `PhpLeagueAuthenticationProvider`. The `PhpLeagueAuthenticationProvider` currently supports the `client_credentials`, `authorization_code` and `on_behalf_of` OAuth 2.0 flows. It also supports using certificate-based client authentication alongside secret-based client authentication.

```php

// v1.x
$accessToken = getAccessToken(); // custom token retrieval method
$graph = new Graph();
$graph->setAccessToken($accessToken);


$graph->createRequest('GET', '/me')
        ->setAccessToken(getAccessToken()) //after initial token expires
        ...

// v2.0
$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read', 'Mail.Read'];
$authProvider = new GraphPhpLeagueAuthenticationProvider($tokenRequestContext, $scopes);

```

See more [code samples](README.md#create-an-authentication-provider-object) on how to initialise the Authentication Provider.

## Fluent Request Builder Pattern
Version 2 provides a fluent experience when making requests to the Graph. This is a break
from v1.x where raw URLs would be passed instead:

```php

// v1.x
$response = $graphClient->createRequest('GET', '/users/userId/messages')
                        ->setReturnType(Model\User::class)
                        ->execute();

// v2.0
$response = $graphServiceClient->users()->byUserId('userId')->messages()->get()->wait();
```

Hopefully this makes it more intuitive to work with the SDK and reduces time checking reference docs. Your feedback would be appreciated on your preferred experience or whether we should support both scenarios.

## Built-in Retries for 429 and 503 and 504 response status codes

A configurable RetryHandler has been added by default to the Guzzle handler stack that
respects the `Retry-After` header values. It also exponentially backs-off should retried requests continue to fail.

This would be mostly helpful for handling [throttling scenarios](https://docs.microsoft.com/en-us/graph/throttling) on the Microsoft Graph API.

See [this example](docs/general_samples.md#customizing-middleware-configuration) on how to customize middleware.

## Improved support for paged collections
For performance reasons, collections of entities are often split into pages and each page is returned with a URL to the next page. The `PageIterator` class simplifies consuming of paged collections. `PageIterator` handles enumerating the current page and requesting subsequent pages automatically.

See [this example](docs/general_samples.md#paging-through-a-collection)

## Support for Batch Requests
Combine multiple requests in a single call with ease. Up to 20 individual requests can be batched together to reduce network latency of making each request separately. The `BatchRequestBuilder` allows you to make requests to the `/$batch` endpoint of the Microsoft Graph API.

See [this example](docs/general_samples.md#batching-requests)

## Support for resumable large file uploads
To upload files larger than 3MB, Microsoft Graph API supports uploads using resumable upload sessions where several bytes are uploaded at a time. The SDK provides a LargeFileUpload task that slices your file into chunks and progressively uploads them until completion.

See [this example](docs/uploads_samples.md#uploading-large-files)

# Breaking Changes
The following breaking changes were introduced in v2.0.0 with more detailed upgrade steps in the following section:
- [Moved Beta models to the Microsoft Graph Beta SDK](#moved-beta-models-to-the-microsoft-graph-beta-sdkhttpspackagistorgpackagesmicrosoftmicrosoft-graph-beta).
- [Changes to the Graph client construction and configuration experience](#changes-to-graph-client-instantiation-and-configuration).
- [Changes to Graph request functionality](#changes-to-graph-request-functionality).
- [Changes to the base `Enum` class](#changes-to-the-base-enum-class).
- [Dependency changes](#dependency-changes).


## Moved Beta models to the [Microsoft Graph Beta SDK](https://packagist.org/packages/microsoft/microsoft-graph-beta).
In v1.x, we support models that match the [Microsoft Graph Beta API metadata](https://graph.microsoft.com/beta/$metadata).

Version 2 removes our Beta models from the current package to allow us to adhere to [Semantic Versioning](https://semver.org/spec/v2.0.0.html) by preventing us
from merging breaking Beta model updates weekly. Users of the Beta models can now use the Beta SDK by requiring it in your `composer.json`:
```php
 "require": {
    "microsoft/microsoft-graph-beta": "^2.0.0",
}
```
Moving forward, the current package (`microsoft/microsoft-graph`) will only contain v1 models that match the [Microsoft Graph v1 API metadata](https://graph.microsoft.com/v1.0/$metadata)

## Changes to Graph client instantiation and configuration
Version 2 introduces HTTP and authentication configuration during creation of the Graph client and reduces unnecessary configuration from v1 e.g. baseUrl, ApiVersion among others.

```php

// v1.x
$graph = new Graph();
$graph->setBaseUrl('https://graph.microsoft.com/')
      ->setApiVersion('v1.0')
      ->setAccessToken('xyz');

// 2.0
$tokenRequestContext = new ClientCredentialContext(
    'tenantId',
    'clientId',
    'clientSecret'
);
// uses https://graph.microsoft.com/.default scopes
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

```
With version 2's configuration, all your requests are authenticated without additional effort.

See [this example](docs/general_samples.md#creating-a-graph-client) on how to customise the Guzzle HTTP client configuration.

## Changes to Graph request functionality

All requests are asynchronous by default in version 2 and allows you to pass your custom
response handler that handles the raw PSR-7 Response object. By default the PSR-7 Response body is deserialized to the expected model type.

Collection requests are supported in version 2 however paging through the collection is planned for future 2.0 Release Candidates.

```php

// v1.x
$request = $graphClient->createCollectionRequest('GET', '/me/messages');
                        ->setPageSize(5)
                        ->setReturnType(Model\Message::class);
$messages = $request->getPage();

// v2.0
$requestConfig = new MessagesRequestBuilderGetRequestConfiguration();
$requestConfig->queryParameters = new MessagesRequestBuilderGetQueryParameters();
$requestConfig->top = 5;
$messages = $graphClient->me()->messages()->get($requestConfig)->wait();
```

See [the examples](docs/general_samples.md#passing-request-headers) on how to pass headers and query parameters in your requests.

## Exception Handling

Any `4xx` or `5xx` responses from the Graph API will result in an `ApiException` being thrown.
The error response payload can be retrieved using `getError()` on the exception object.

```php

try {

} catch (ODataError $ex) {
    echo "{$ex->getError()->getCode()} : {$ex->getError()->getMessage()}";

}
```

## Changes to the base Enum class
`has()` and `toArray()` have been made static methods.

## Dependency changes

- PHP 7.4 is the new minimum supported PHP version.
- Guzzle 6 support is deprecated.

## Strongly typed models
This version leverages PHP 7's strong typing capabilities. Models as well as other components have strongly typed attributes, methods arguments and return types.


# Bug Fixes
Version 2 resolves most if not all issues around models in v1.x e.g. where getters
that were expected to return a collection would only return one entity.

Should we have missed any, feel free to create an issue on the repository.


# Remarks
Although this guide is written exhaustively to cover all breaking changes, it is possible that we forgot to mention some breaking changes.
Please open an issue or pull request to add any breaking changes you encounter that are not outlined in this guide.

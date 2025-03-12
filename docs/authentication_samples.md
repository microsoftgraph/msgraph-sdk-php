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

To make requests on behalf of an already signed in user, where your front-end application has already acquired an access token for the user, you can use the `OnBehalfOfContext` which uses the [On-Behalf-Of flow](https://learn.microsoft.com/en-us/azure/active-directory/develop/v2-oauth2-on-behalf-of-flow) to fetch
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

## Access token management

Using the `TokenRequestContext`, an instance of the `GraphServiceClient` requests access tokens and refresh tokens.
The tokens are stored by default in an in-memory cache so that future requests using the same instance of the `GraphServiceClient` can re-use the previously acquired tokens.

The default in-memory cache is a map/dictionary with a unique key identifying a user/application with a tenant and a PHPLeague [`AccessToken`](https://github.com/thephpleague/oauth2-client/blob/master/src/Token/AccessToken.php) object as its value. The unique key ensures the right token for a user is retrieved from the cache. For `TokenRequestContexts` that do not require a signed-in user (application permissions), the cache key will be **`{tenantId}-{clientId}`** and for those that require a signed-in user (delegated permissions), the cache key will be
**`{tenantId}-{clientId}-{userId}`**. The `AccessToken` object carries both the `access_token`, its expiry and a `refresh_token` if available.
The in-memory cache lives as a PHP object within your application's PHP process and is destroyed when the process terminates.

For scenarios where an application requires a signed-in user, retaining the same
instance of the `GraphServiceClient` across multiple requests to your application for the same user's session is not feasible. This section outlines
how your application can retrieve access tokens from the SDK and pass already acquired access tokens to the SDK for future requests without the user signing in for each request.

### Retrieving the access token from the SDK

The SDK provides a mechanism to expose the access token and refresh token that it acquires to your application for use in future requests. This would prevent the SDK from making a new
token request with each `GraphServiceClient` your application instantiates. It also allows your application to prevent its users from signing in with each request within a session.

By default, a `GraphServiceClient` instance caches access tokens in a built-in [`InMemoryAccessTokenCache`](https://github.com/microsoft/kiota-authentication-phpleague-php/blob/main/src/Cache/InMemoryAccessTokenCache.php). The cache will be populated with a PHPLeague [`AccessToken`](https://github.com/thephpleague/oauth2-client/blob/master/src/Token/AccessToken.php) object which carries both the `access_token`, its expiry and a `refresh_token` if available. When the `GraphServiceClient` instance is re-used for a request with the same user/application, the in-memory cache is checked for a valid token otherwise a new token request is made.

However, to get the cached token that the SDK requests for a user/application you
can initialise an `InMemoryAccessTokenCache` or pass a custom implementation of the [`AccessTokenCache`](https://github.com/microsoft/kiota-authentication-phpleague-php/blob/main/src/Cache/AccessTokenCache.php) interface and pass it as a parameter when initialising the `GraphServiceClient`. The two approaches are outlined below:

### Using an InMemoryAccessTokenCache instance

```php
use Microsoft\Kiota\Authentication\Cache\InMemoryAccessTokenCache;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAccessTokenProvider;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;
use Microsoft\Kiota\Authentication\Oauth\AuthorizationCodeContext;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode',
    'redirectUri'
);
$scopes = ['User.Read', 'Mail.ReadWrite'];

$inMemoryCache = new InMemoryAccessTokenCache();

$graphServiceClient = GraphServiceClient::createWithAuthenticationProvider(
    GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
        GraphPhpLeagueAccessTokenProvider::createWithCache(
            $inMemoryCache,
            $tokenRequestContext,
            $scopes
        )
    )
);

$accessToken = $inMemoryCache->getTokenWithContext($tokenRequestContext);

```

### Using a custom AccessTokenCache implementation

A custom [`AccessTokenCache`](https://github.com/microsoft/kiota-authentication-phpleague-php/blob/main/src/Cache/AccessTokenCache.php) interface implementation can also be provided. After the request, the SDK persists the token in the
custom cache via the `persistAccessToken()` method.

By default, the SDK adds a unique cache key/identifier to a `TokenRequestContext` that uniquely identifies the tenant, client and user (if applicable).
For `TokenRequestContexts` that do not require a signed-in user (application permissions), the cache key will be
**`{tenantId}-{clientId}`** and for those that require a signed-in user (delegated permissions), the cache key will be
**`{tenantId}-{clientId}-{userId}`**.

Alternatively, you can override the default cache key

To retrieve the access token persisted to your custom cache for a particular user's/application's `TokenRequestContext`:
```php

$accessToken = $customCache->getAccessToken($tokenRequestContext->getCacheKey());

```

### Initializing a GraphServiceClient with an access token

For applications that already have built-in mechanisms to fetch and refresh access tokens, the SDK supports passing these tokens to a `GraphServiceClient` by initializing
a client using an [`AccessTokenCache`](https://github.com/microsoft/kiota-authentication-phpleague-php/blob/main/src/Cache/AccessTokenCache.php) interface implementation.

The SDK provides a built-in implementation of this interface via an [`InMemoryAccessTokenCache`](https://github.com/microsoft/kiota-authentication-phpleague-php/blob/main/src/Cache/InMemoryAccessTokenCache.php).

This is also useful when re-using a previously retrieved access token for a signed-in user during a previous request.

The SDK will check the cache for a valid token before considering requesting a new token. If the provided token is expired
and a refresh token is present, the access token will be refreshed and persisted to the cache. If no refresh token is provided, the SDK requests attempts to retrieve a new access token and persists it to the cache. In cases where a signed-in user is present, e.g. authorization_code OAuth flows, the new token request will most likely fail because no valid `authorization_code` will be present meaning the user has to sign in again.

### Using the `InMemoryAccessTokenCache`

The in-memory cache can be hydrated/initialised using the `TokenRequestContext` and a PHPLeague [`AccessToken`](https://github.com/thephpleague/oauth2-client/blob/master/src/Token/AccessToken.php) object for a user/application:

```php

use Microsoft\Kiota\Authentication\Cache\InMemoryAccessTokenCache;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAccessTokenProvider;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;
use League\OAuth2\Client\Token\AccessToken;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode', // use a placeholder value since user is not signed in again
    'redirectUri'
);

$cache = new InMemoryAccessTokenCache(
    $tokenRequestContext,
    new AccessToken(
        [
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
            'expires' => 1
        ]
    )
);

$graphServiceClient = GraphServiceClient::createWithAuthenticationProvider(
    GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
        GraphPhpLeagueAccessTokenProvider::createWithCache(
            $cache,
            $tokenRequestContext,
            $scopes
        )
    )
);

```

For scenarios where your application may need to make requests for multiple users using the same `GraphServiceClient`, the `InMemoryAccessTokenCache` can
be initialized with multiple TokenRequestContext-AccessToken pairs using `withToken`:
```php

use Microsoft\Kiota\Authentication\Cache\InMemoryAccessTokenCache;
use Microsoft\Graph\GraphServiceClient;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAccessTokenProvider;
use Microsoft\Graph\Core\Authentication\GraphPhpLeagueAuthenticationProvider;
use League\OAuth2\Client\Token\AccessToken;

$tokenRequestContext = new AuthorizationCodeContext(
    'tenantId',
    'clientId',
    'clientSecret',
    'authCode', // use a placeholder value since user is not signed in again
    'redirectUri'
);

$cache = (new InMemoryAccessTokenCache($tokenRequestContext, new AccessToken([
    // ...
])));

$cache->withToken($tokenRequestContext2, new AccessToken([
            // ...
        ]))->withToken($tokenRequestContext, new AccessToken([
            // ...
        ]))->withToken($tokenRequestContext3, new AccessToken());


$graphServiceClient = GraphServiceClient::createWithAuthenticationProvider(
    GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
        GraphPhpLeagueAccessTokenProvider::createWithCache(
            $cache,
            $tokenRequestContext,
            $scopes
        )
    )
);

```

### Using a custom `AccessTokenCache` implementation`

The SDK retrieves cached tokens using a cache key/identifier on the `TokenRequestContext`. The cache key
on the `TokenRequestContext` is set using `setCacheKey()` which accepts an [`AccessToken`](https://github.com/thephpleague/oauth2-client/blob/master/src/Token/AccessToken.php) object.

The `TokenRequestContext` uses the `AccessToken` to generate a unique identifier per user, client and tenant. For `TokenRequestContexts` that do not require a signed-in user (application permissions), the cache key will be
**`{tenantId}-{clientId}`** and for those that require a signed-in user (delegated permissions), the cache key will be
**`{tenantId}-{clientId}-{userId}`**.

For this scenario, the custom AccessTokenCache will need to be initialized in a way that the cache key set on the
`TokenRequestContext` aligns with the key the custom AccessTokenCache maps to the user/application's access token

```php

$accessToken = new AccessToken([
    'access_token' => $accessToken,
    'refresh_token' => $refreshToken,
    'expires' => ...
]);

$tokenRequestContext->setCacheKey($accessToken);

// init custom cache with tokens mapped to specific user/app using $tokenRequestContext->getCacheKey()
$customCache = new CustomCache($tokenRequestContext->getCacheKey(), $accessToken);

// init graph client
$graphServiceClient = GraphServiceClient::createWithAuthenticationProvider(
    GraphPhpLeagueAuthenticationProvider::createWithAccessTokenProvider(
        GraphPhpLeagueAccessTokenProvider::createWithCache(
            $customCache,
            $tokenRequestContext,
            $scopes
        )
    )
);

```

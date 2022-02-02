# Microsoft Graph PHP SDK Upgrade Guide

This guide highlights breaking changes, bug fixes and new features introduced during major upgrades.

# Upgrading from 2.0-RC2 to 2.0-RC3

# Breaking Changes
## `GraphClientException` & `GraphServerException`'s `getRawResponseBody()` returns a `StreamInterface` instead of `array`
The SDK currently throws a `GraphClientException` 4xx responses and a `GraphServiceException` for 5xx responses from the Graph API.
The raw payload that accompanied the 4xx/5xx status code can be retrieved by calling `getRawResponseBody()` on the exception object.

This change returns a `StreamInterface` instead of an array to accommodate HTML/string response bodies.

To get the response payload as an Error object, use `getError()`. To get the raw string you can now use `getResponseBodyAsString()` and to get
the json-decoded response use `getResponseBodyJson()`.

# Bug Fixes
Adding headers to a `GraphRequest` now allows you to overwrite the default headers e.g. Content-Type. Previously,
any new header values would be appended to the default value.


# Upgrading from 1.x to 2.0
- [Breaking Changes](#breaking-changes)
- [Bug Fixes](#bug-fixes)
- [New Features](#new-features)

# Breaking Changes
The following breaking changes were introduced in v2.0.0 with more detailed upgrade steps in the following section:
- [Moved Beta models to the Microsoft Graph Beta SDK](#moved-beta-models-to-the-microsoft-graph-beta-sdkhttpspackagistorgpackagesmicrosoftmicrosoft-graph-beta).
- [Changes to the Graph client construction and configuration experience](#changes-to-graph-client-instantiation-and-configuration).
- [Changes to Graph request and collection request functionality](#changes-to-graph-request-and-collection-request-functionality).
- [Changes to Exception types thrown](#changes-to-exception-types-thrown-by-the-sdk)
- [Deprecated support for Guzzle 6](#guzzle-6-deprecation).
- [Introduced strongly typed method parameters and return type declarations where possible](#strongly-typed-method-parameters-and-return-types).
- [Changes to the base `Enum` class](#changes-to-the-base-enum-class).

## Moved Beta models to the [Microsoft Graph Beta SDK](https://packagist.org/packages/microsoft/microsoft-graph-beta).
In v1.x, we support models that match the [Microsoft Graph Beta API metadata](https://graph.microsoft.com/beta/$metadata).

Version 2 removes our Beta models from the current package to allow us to adhere to [Semantic Versioning](https://semver.org/spec/v2.0.0.html) by preventing us
from merging breaking Beta model updates weekly. Users of the Beta models can now use the Beta SDK by requiring it in your `composer.json`:
```php
 "require": {
    "microsoft/microsoft-graph-beta": "^2.0.0-RC1",
    "microsoft/microsoft-graph-core": "@RC"
}
```
OR
```php
"minimum-stability": "RC"
"require": {
    "microsoft/microsoft-graph-beta": "^2.0.0-RC1"
}
```
Moving forward, the current package (`microsoft/microsoft-graph`) will only contain v1 models that match the [Microsoft Graph v1 API metadata](https://graph.microsoft.com/v1.0/$metadata)

## Changes to Graph client instantiation and configuration
Version 2 updates the `Graph` client constructor and setter methods.
The objective is to remove HTTP specific configuration methods from the Graph client and hand over those concerns to an [HttpClientFactory](#introducing-the-httpclientfactory) as well as
set a default API version based on the SDK in use.

The following methods have been deprecated:
- `setProxyPort()`
- `setBaseUrl()`
- `setApiVersion()`

The Graph client can now only be initialised with a Graph [National cloud endpoint](https://docs.microsoft.com/en-us/graph/deployments#microsoft-graph-and-graph-explorer-service-root-endpoints).
By default, the Graph client is initialised with the global endpoint `https://graph.microsoft.com/`. National cloud endpoints are now exposed via a `NationalCloud` object.

The API version is automatically set based on the SDK you use - the Beta SDK sets the "beta" version.

To instantiate a Graph client:
```php
use \Microsoft\Graph\Graph;
use \Microsoft\Graph\Core\NationalCloud;

$graphClient = new Graph(); // uses the default global endpoint and API v1.0

$graphClient = new Graph(NationalCloud::CHINA);

```
Please see the [section on the HttpClientFactory](#introducing-the-httpclientfactory) for snippets on how to set the proxy port among other Guzzle request options.

## Changes to Graph request and collection request functionality
### 1. Creation of requests
For developers creating requests via the constructors, the parameters have been reduced by abstracting HTTP concerns under the Graph client.
For example, in v1.x:
```php
use \Microsoft\Graph\Http\GraphRequest;

$accessToken = "abc";
$baseUrl = "https://graph.microsoft.com";
$proxyPort = "http://localhost:1080";
$proxyVerifySSL = true;

$request = new GraphRequest("GET", "/users", $accessToken, $baseUrl, "v1.0", $proxyPort, $proxyVerifySSL);
```

would change to:
```php
use \Microsoft\Graph\Http\HttpClientFactory;
use \Microsoft\Graph\Graph;
use \Microsoft\Graph\Core\NationalCloud;
use \Microsoft\Graph\Http\GraphRequest;

$guzzleConfig = [
    "proxy" => "http://localhost:1080",
    "verify_ssl" => true,
];
$httpClient = HttpClientFactory::setClientConfig($guzzleConfig)::createAdapter();
$graphClient = new Graph(NationalCloud::GLOBAL, $httpClient);
$graphClient->setAccessToken("abc");

$request = new GraphRequest("GET", "/users", $graphClient);

```
Same applies to a `GraphCollectionRequest`.


Other breaking changes:
- `$headers` and `$requestBody` have been made `private` attributes
- `getBaseUrl()`, `getApiVersion()` and `getReturnsStream()` are deprecated.

### 2. Deprecated HTTP client configuration methods
``setHttpErrors()`` and `setTimeout()` have been deprecated in favour of [using the HttpClientFactory](#introducing-the-httpclientfactory).

### 3. Configuring Graph requests
### Setting and fetching headers
Version 2 changes the array structure when setting and getting headers:
- `addHeaders()` and `getHeaders()` both receive and return `array<string, string|string[]>`.
- When adding headers, version 2 will not pass your Graph Authorization tokens to a non-Graph base URL.

### Setting return types
`setReturnType()` throws an `InvalidArgumentException` if the return type passed does not match an existing class definition.

### Handling streams
Version 2 supports passing any PSR-7 `StreamInterface` to the request body via `attachBody()`.

In order to get a stream response, version 2 deprecates setting the return type to `GuzzleHttp\Psr7\Stream` in favour of
passing `Psr\Http\Message\StreamInterface` to `setReturnType()`.

### Setting page size for collection requests
`setPageSize()` throws an `InvalidArgumentException` from the previous `GraphException` if the page size passed exceeds the maximum allowed (999).

### 4. Making requests
### Synchronous requests
Synchronous requests via `execute()`, `download()` and `upload()` now accept any [PSR-18](https://www.php-fig.org/psr/psr-18/) HTTP client to overwrite the SDK's default
Guzzle client.

As a result, the three methods throw PSR-18's `ClientExceptionInterface` if the HTTP client is unable to send the HTTP request as opposed to `\GuzzleHttp\Exception\GuzzleException`.

When handling files, `upload()` and `download()` throw an `RuntimeException` if the file path provided cannot be opened for reading and writing
respectively.

### Asynchronous requests
`executeAsync()` allows you to overwrite the default Guzzle client using any implementation of PHP-HTTP's HTTPlug `HttpAsyncClient` interface.

As a result, `executeAsync()` returns a HTTPlug `Http\Promise\Promise` instead of Guzzle's `\GuzzleHttp\Promise\PromiseInterface` and
fails throwing a `ClientExceptionInterface` when the HTTP client is unable to send the request.

### Collection requests
`getPage()` and `count()` requests throw PSR-18's `ClientExceptionInterface` from the previous `\GuzzleHttp\Exception\GuzzleException`.

If `@odata.count` does not exist in the response payload of a `count()` request, `null` is returned as opposed to triggering an error in v1.x.

`setPageCallInfo()` and `processPageCallReturn()` are now private since they provide low level implementation detail.

### 5. Handling responses
The SDK will now throw a `GraphClientException` for 4xx responses and a `GraphServiceException` for 5xx responses. Note that this
applies even if `http_errors` is set to `true` in your Guzzle config.

The error payload returned from the Graph API is available via `getError()`, the response headers,
response status code, raw request payload, and the request object on both exception objects.

Also, `getStatus()` on a `GraphResponse` object now returns an `int` instead of `string`.

### Collection responses
`getPage()` has been aligned to `execute()` by returning a `GraphResponse` object if no return type is specified. To get the
JSON-decoded array you can call `getBody()` on the `GraphResponse` object returned.

If a return type is given, `getPage()` still returns the deserialized response body.

In case of a 4xx or 5xx response, a `GraphClientException` and `GraphServiceException` is thrown respectively.

For HTTP client-related issues, PSR-18's `ClientExceptionInterface` is thrown.

## Changes to Exception types thrown by the SDK
Moving forward, PHP native exceptions e.g. `InvalidArgumentException`, `RuntimeException` will be thrown for validation errors in methods.

PSR-18's `ClientExceptionInterface` will be thrown for HTTP client and network-related issues for both synchronous and asynchronous requests.

Lastly, a `GraphClientException` will be thrown for 4xx responses and a `GraphServiceException` for a 5xx response.

These exception objects will expose the payload from the Graph API via `getError()` as well as the response headers, status code, raw response body and the Graph request object.

## Guzzle 6 deprecation
To provide HTTP client flexibility for asynchronous requests by supporting HTTPlug's `HttpAsyncClient` interface, we opted to use HTTPlug's Guzzle-7 adapter
meaning we can't support Guzzle 6.

For Guzzle 6 users, we recommend upgrading to Guzzle 7 or using version 1.x of the SDK.

Future model updates will however only be made on SDK versions >=2.0.0.

## Strongly typed method parameters and return types
Version 2 makes use of PHP 7's strong typing capabilities. The types chosen are aligned with what has been on v1.x's PHPDoc sections of
various methods. Where there has been a breaking change, they have been outlined in previous sections of this guide.

## Changes to the base Enum class
`has()` and `toArray()` have been made static methods.

# Bug Fixes
Model getters expected to return a collection of entities now work as expected e.g. getting meeting attendees using v1.x of the SDK
would return a single attendee object instead of a list of attendees causing various PHP warnings and errors:
```php

$graphClient = new Microsoft\Graph\Graph();
$onlineMeeting = $graphClient->setAccessToken("abc")
                             ->createRequest("GET", "/me/onlineMeetings/1234")
                             ->setReturnType(\Microsoft\Graph\Model\OnlineMeeting::class)
                             ->execute();

$attendees = $onlineMeeting->getParticipants()->getAttendees(); // erroneously returns a single MeetingParticipantInfo object

if ($attendees) {
    foreach ($attendees as $attendee) { //PHP Warning: Invalid argument supplied to foreach()
        echo $attendee->getIdentity()->getUser()->getDisplayName();
    }
}
```
Version 2, fixes such getters to return the expected list of entities (`MeetingParticipantInfo[]`).

# New Features

### Introducing the `PageIterator`
The `PageIterator` allows you to asynchronously page through a collection response from the Graph API while processing each item in the collection
by automatically calling the `@odata.nextLink` on each page.

To process each entity in the collection, the `PageIterator` accepts a callback function that is executed against each entity in the collection.
The type of object passed to your callback will match the return type set when creating the `PageIterator`. If no return type is set, a JSON-decoded
entity array is passed to your callback.

The `PageIterator` also gives you control on when to `pause()` and `resume()` processing collection responses. Iteration continues if the
callback function returns `true` and pauses if the callback returns `false`.

Resuming iteration continues processing from the next entity in the collection with automatic fetching of the next page if that is necessary.

To get the completion status of the `PageIterator`, you can call `isComplete()`. Iteration is in a completed state after the last item on the last
page is processed. Any exceptions or errors encountered before do not move the `PageIterator` to a completed state.

The `PageIterator` can be created from a `GraphCollectionRequest` object. In this case, the `PageIterator` will be initialised with the first
page of results received by calling `getPage()` and the return type set on the request via `setReturnType()`:

```php
use Microsoft\Graph\Model\Message;
use Microsoft\Graph\Exception\GraphClientException;

$callback = function (Message $message) {
    // your custom logic
};

$pageIterator = $graphClient->createCollectionRequest("GET", "/me/messages")
                            ->setPageSize(20)
                            ->setReturnType(Message::class)
                            ->pageIterator($callback);

$promise = $pageIterator->iterate();

while (!$pageIterator->isComplete()) {
    try {
        $promise->wait();
    } catch (GraphClientException $ex) {
        if ($ex->getError()->getCode() === "InvalidAuthenticationToken") {
            $accessToken = renewAccessToken(); // custom method that fetches a new access token
            $pageIterator->setAccessToken($accessToken);
        }
    } catch (\Exception $ex) {
        echo "Page iterator failed with: ".$ex;
    }

    $pageIterator->resume(); // tries to fetch the next page again & continue processing
}

```

Lastly, the `PageIterator` exposes the `@odata.deltaLink` after completion via `getDeltaLink()`. You would need to create a new collection
request initialised with the delta link and `PageIterator` to process the items that have changed since previous processing completed.

### Support for PSR-18 clients and HTTPlug
The SDK now supports overwriting the default Guzzle HTTP client with any PSR-18 compliant HTTP client for synchronous requests:
```php

$httpClient = new Psr18Client();
$graphClient = new Graph();
$response = $graphClient->setAccessToken("abc")
                        ->createRequest("GET", "/me")
                        ->execute($httpClient);
```

For asynchronous requests, the default Guzzle HTTP client can be overwritten with any implementation of HTTPlug's `HttpAsyncClient` interface:
```php

$httpClient = new HttpAsyncClientImpl();
$graphClient = new Graph();
$response = $graphClient->setAccessToken("abc")
                        ->createRequest("GET", "/me")
                        ->executeAsync($httpClient);
```
Request configuration that would have been passed to the default Guzzle client are passed to the client i.e. headers, request body and full request URL
formed by resolving the National Cloud (base URL) with the endpoint provided when creating the request.


### Introducing the `HttpClientFactory`
Version 2 introduces the ability to easily configure a Guzzle HTTP client for use with the Graph API. The `HttpClientFactory`
sets some default Guzzle configuration options:
- Connection timeout of 30 seconds.
- Request timeout of 100 seconds.
- A `Content-Type: application/json` header.
- Disables `http_errors`.

Please note that the `base_uri` is always overwritten to the `NationalCloud` URL set via `setNationalCloud()` on the `HttpClientFactory`.
By default, the national cloud is set to `NationalCloud::GLOBAL`: the Graph API's global endpoint (`https://graph.microsoft.com`).

If you'd like to customise a Guzzle client's configuration and use it in the Graph client:
```php
use Microsoft\Graph\Http\HttpClientFactory;
use Microsoft\Graph\Graph;

$guzzleConfig = [
    // your guzzle configuration
];
$httpClient = HttpClientFactory::setClientConfig($guzzleConfig)::createAdapter();
$graphClient = new Graph(null, $httpClient); // uses the default Graph global endpoint as the base URL/national cloud

```
To override the SDK's default Guzzle client before making the request:
```php
use Microsoft\Graph\Http\HttpClientFactory;
use Microsoft\Graph\Graph;

$guzzleConfig = [
    // your guzzle configuration
];
$httpClient = HttpClientFactory::setClientConfig($guzzleConfig)::createAdapter();

$graphClient = new Graph(); //creates a default Guzzle client
$response = $graphClient->setAccessToken("abc")
                        ->createRequest("GET", "/me")
                        ->execute($httpClient);

```
To change the National Cloud set as the base_uri:
```php
use Microsoft\Graph\Http\HttpClientFactory;
use Microsoft\Graph\Core\NationalCloud;

$guzzleConfig = [
    // your config
];

$httpClient = HttpClientFactory::setNationalCloud(NationalCloud::GERMANY)::setClientConfig($guzzleConfig)::create();

```

If you'd prefer to use the Guzzle client directly without the Graph client we recommend you install and use [Microsoft Graph Core](https://packagist.org/packages/microsoft/microsoft-graph-core)
directly instead of the current library which contains models. In the coming releases, we will be adding default Graph middleware such as
RetryHandlers, among others, which could be useful for your use-cases:
```php
use Microsoft\Graph\Http\HttpClientFactory;

$guzzleConfig = [
    // your guzzle config
];

$guzzleClient = HttpClientFactory::setClientConfig($guzzleConfig)::create();

$response = $guzzleClient->get("/users"); // base URL is set by the HttpClientFactory

```

# Remarks
Although this guide is written exhaustively to cover all breaking changes, it is possible that we forgot to mention some breaking changes.
Please open an issue or pull request to add any breaking changes you encounter that are not outlined in this guide.

<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\SharedCookies\Item\BrowserSharedCookieItemRequestBuilder;
use Microsoft\Graph\Generated\Models\BrowserSharedCookie;
use Microsoft\Graph\Generated\Models\BrowserSharedCookieCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedCookies property of the microsoft.graph.browserSiteList entity.
*/
class SharedCookiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedCookies property of the microsoft.graph.browserSiteList entity.
     * @param string $browserSharedCookieId The unique identifier of browserSharedCookie
     * @return BrowserSharedCookieItemRequestBuilder
    */
    public function byBrowserSharedCookieId(string $browserSharedCookieId): BrowserSharedCookieItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['browserSharedCookie%2Did'] = $browserSharedCookieId;
        return new BrowserSharedCookieItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharedCookiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/edge/internetExplorerMode/siteLists/{browserSiteList%2Did}/sharedCookies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the browserSharedCookie objects and their properties. This API is available in the following national cloud deployments.
     * @param SharedCookiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSharedCookieCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/browsersitelist-list-sharedcookies?view=graph-rest-1.0 Find more info here
    */
    public function get(?SharedCookiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSharedCookieCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new browserSharedCookie object in a browserSiteList. This API is available in the following national cloud deployments.
     * @param BrowserSharedCookie $body The request body
     * @param SharedCookiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSharedCookie|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/browsersitelist-post-sharedcookies?view=graph-rest-1.0 Find more info here
    */
    public function post(BrowserSharedCookie $body, ?SharedCookiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSharedCookie::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the browserSharedCookie objects and their properties. This API is available in the following national cloud deployments.
     * @param SharedCookiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedCookiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new browserSharedCookie object in a browserSiteList. This API is available in the following national cloud deployments.
     * @param BrowserSharedCookie $body The request body
     * @param SharedCookiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BrowserSharedCookie $body, ?SharedCookiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SharedCookiesRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedCookiesRequestBuilder {
        return new SharedCookiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\BrowserSiteListItemRequestBuilder;
use Microsoft\Graph\Generated\Models\BrowserSiteList;
use Microsoft\Graph\Generated\Models\BrowserSiteListCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteLists property of the microsoft.graph.internetExplorerMode entity.
*/
class SiteListsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteLists property of the microsoft.graph.internetExplorerMode entity.
     * @param string $browserSiteListId The unique identifier of browserSiteList
     * @return BrowserSiteListItemRequestBuilder
    */
    public function byBrowserSiteListId(string $browserSiteListId): BrowserSiteListItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['browserSiteList%2Did'] = $browserSiteListId;
        return new BrowserSiteListItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteListsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/edge/internetExplorerMode/siteLists{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the browserSiteList objects and their properties.
     * @param SiteListsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSiteListCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/internetexplorermode-list-sitelists?view=graph-rest-1.0 Find more info here
    */
    public function get(?SiteListsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSiteListCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new browserSiteList object to support Internet Explorer mode.
     * @param BrowserSiteList $body The request body
     * @param SiteListsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BrowserSiteList|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/internetexplorermode-post-sitelists?view=graph-rest-1.0 Find more info here
    */
    public function post(BrowserSiteList $body, ?SiteListsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BrowserSiteList::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the browserSiteList objects and their properties.
     * @param SiteListsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteListsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new browserSiteList object to support Internet Explorer mode.
     * @param BrowserSiteList $body The request body
     * @param SiteListsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BrowserSiteList $body, ?SiteListsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteListsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteListsRequestBuilder {
        return new SiteListsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

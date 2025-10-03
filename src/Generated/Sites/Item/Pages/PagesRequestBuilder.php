<?php

namespace Microsoft\\Graph\\Generated\Sites\Item\Pages;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\BaseSitePage;
use Microsoft\\Graph\\Generated\Models\BaseSitePageCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Sites\Item\Pages\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Sites\Item\Pages\GraphSitePage\GraphSitePageRequestBuilder;
use Microsoft\\Graph\\Generated\Sites\Item\Pages\Item\BaseSitePageItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the pages property of the microsoft.graph.site entity.
*/
class PagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to sitePage.
    */
    public function graphSitePage(): GraphSitePageRequestBuilder {
        return new GraphSitePageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the pages property of the microsoft.graph.site entity.
     * @param string $baseSitePageId The unique identifier of baseSitePage
     * @return BaseSitePageItemRequestBuilder
    */
    public function byBaseSitePageId(string $baseSitePageId): BaseSitePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['baseSitePage%2Did'] = $baseSitePageId;
        return new BaseSitePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/pages{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the collection of baseSitePage objects from the site pages list in a site. All pages in the site are returned (with pagination). Sort alphabetically by name in ascending order. The following table lists the available subtypes.
     * @param PagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BaseSitePageCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/basesitepage-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?PagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BaseSitePageCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new sitePage in the site pages list in a site.
     * @param BaseSitePage $body The request body
     * @param PagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BaseSitePage|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sitepage-create?view=graph-rest-1.0 Find more info here
    */
    public function post(BaseSitePage $body, ?PagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BaseSitePage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the collection of baseSitePage objects from the site pages list in a site. All pages in the site are returned (with pagination). Sort alphabetically by name in ascending order. The following table lists the available subtypes.
     * @param PagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new sitePage in the site pages list in a site.
     * @param BaseSitePage $body The request body
     * @param PagesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BaseSitePage $body, ?PagesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PagesRequestBuilder
    */
    public function withUrl(string $rawUrl): PagesRequestBuilder {
        return new PagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

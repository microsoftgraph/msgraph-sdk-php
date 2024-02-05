<?php

namespace Microsoft\Graph\Generated\Sites;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SiteCollectionResponse;
use Microsoft\Graph\Generated\Sites\Add\AddRequestBuilder;
use Microsoft\Graph\Generated\Sites\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Sites\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Sites\GetAllSites\GetAllSitesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Remove\RemoveRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of site entities.
*/
class SitesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the add method.
    */
    public function add(): AddRequestBuilder {
        return new AddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllSites method.
    */
    public function getAllSites(): GetAllSitesRequestBuilder {
        return new GetAllSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the remove method.
    */
    public function remove(): RemoveRequestBuilder {
        return new RemoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of site entities.
     * @param string $siteId The unique identifier of site
     * @return SiteItemRequestBuilder
    */
    public function bySiteId(string $siteId): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $siteId;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SitesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all available [sites][] in an organization. Specific filter criteria and query options are also supported and described below: In addition, you can use a [$search][] query against the /sites collection to find sites matching given keywords.If you want to list all sites across all geographies, refer to getAllSites][]. For more guidance about building applications that use site discovery for scanning purposes, see [Best practices for discovering files and detecting changes at scale.
     * @param SitesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?SitesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all available [sites][] in an organization. Specific filter criteria and query options are also supported and described below: In addition, you can use a [$search][] query against the /sites collection to find sites matching given keywords.If you want to list all sites across all geographies, refer to getAllSites][]. For more guidance about building applications that use site discovery for scanning purposes, see [Best practices for discovering files and detecting changes at scale.
     * @param SitesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SitesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SitesRequestBuilder
    */
    public function withUrl(string $rawUrl): SitesRequestBuilder {
        return new SitesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

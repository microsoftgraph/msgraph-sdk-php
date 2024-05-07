<?php

namespace Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SitePage;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\CanvasLayoutRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CreatedByUser\CreatedByUserRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\LastModifiedByUser\LastModifiedByUserRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\WebParts\WebPartsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to sitePage.
*/
class GraphSitePageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the canvasLayout property of the microsoft.graph.sitePage entity.
    */
    public function canvasLayout(): CanvasLayoutRequestBuilder {
        return new CanvasLayoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdByUser property of the microsoft.graph.baseItem entity.
    */
    public function createdByUser(): CreatedByUserRequestBuilder {
        return new CreatedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lastModifiedByUser property of the microsoft.graph.baseItem entity.
    */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder {
        return new LastModifiedByUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the webParts property of the microsoft.graph.sitePage entity.
    */
    public function webParts(): WebPartsRequestBuilder {
        return new WebPartsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphSitePageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/pages/{baseSitePage%2Did}/graph.sitePage{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the metadata for a sitePage in the site pages list in a site.
     * @param GraphSitePageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SitePage|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sitepage-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?GraphSitePageRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SitePage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the metadata for a sitePage in the site pages list in a site.
     * @param GraphSitePageRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphSitePageRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphSitePageRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphSitePageRequestBuilder {
        return new GraphSitePageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

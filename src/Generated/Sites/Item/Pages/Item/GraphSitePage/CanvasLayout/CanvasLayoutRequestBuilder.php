<?php

namespace Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CanvasLayout;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\HorizontalSections\HorizontalSectionsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\Pages\Item\GraphSitePage\CanvasLayout\VerticalSection\VerticalSectionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the canvasLayout property of the microsoft.graph.sitePage entity.
*/
class CanvasLayoutRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the horizontalSections property of the microsoft.graph.canvasLayout entity.
    */
    public function horizontalSections(): HorizontalSectionsRequestBuilder {
        return new HorizontalSectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the verticalSection property of the microsoft.graph.canvasLayout entity.
    */
    public function verticalSection(): VerticalSectionRequestBuilder {
        return new VerticalSectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CanvasLayoutRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/pages/{baseSitePage%2Did}/graph.sitePage/canvasLayout{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property canvasLayout for sites
     * @param CanvasLayoutRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CanvasLayoutRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get canvasLayout from sites
     * @param CanvasLayoutRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CanvasLayout|null>
     * @throws Exception
    */
    public function get(?CanvasLayoutRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CanvasLayout::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property canvasLayout in sites
     * @param CanvasLayout $body The request body
     * @param CanvasLayoutRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CanvasLayout|null>
     * @throws Exception
    */
    public function patch(CanvasLayout $body, ?CanvasLayoutRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CanvasLayout::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property canvasLayout for sites
     * @param CanvasLayoutRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CanvasLayoutRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/sites/{site%2Did}/pages/{baseSitePage%2Did}/graph.sitePage/canvasLayout';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get canvasLayout from sites
     * @param CanvasLayoutRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CanvasLayoutRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property canvasLayout in sites
     * @param CanvasLayout $body The request body
     * @param CanvasLayoutRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CanvasLayout $body, ?CanvasLayoutRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/sites/{site%2Did}/pages/{baseSitePage%2Did}/graph.sitePage/canvasLayout';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return CanvasLayoutRequestBuilder
    */
    public function withUrl(string $rawUrl): CanvasLayoutRequestBuilder {
        return new CanvasLayoutRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

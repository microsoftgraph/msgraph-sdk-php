<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\AppB2BSignInActivityMetrics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\B2BSignInActivityMetrics;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appB2BSignInActivityMetrics property of the microsoft.graph.relatedTenant entity.
*/
class AppB2BSignInActivityMetricsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AppB2BSignInActivityMetricsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/relatedTenants/{relatedTenant%2Did}/appB2BSignInActivityMetrics{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get appB2BSignInActivityMetrics from directory
     * @param AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<B2BSignInActivityMetrics|null>
     * @throws Exception
    */
    public function get(?AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [B2BSignInActivityMetrics::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get appB2BSignInActivityMetrics from directory
     * @param AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppB2BSignInActivityMetricsRequestBuilder
    */
    public function withUrl(string $rawUrl): AppB2BSignInActivityMetricsRequestBuilder {
        return new AppB2BSignInActivityMetricsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

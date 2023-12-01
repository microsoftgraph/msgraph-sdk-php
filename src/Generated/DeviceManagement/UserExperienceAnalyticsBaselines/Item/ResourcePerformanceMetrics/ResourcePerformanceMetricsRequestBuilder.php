<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\ResourcePerformanceMetrics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsCategory;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resourcePerformanceMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
*/
class ResourcePerformanceMetricsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ResourcePerformanceMetricsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBaselines/{userExperienceAnalyticsBaseline%2Did}/resourcePerformanceMetrics{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The scores and insights for the resource performance metrics.
     * @param ResourcePerformanceMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsCategory|null>
     * @throws Exception
    */
    public function get(?ResourcePerformanceMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The scores and insights for the resource performance metrics.
     * @param ResourcePerformanceMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourcePerformanceMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourcePerformanceMetricsRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourcePerformanceMetricsRequestBuilder {
        return new ResourcePerformanceMetricsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

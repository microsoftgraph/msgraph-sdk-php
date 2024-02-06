<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item\UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereMetric;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereMetrics property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereMetrics property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsWorkFromAnywhereMetricId The unique identifier of userExperienceAnalyticsWorkFromAnywhereMetric
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder
    */
    public function byUserExperienceAnalyticsWorkFromAnywhereMetricId(string $userExperienceAnalyticsWorkFromAnywhereMetricId): UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsWorkFromAnywhereMetric%2Did'] = $userExperienceAnalyticsWorkFromAnywhereMetricId;
        return new UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsWorkFromAnywhereMetrics{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics work from anywhere metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsWorkFromAnywhereMetrics for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetric $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereMetric|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsWorkFromAnywhereMetric $body, ?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics work from anywhere metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsWorkFromAnywhereMetrics for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetric $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsWorkFromAnywhereMetric $body, ?UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

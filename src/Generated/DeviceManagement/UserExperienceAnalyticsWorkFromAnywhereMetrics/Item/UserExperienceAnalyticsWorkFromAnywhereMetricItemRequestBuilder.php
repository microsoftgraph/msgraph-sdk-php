<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item\MetricDevices\MetricDevicesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereMetric;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereMetrics property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the metricDevices property of the microsoft.graph.userExperienceAnalyticsWorkFromAnywhereMetric entity.
    */
    public function metricDevices(): MetricDevicesRequestBuilder {
        return new MetricDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsWorkFromAnywhereMetrics/{userExperienceAnalyticsWorkFromAnywhereMetric%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsWorkFromAnywhereMetrics for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User experience analytics work from anywhere metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereMetric|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsWorkFromAnywhereMetrics in deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetric $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereMetric|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsWorkFromAnywhereMetric $body, ?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsWorkFromAnywhereMetrics for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsWorkFromAnywhereMetrics/{userExperienceAnalyticsWorkFromAnywhereMetric%2Did}';
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
     * User experience analytics work from anywhere metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsWorkFromAnywhereMetrics in deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereMetric $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsWorkFromAnywhereMetric $body, ?UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsWorkFromAnywhereMetrics/{userExperienceAnalyticsWorkFromAnywhereMetric%2Did}';
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
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

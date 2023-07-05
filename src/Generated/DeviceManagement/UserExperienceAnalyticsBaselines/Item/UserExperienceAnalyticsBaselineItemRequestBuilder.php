<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\AppHealthMetrics\AppHealthMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\BatteryHealthMetrics\BatteryHealthMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\BestPracticesMetrics\BestPracticesMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\DeviceBootPerformanceMetrics\DeviceBootPerformanceMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\RebootAnalyticsMetrics\RebootAnalyticsMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\ResourcePerformanceMetrics\ResourcePerformanceMetricsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\WorkFromAnywhereMetrics\WorkFromAnywhereMetricsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsBaseline;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsBaselines property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsBaselineItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appHealthMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function appHealthMetrics(): AppHealthMetricsRequestBuilder {
        return new AppHealthMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the batteryHealthMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function batteryHealthMetrics(): BatteryHealthMetricsRequestBuilder {
        return new BatteryHealthMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the bestPracticesMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function bestPracticesMetrics(): BestPracticesMetricsRequestBuilder {
        return new BestPracticesMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceBootPerformanceMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function deviceBootPerformanceMetrics(): DeviceBootPerformanceMetricsRequestBuilder {
        return new DeviceBootPerformanceMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rebootAnalyticsMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function rebootAnalyticsMetrics(): RebootAnalyticsMetricsRequestBuilder {
        return new RebootAnalyticsMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourcePerformanceMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function resourcePerformanceMetrics(): ResourcePerformanceMetricsRequestBuilder {
        return new ResourcePerformanceMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workFromAnywhereMetrics property of the microsoft.graph.userExperienceAnalyticsBaseline entity.
    */
    public function workFromAnywhereMetrics(): WorkFromAnywhereMetricsRequestBuilder {
        return new WorkFromAnywhereMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UserExperienceAnalyticsBaselineItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsBaselines/{userExperienceAnalyticsBaseline%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBaselines for deviceManagement
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?UserExperienceAnalyticsBaselineItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * User experience analytics baselines
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?UserExperienceAnalyticsBaselineItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBaseline::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property userExperienceAnalyticsBaselines in deviceManagement
     * @param UserExperienceAnalyticsBaseline $body The request body
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(UserExperienceAnalyticsBaseline $body, ?UserExperienceAnalyticsBaselineItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsBaseline::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsBaselines for deviceManagement
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsBaselineItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * User experience analytics baselines
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsBaselineItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property userExperienceAnalyticsBaselines in deviceManagement
     * @param UserExperienceAnalyticsBaseline $body The request body
     * @param UserExperienceAnalyticsBaselineItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsBaseline $body, ?UserExperienceAnalyticsBaselineItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

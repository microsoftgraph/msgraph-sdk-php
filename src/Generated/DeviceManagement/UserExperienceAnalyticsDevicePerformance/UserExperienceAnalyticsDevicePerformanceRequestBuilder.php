<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\Item\UserExperienceAnalyticsDevicePerformanceItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\SummarizeDevicePerformanceDevicesWithSummarizeBy\SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDevicePerformance;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDevicePerformanceCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDevicePerformance property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsDevicePerformanceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDevicePerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsDevicePerformanceId The unique identifier of userExperienceAnalyticsDevicePerformance
     * @return UserExperienceAnalyticsDevicePerformanceItemRequestBuilder
    */
    public function byUserExperienceAnalyticsDevicePerformanceId(string $userExperienceAnalyticsDevicePerformanceId): UserExperienceAnalyticsDevicePerformanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsDevicePerformance%2Did'] = $userExperienceAnalyticsDevicePerformanceId;
        return new UserExperienceAnalyticsDevicePerformanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDevicePerformanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsDevicePerformance{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics device performance
     * @param UserExperienceAnalyticsDevicePerformanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDevicePerformanceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsDevicePerformanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDevicePerformanceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsDevicePerformance $body The request body
     * @param UserExperienceAnalyticsDevicePerformanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDevicePerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsDevicePerformance $body, ?UserExperienceAnalyticsDevicePerformanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDevicePerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the summarizeDevicePerformanceDevices method.
     * @param string $summarizeBy Usage: summarizeBy='{summarizeBy}'
     * @return SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilder
    */
    public function summarizeDevicePerformanceDevicesWithSummarizeBy(string $summarizeBy): SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilder {
        return new SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilder($this->pathParameters, $this->requestAdapter, $summarizeBy);
    }

    /**
     * User experience analytics device performance
     * @param UserExperienceAnalyticsDevicePerformanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDevicePerformanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsDevicePerformance for deviceManagement
     * @param UserExperienceAnalyticsDevicePerformance $body The request body
     * @param UserExperienceAnalyticsDevicePerformanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsDevicePerformance $body, ?UserExperienceAnalyticsDevicePerformanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsDevicePerformanceRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsDevicePerformanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

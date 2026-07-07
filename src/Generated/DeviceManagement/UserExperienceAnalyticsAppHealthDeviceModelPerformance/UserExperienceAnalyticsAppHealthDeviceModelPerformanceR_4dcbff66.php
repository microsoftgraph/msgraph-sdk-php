<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\Item\UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_a16edbf6;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthDeviceModelPerformance;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthDeviceModelPerformanceC_7aa84242;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAppHealthDeviceModelPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder
*/
class UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66 extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDeviceModelPerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAppHealthDeviceModelPerformanceId The unique identifier of userExperienceAnalyticsAppHealthDeviceModelPerformance
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_a16edbf6
    */
    public function byUserExperienceAnalyticsAppHealthDeviceModelPerformanceId(string $userExperienceAnalyticsAppHealthDeviceModelPerformanceId): UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_a16edbf6 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAppHealthDeviceModelPerformance%2Did'] = $userExperienceAnalyticsAppHealthDeviceModelPerformanceId;
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_a16edbf6($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthDeviceModelPerformance{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics appHealth Model Performance
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_dbe8e3ea|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthDeviceModelPerformanceC_7aa84242|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_dbe8e3ea $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthDeviceModelPerformanceC_7aa84242::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthDeviceModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformance $body The request body
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_03b2aaf4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthDeviceModelPerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAppHealthDeviceModelPerformance $body, ?UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_03b2aaf4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthDeviceModelPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics appHealth Model Performance
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_dbe8e3ea|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_dbe8e3ea $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsAppHealthDeviceModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformance $body The request body
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_03b2aaf4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAppHealthDeviceModelPerformance $body, ?UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_03b2aaf4 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66 {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceR_4dcbff66($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Item\UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformance;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformanceC_2113ef84;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676 extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsDeviceStartupProcessPerformanceId The unique identifier of userExperienceAnalyticsDeviceStartupProcessPerformance
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0
    */
    public function byUserExperienceAnalyticsDeviceStartupProcessPerformanceId(string $userExperienceAnalyticsDeviceStartupProcessPerformanceId): UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsDeviceStartupProcessPerformance%2Did'] = $userExperienceAnalyticsDeviceStartupProcessPerformanceId;
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceR_5118b28a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceStartupProcessPerformanceC_2113ef84|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsDeviceStartupProcessPerformanceR_5118b28a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformanceC_2113ef84::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceR_6bedcf1e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceStartupProcessPerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceR_6bedcf1e $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceR_5118b28a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDeviceStartupProcessPerformanceR_5118b28a $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceR_6bedcf1e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceR_6bedcf1e $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676 {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceR_4c8ce676($rawUrl, $this->requestAdapter);
    }

}

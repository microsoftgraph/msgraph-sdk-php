<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Item\UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformance;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder extends BaseRequestBuilder 
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
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilder
    */
    public function byUserExperienceAnalyticsDeviceStartupProcessPerformanceId(string $userExperienceAnalyticsDeviceStartupProcessPerformanceId): UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsDeviceStartupProcessPerformance%2Did'] = $userExperienceAnalyticsDeviceStartupProcessPerformanceId;
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsDeviceStartupProcessPerformance{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

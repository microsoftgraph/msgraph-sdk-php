<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\Item\UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_42b8290d;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthOSVersionPerformance;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthOSVersionPerformanceCol_5808ba49;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAppHealthOSVersionPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder
*/
class UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOSVersionPerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAppHealthOSVersionPerformanceId The unique identifier of userExperienceAnalyticsAppHealthOSVersionPerformance
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_42b8290d
    */
    public function byUserExperienceAnalyticsAppHealthOSVersionPerformanceId(string $userExperienceAnalyticsAppHealthOSVersionPerformanceId): UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_42b8290d {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAppHealthOSVersionPerformance%2Did'] = $userExperienceAnalyticsAppHealthOSVersionPerformanceId;
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_42b8290d($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d and sets the default values.
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
     * User experience analytics appHealth OS version Performance
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_7dd09144|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthOSVersionPerformanceCol_5808ba49|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_7dd09144 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthOSVersionPerformanceCol_5808ba49::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthOSVersionPerformance for deviceManagement
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformance $body The request body
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_e11a86c4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthOSVersionPerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAppHealthOSVersionPerformance $body, ?UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_e11a86c4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthOSVersionPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics appHealth OS version Performance
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_7dd09144|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_7dd09144 $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsAppHealthOSVersionPerformance for deviceManagement
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformance $body The request body
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_e11a86c4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAppHealthOSVersionPerformance $body, ?UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_e11a86c4 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceReq_fdb3de6d($rawUrl, $this->requestAdapter);
    }

}

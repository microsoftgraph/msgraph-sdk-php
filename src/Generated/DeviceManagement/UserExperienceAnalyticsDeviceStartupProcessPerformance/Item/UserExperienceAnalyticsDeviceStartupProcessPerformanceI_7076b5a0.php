<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilder
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsDeviceStartupProcessPerformance/{userExperienceAnalyticsDeviceStartupProcessPerformance%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_93606dfb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_93606dfb $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceStartupProcessPerformance|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property userExperienceAnalyticsDeviceStartupProcessPerformance in deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_0aa2eba7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsDeviceStartupProcessPerformance|null>
     * @throws Exception
    */
    public function patch(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_0aa2eba7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property userExperienceAnalyticsDeviceStartupProcessPerformance for deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_93606dfb|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_93606dfb $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * User experience analytics device Startup Process Performance
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property userExperienceAnalyticsDeviceStartupProcessPerformance in deviceManagement
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformance $body The request body
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_0aa2eba7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserExperienceAnalyticsDeviceStartupProcessPerformance $body, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_0aa2eba7 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0 {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_7076b5a0($rawUrl, $this->requestAdapter);
    }

}

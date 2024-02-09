<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion\Item\UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAppHealthAppPerformanceByOSVersionId The unique identifier of userExperienceAnalyticsAppHealthAppPerformanceByOSVersion
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionItemRequestBuilder
    */
    public function byUserExperienceAnalyticsAppHealthAppPerformanceByOSVersionId(string $userExperienceAnalyticsAppHealthAppPerformanceByOSVersionId): UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAppHealthAppPerformanceByOSVersion%2Did'] = $userExperienceAnalyticsAppHealthAppPerformanceByOSVersionId;
        return new UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics appHealth Application Performance by OS Version
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics appHealth Application Performance by OS Version
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion';
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
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

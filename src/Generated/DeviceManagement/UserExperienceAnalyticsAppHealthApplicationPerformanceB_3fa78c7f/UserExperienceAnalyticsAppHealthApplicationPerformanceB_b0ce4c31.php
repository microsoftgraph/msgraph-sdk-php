<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_3fa78c7f;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_3fa78c7f\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_3fa78c7f\Item\UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_0f781493;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c3820972;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31 extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdId The unique identifier of userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_0f781493
    */
    public function byUserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdId(string $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdId): UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_0f781493 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId%2Did'] = $userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdId;
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_0f781493($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics appHealth Application Performance by App Version Device Id
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_010889ea|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c3820972|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsAppHealthApplicationPerformanceB_010889ea $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_c3820972::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_f604df87|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_f604df87 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * User experience analytics appHealth Application Performance by App Version Device Id
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_010889ea|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsAppHealthApplicationPerformanceB_010889ea $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId for deviceManagement
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f $body The request body
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_f604df87|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_666db35f $body, ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_f604df87 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_b0ce4c31($rawUrl, $this->requestAdapter);
    }

}

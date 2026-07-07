<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance\Item\UserExperienceAnalyticsWorkFromAnywhereModelPerformance_c7a1fec9;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereModelPerformance_4f574daa;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereModelPerformance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereModelPerformance property of the microsoft.graph.deviceManagement entity. Original name: UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder
*/
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereModelPerformance property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId The unique identifier of userExperienceAnalyticsWorkFromAnywhereModelPerformance
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_c7a1fec9
    */
    public function byUserExperienceAnalyticsWorkFromAnywhereModelPerformanceId(string $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId): UserExperienceAnalyticsWorkFromAnywhereModelPerformance_c7a1fec9 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsWorkFromAnywhereModelPerformance%2Did'] = $userExperienceAnalyticsWorkFromAnywhereModelPerformanceId;
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance_c7a1fec9($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsWorkFromAnywhereModelPerformance{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The user experience analytics work from anywhere model performance
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_5de3e49e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereModelPerformance_4f574daa|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_5de3e49e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereModelPerformance_4f574daa::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userExperienceAnalyticsWorkFromAnywhereModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_bf195a73|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereModelPerformance|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body, ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_bf195a73 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user experience analytics work from anywhere model performance
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_5de3e49e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_5de3e49e $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userExperienceAnalyticsWorkFromAnywhereModelPerformance for deviceManagement
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body The request body
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_bf195a73|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsWorkFromAnywhereModelPerformance $body, ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_bf195a73 $requestConfiguration = null): RequestInformation {
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
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance_95ddf1fd($rawUrl, $this->requestAdapter);
    }

}

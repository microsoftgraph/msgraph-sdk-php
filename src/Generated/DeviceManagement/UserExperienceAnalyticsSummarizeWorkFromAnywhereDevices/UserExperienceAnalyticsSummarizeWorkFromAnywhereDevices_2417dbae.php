<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereDevicesSummary;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the userExperienceAnalyticsSummarizeWorkFromAnywhereDevices method. Original name: UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder
*/
class UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsSummarizeWorkFromAnywhereDevices()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices
     * @param UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_7757120d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsWorkFromAnywhereDevicesSummary|null>
     * @throws Exception
    */
    public function get(?UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_7757120d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsWorkFromAnywhereDevicesSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices
     * @param UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_7757120d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_7757120d $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae
    */
    public function withUrl(string $rawUrl): UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae {
        return new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices_2417dbae($rawUrl, $this->requestAdapter);
    }

}

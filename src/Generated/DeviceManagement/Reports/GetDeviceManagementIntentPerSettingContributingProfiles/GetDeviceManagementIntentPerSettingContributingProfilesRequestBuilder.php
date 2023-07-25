<?php

namespace Microsoft\Graph\Generated\DeviceManagement\Reports\GetDeviceManagementIntentPerSettingContributingProfiles;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
*/
class GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reports/getDeviceManagementIntentPerSettingContributingProfiles');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Not yet documented
     * @param GetDeviceManagementIntentPerSettingContributingProfilesPostRequestBody $body The request body
     * @param GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/intune-reporting-devicemanagementreports-getdevicemanagementintentpersettingcontributingprofiles?view=graph-rest-1.0 Find more info here
    */
    public function post(GetDeviceManagementIntentPerSettingContributingProfilesPostRequestBody $body, ?GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Not yet documented
     * @param GetDeviceManagementIntentPerSettingContributingProfilesPostRequestBody $body The request body
     * @param GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetDeviceManagementIntentPerSettingContributingProfilesPostRequestBody $body, ?GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

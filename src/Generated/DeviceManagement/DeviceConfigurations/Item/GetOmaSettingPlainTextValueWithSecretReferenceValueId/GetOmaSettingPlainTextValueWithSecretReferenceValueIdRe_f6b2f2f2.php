<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\GetOmaSettingPlainTextValueWithSecretReferenceValueId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getOmaSettingPlainTextValue method. Original name: getOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder
*/
class GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_f6b2f2f2 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_f6b2f2f2 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $secretReferenceValueId Usage: secretReferenceValueId='{secretReferenceValueId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $secretReferenceValueId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurations/{deviceConfiguration%2Did}/getOmaSettingPlainTextValue(secretReferenceValueId=\'{secretReferenceValueId}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['secretReferenceValueId'] = $secretReferenceValueId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getOmaSettingPlainTextValue
     * @param GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_c9909c22|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetOmaSettingPlainTextValueWithSecretReferenceValueIdGetResponse|null>
     * @throws Exception
    */
    public function get(?GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_c9909c22 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetOmaSettingPlainTextValueWithSecretReferenceValueIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getOmaSettingPlainTextValue
     * @param GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_c9909c22|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_c9909c22 $requestConfiguration = null): RequestInformation {
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
     * @return GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_f6b2f2f2
    */
    public function withUrl(string $rawUrl): GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_f6b2f2f2 {
        return new GetOmaSettingPlainTextValueWithSecretReferenceValueIdRe_f6b2f2f2($rawUrl, $this->requestAdapter);
    }

}

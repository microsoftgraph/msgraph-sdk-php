<?php

namespace Microsoft\\Graph\\Generated\Users\Item\ExportDeviceAndAppManagementData;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\DeviceAndAppManagementData;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the exportDeviceAndAppManagementData method.
*/
class ExportDeviceAndAppManagementDataRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExportDeviceAndAppManagementDataRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/exportDeviceAndAppManagementData()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function exportDeviceAndAppManagementData
     * @param ExportDeviceAndAppManagementDataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAndAppManagementData|null>
     * @throws Exception
    */
    public function get(?ExportDeviceAndAppManagementDataRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAndAppManagementData::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function exportDeviceAndAppManagementData
     * @param ExportDeviceAndAppManagementDataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExportDeviceAndAppManagementDataRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExportDeviceAndAppManagementDataRequestBuilder
    */
    public function withUrl(string $rawUrl): ExportDeviceAndAppManagementDataRequestBuilder {
        return new ExportDeviceAndAppManagementDataRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

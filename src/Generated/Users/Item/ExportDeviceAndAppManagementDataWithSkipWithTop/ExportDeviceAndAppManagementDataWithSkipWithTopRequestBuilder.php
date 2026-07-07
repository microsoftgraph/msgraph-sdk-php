<?php

namespace Microsoft\Graph\Generated\Users\Item\ExportDeviceAndAppManagementDataWithSkipWithTop;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceAndAppManagementData;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the exportDeviceAndAppManagementData method.
*/
class ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $skip Usage: skip={skip}
     * @param int|null $top Usage: top={top}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $skip = null, ?int $top = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/exportDeviceAndAppManagementData(skip={skip},top={top})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['skip'] = $skip;
            $urlTplParams['top'] = $top;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function exportDeviceAndAppManagementData
     * @param ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceAndAppManagementData|null>
     * @throws Exception
    */
    public function get(?ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceAndAppManagementData::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function exportDeviceAndAppManagementData
     * @param ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder
    */
    public function withUrl(string $rawUrl): ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder {
        return new ExportDeviceAndAppManagementDataWithSkipWithTopRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

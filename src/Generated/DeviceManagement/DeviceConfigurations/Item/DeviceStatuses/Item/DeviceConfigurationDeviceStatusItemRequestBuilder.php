<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceConfigurationDeviceStatus;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceConfiguration entity.
*/
class DeviceConfigurationDeviceStatusItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceConfigurationDeviceStatusItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurations/{deviceConfiguration%2Did}/deviceStatuses/{deviceConfigurationDeviceStatus%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a deviceConfigurationDeviceStatus.
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-deviceconfigurationdevicestatus-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceConfigurationDeviceStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceConfigurationDeviceStatus object.
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-deviceconfigurationdevicestatus-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a deviceConfigurationDeviceStatus object.
     * @param DeviceConfigurationDeviceStatus $body The request body
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-deviceconfigurationdevicestatus-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceConfigurationDeviceStatus $body, ?DeviceConfigurationDeviceStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a deviceConfigurationDeviceStatus.
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceConfigurationDeviceStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the deviceConfigurationDeviceStatus object.
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a deviceConfigurationDeviceStatus object.
     * @param DeviceConfigurationDeviceStatus $body The request body
     * @param DeviceConfigurationDeviceStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceConfigurationDeviceStatus $body, ?DeviceConfigurationDeviceStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationDeviceStatusItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationDeviceStatusItemRequestBuilder {
        return new DeviceConfigurationDeviceStatusItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

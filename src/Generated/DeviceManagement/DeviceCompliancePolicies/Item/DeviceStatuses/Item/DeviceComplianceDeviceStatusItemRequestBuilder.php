<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceComplianceDeviceStatus;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceCompliancePolicy entity.
*/
class DeviceComplianceDeviceStatusItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceComplianceDeviceStatusItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/deviceStatuses/{deviceComplianceDeviceStatus%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a deviceComplianceDeviceStatus.
     * @param DeviceComplianceDeviceStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancedevicestatus-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceComplianceDeviceStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancedevicestatus-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceComplianceDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatus $body The request body
     * @param DeviceComplianceDeviceStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancedevicestatus-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceComplianceDeviceStatus $body, ?DeviceComplianceDeviceStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a deviceComplianceDeviceStatus.
     * @param DeviceComplianceDeviceStatusItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceComplianceDeviceStatusItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatusItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceComplianceDeviceStatusItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatus $body The request body
     * @param DeviceComplianceDeviceStatusItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceComplianceDeviceStatus $body, ?DeviceComplianceDeviceStatusItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceComplianceDeviceStatusItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceComplianceDeviceStatusItemRequestBuilder {
        return new DeviceComplianceDeviceStatusItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

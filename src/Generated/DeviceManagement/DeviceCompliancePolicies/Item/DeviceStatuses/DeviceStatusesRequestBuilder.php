<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceStatuses;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceStatuses\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\DeviceStatuses\Item\DeviceComplianceDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceComplianceDeviceStatus;
use Microsoft\Graph\Generated\Models\DeviceComplianceDeviceStatusCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceCompliancePolicy entity.
*/
class DeviceStatusesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceCompliancePolicy entity.
     * @param string $deviceComplianceDeviceStatusId The unique identifier of deviceComplianceDeviceStatus
     * @return DeviceComplianceDeviceStatusItemRequestBuilder
    */
    public function byDeviceComplianceDeviceStatusId(string $deviceComplianceDeviceStatusId): DeviceComplianceDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceComplianceDeviceStatus%2Did'] = $deviceComplianceDeviceStatusId;
        return new DeviceComplianceDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceStatusesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/deviceStatuses{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the deviceComplianceDeviceStatus objects.
     * @param DeviceStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceDeviceStatusCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancedevicestatus-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceDeviceStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatus $body The request body
     * @param DeviceStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceDeviceStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancedevicestatus-create?view=graph-rest-1.0 Find more info here
    */
    public function post(DeviceComplianceDeviceStatus $body, ?DeviceStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the deviceComplianceDeviceStatus objects.
     * @param DeviceStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new deviceComplianceDeviceStatus object.
     * @param DeviceComplianceDeviceStatus $body The request body
     * @param DeviceStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceComplianceDeviceStatus $body, ?DeviceStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/deviceStatuses';
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
     * @return DeviceStatusesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

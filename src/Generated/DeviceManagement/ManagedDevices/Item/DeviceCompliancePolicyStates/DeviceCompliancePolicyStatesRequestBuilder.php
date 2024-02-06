<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\DeviceCompliancePolicyStates\Item\DeviceCompliancePolicyStateItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceCompliancePolicyState;
use Microsoft\Graph\Generated\Models\DeviceCompliancePolicyStateCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
*/
class DeviceCompliancePolicyStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicyStates property of the microsoft.graph.managedDevice entity.
     * @param string $deviceCompliancePolicyStateId The unique identifier of deviceCompliancePolicyState
     * @return DeviceCompliancePolicyStateItemRequestBuilder
    */
    public function byDeviceCompliancePolicyStateId(string $deviceCompliancePolicyStateId): DeviceCompliancePolicyStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicyState%2Did'] = $deviceCompliancePolicyStateId;
        return new DeviceCompliancePolicyStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceCompliancePolicyStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/deviceCompliancePolicyStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Device compliance policy states for this device.
     * @param DeviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicyStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceCompliancePolicyStates for deviceManagement
     * @param DeviceCompliancePolicyState $body The request body
     * @param DeviceCompliancePolicyStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceCompliancePolicyState|null>
     * @throws Exception
    */
    public function post(DeviceCompliancePolicyState $body, ?DeviceCompliancePolicyStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceCompliancePolicyState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Device compliance policy states for this device.
     * @param DeviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceCompliancePolicyStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceCompliancePolicyStates for deviceManagement
     * @param DeviceCompliancePolicyState $body The request body
     * @param DeviceCompliancePolicyStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceCompliancePolicyState $body, ?DeviceCompliancePolicyStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceCompliancePolicyStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceCompliancePolicyStatesRequestBuilder {
        return new DeviceCompliancePolicyStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

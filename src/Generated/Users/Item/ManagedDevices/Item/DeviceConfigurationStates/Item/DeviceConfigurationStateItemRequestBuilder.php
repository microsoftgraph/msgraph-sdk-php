<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DeviceConfigurationState;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceConfigurationStates property of the microsoft.graph.managedDevice entity.
*/
class DeviceConfigurationStateItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceConfigurationStateItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices/{managedDevice%2Did}/deviceConfigurationStates/{deviceConfigurationState%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceConfigurationStates for users
     * @param DeviceConfigurationStateItemRequestBuilderDeleteRequest_3a70600a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceConfigurationStateItemRequestBuilderDeleteRequest_3a70600a $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Device configuration states for this device.
     * @param DeviceConfigurationStateItemRequestBuilderGetRequestCon_21f19193|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationState|null>
     * @throws Exception
    */
    public function get(?DeviceConfigurationStateItemRequestBuilderGetRequestCon_21f19193 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceConfigurationStates in users
     * @param DeviceConfigurationState $body The request body
     * @param DeviceConfigurationStateItemRequestBuilderPatchRequestC_ae4e46e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfigurationState|null>
     * @throws Exception
    */
    public function patch(DeviceConfigurationState $body, ?DeviceConfigurationStateItemRequestBuilderPatchRequestC_ae4e46e8 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfigurationState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceConfigurationStates for users
     * @param DeviceConfigurationStateItemRequestBuilderDeleteRequest_3a70600a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceConfigurationStateItemRequestBuilderDeleteRequest_3a70600a $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Device configuration states for this device.
     * @param DeviceConfigurationStateItemRequestBuilderGetRequestCon_21f19193|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationStateItemRequestBuilderGetRequestCon_21f19193 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceConfigurationStates in users
     * @param DeviceConfigurationState $body The request body
     * @param DeviceConfigurationStateItemRequestBuilderPatchRequestC_ae4e46e8|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceConfigurationState $body, ?DeviceConfigurationStateItemRequestBuilderPatchRequestC_ae4e46e8 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationStateItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationStateItemRequestBuilder {
        return new DeviceConfigurationStateItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

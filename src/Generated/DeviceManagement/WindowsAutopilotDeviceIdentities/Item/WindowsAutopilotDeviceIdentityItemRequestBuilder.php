<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\AssignUserToDevice\AssignUserToDeviceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\UnassignUserFromDevice\UnassignUserFromDeviceRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\Item\UpdateDeviceProperties\UpdateDevicePropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WindowsAutopilotDeviceIdentity;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the windowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
*/
class WindowsAutopilotDeviceIdentityItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assignUserToDevice method.
    */
    public function assignUserToDevice(): AssignUserToDeviceRequestBuilder {
        return new AssignUserToDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unassignUserFromDevice method.
    */
    public function unassignUserFromDevice(): UnassignUserFromDeviceRequestBuilder {
        return new UnassignUserFromDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateDeviceProperties method.
    */
    public function updateDeviceProperties(): UpdateDevicePropertiesRequestBuilder {
        return new UpdateDevicePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WindowsAutopilotDeviceIdentityItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/windowsAutopilotDeviceIdentities/{windowsAutopilotDeviceIdentity%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a windowsAutopilotDeviceIdentity.
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-windowsautopilotdeviceidentity-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?WindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the windowsAutopilotDeviceIdentity object.
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsAutopilotDeviceIdentity|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-enrollment-windowsautopilotdeviceidentity-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property windowsAutopilotDeviceIdentities in deviceManagement
     * @param WindowsAutopilotDeviceIdentity $body The request body
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WindowsAutopilotDeviceIdentity|null>
     * @throws Exception
    */
    public function patch(WindowsAutopilotDeviceIdentity $body, ?WindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a windowsAutopilotDeviceIdentity.
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WindowsAutopilotDeviceIdentityItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the windowsAutopilotDeviceIdentity object.
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WindowsAutopilotDeviceIdentityItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property windowsAutopilotDeviceIdentities in deviceManagement
     * @param WindowsAutopilotDeviceIdentity $body The request body
     * @param WindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WindowsAutopilotDeviceIdentity $body, ?WindowsAutopilotDeviceIdentityItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WindowsAutopilotDeviceIdentityItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WindowsAutopilotDeviceIdentityItemRequestBuilder {
        return new WindowsAutopilotDeviceIdentityItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

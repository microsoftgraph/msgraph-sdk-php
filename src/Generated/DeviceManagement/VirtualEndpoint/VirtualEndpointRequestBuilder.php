<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\CloudPCsRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\DeviceImages\DeviceImagesRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\GalleryImages\GalleryImagesRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\OnPremisesConnectionsRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\ProvisioningPoliciesRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\UserSettings\UserSettingsRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\VirtualEndpoint;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the virtualEndpoint property of the microsoft.graph.deviceManagement entity.
*/
class VirtualEndpointRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.virtualEndpoint entity.
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPCs property of the microsoft.graph.virtualEndpoint entity.
    */
    public function cloudPCs(): CloudPCsRequestBuilder {
        return new CloudPCsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceImages property of the microsoft.graph.virtualEndpoint entity.
    */
    public function deviceImages(): DeviceImagesRequestBuilder {
        return new DeviceImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the galleryImages property of the microsoft.graph.virtualEndpoint entity.
    */
    public function galleryImages(): GalleryImagesRequestBuilder {
        return new GalleryImagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onPremisesConnections property of the microsoft.graph.virtualEndpoint entity.
    */
    public function onPremisesConnections(): OnPremisesConnectionsRequestBuilder {
        return new OnPremisesConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the provisioningPolicies property of the microsoft.graph.virtualEndpoint entity.
    */
    public function provisioningPolicies(): ProvisioningPoliciesRequestBuilder {
        return new ProvisioningPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userSettings property of the microsoft.graph.virtualEndpoint entity.
    */
    public function userSettings(): UserSettingsRequestBuilder {
        return new UserSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VirtualEndpointRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property virtualEndpoint for deviceManagement
     * @param VirtualEndpointRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?VirtualEndpointRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Virtual endpoint
     * @param VirtualEndpointRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEndpoint|null>
     * @throws Exception
    */
    public function get(?VirtualEndpointRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEndpoint::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property virtualEndpoint in deviceManagement
     * @param VirtualEndpoint $body The request body
     * @param VirtualEndpointRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEndpoint|null>
     * @throws Exception
    */
    public function patch(VirtualEndpoint $body, ?VirtualEndpointRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEndpoint::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property virtualEndpoint for deviceManagement
     * @param VirtualEndpointRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?VirtualEndpointRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Virtual endpoint
     * @param VirtualEndpointRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VirtualEndpointRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property virtualEndpoint in deviceManagement
     * @param VirtualEndpoint $body The request body
     * @param VirtualEndpointRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(VirtualEndpoint $body, ?VirtualEndpointRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VirtualEndpointRequestBuilder
    */
    public function withUrl(string $rawUrl): VirtualEndpointRequestBuilder {
        return new VirtualEndpointRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

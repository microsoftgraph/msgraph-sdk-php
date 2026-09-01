<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\M365Capabilities\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\M365CapabilityBase;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
*/
class M365CapabilityBaseNameItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new M365CapabilityBaseNameItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/partners/{crossTenantAccessPolicyConfigurationPartner%2DtenantId}/m365Capabilities/{m365CapabilityBase%2Dname}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a Microsoft 365 cross-tenant capability from a partner organization in the cross-tenant access policy.
     * @param M365CapabilityBaseNameItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationpartner-delete-m365capabilities?view=graph-rest-1.0 Find more info here
    */
    public function delete(?M365CapabilityBaseNameItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
    */
    public function get(?M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update an existing Microsoft 365 cross-tenant capability for a partner organization in the cross-tenant access policy.
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilityBaseNameItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationpartner-update-m365capabilities?view=graph-rest-1.0 Find more info here
    */
    public function patch(M365CapabilityBase $body, ?M365CapabilityBaseNameItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a Microsoft 365 cross-tenant capability from a partner organization in the cross-tenant access policy.
     * @param M365CapabilityBaseNameItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?M365CapabilityBaseNameItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Defines the partner-specific Microsoft 365 cross-tenant capabilities for inbound access from the partner organization.
     * @param M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?M365CapabilityBaseNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update an existing Microsoft 365 cross-tenant capability for a partner organization in the cross-tenant access policy.
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilityBaseNameItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(M365CapabilityBase $body, ?M365CapabilityBaseNameItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return M365CapabilityBaseNameItemRequestBuilder
    */
    public function withUrl(string $rawUrl): M365CapabilityBaseNameItemRequestBuilder {
        return new M365CapabilityBaseNameItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

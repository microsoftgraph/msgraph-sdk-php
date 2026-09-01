<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\EscapedDefault\M365Capabilities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\M365CapabilityBase;
use Microsoft\Graph\Generated\Models\M365CapabilityBaseCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\EscapedDefault\M365Capabilities\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\EscapedDefault\M365Capabilities\Item\M365CapabilityBaseNameItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationDefault entity.
*/
class M365CapabilitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the m365Capabilities property of the microsoft.graph.crossTenantAccessPolicyConfigurationDefault entity.
     * @param string $m365CapabilityBaseName The unique identifier of m365CapabilityBase
     * @return M365CapabilityBaseNameItemRequestBuilder
    */
    public function byM365CapabilityBaseName(string $m365CapabilityBaseName): M365CapabilityBaseNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['m365CapabilityBase%2Dname'] = $m365CapabilityBaseName;
        return new M365CapabilityBaseNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new M365CapabilitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/default/m365Capabilities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of Microsoft 365 cross-tenant capabilities configured for the default cross-tenant access policy. The returned collection is a heterogeneous collection of derived types of m365CapabilityBase, differentiated by their @odata.type property.
     * @param M365CapabilitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationdefault-list-m365capabilities?view=graph-rest-1.0 Find more info here
    */
    public function get(?M365CapabilitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new Microsoft 365 cross-tenant capability for the default cross-tenant access policy. The @odata.type property in the request body is required to specify which type of capability to create.
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<M365CapabilityBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationdefault-post-m365capabilities?view=graph-rest-1.0 Find more info here
    */
    public function post(M365CapabilityBase $body, ?M365CapabilitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [M365CapabilityBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of Microsoft 365 cross-tenant capabilities configured for the default cross-tenant access policy. The returned collection is a heterogeneous collection of derived types of m365CapabilityBase, differentiated by their @odata.type property.
     * @param M365CapabilitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?M365CapabilitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new Microsoft 365 cross-tenant capability for the default cross-tenant access policy. The @odata.type property in the request body is required to specify which type of capability to create.
     * @param M365CapabilityBase $body The request body
     * @param M365CapabilitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(M365CapabilityBase $body, ?M365CapabilitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return M365CapabilitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): M365CapabilitiesRequestBuilder {
        return new M365CapabilitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

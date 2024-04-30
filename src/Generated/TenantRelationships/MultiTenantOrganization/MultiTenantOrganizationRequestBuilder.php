<?php

namespace Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MultiTenantOrganization;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization\JoinRequest\JoinRequestRequestBuilder;
use Microsoft\Graph\Generated\TenantRelationships\MultiTenantOrganization\Tenants\TenantsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the multiTenantOrganization property of the microsoft.graph.tenantRelationship entity.
*/
class MultiTenantOrganizationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the joinRequest property of the microsoft.graph.multiTenantOrganization entity.
    */
    public function joinRequest(): JoinRequestRequestBuilder {
        return new JoinRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenants property of the microsoft.graph.multiTenantOrganization entity.
    */
    public function tenants(): TenantsRequestBuilder {
        return new TenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MultiTenantOrganizationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/multiTenantOrganization{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Defines an organization with more than one instance of Microsoft Entra ID.
     * @param MultiTenantOrganizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganization|null>
     * @throws Exception
    */
    public function get(?MultiTenantOrganizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property multiTenantOrganization in tenantRelationships
     * @param MultiTenantOrganization $body The request body
     * @param MultiTenantOrganizationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganization|null>
     * @throws Exception
    */
    public function put(MultiTenantOrganization $body, ?MultiTenantOrganizationRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganization::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Defines an organization with more than one instance of Microsoft Entra ID.
     * @param MultiTenantOrganizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MultiTenantOrganizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property multiTenantOrganization in tenantRelationships
     * @param MultiTenantOrganization $body The request body
     * @param MultiTenantOrganizationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(MultiTenantOrganization $body, ?MultiTenantOrganizationRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return MultiTenantOrganizationRequestBuilder
    */
    public function withUrl(string $rawUrl): MultiTenantOrganizationRequestBuilder {
        return new MultiTenantOrganizationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

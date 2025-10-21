<?php

namespace Microsoft\\Graph\\Generated\TenantRelationships;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\TenantRelationship;
use Microsoft\\Graph\\Generated\TenantRelationships\DelegatedAdminCustomers\DelegatedAdminCustomersRequestBuilder;
use Microsoft\\Graph\\Generated\TenantRelationships\DelegatedAdminRelationships\DelegatedAdminRelationshipsRequestBuilder;
use Microsoft\\Graph\\Generated\TenantRelationships\FindTenantInformationByDomainNameWithDomainName\FindTenantInformationByDomainNameWithDomainNameRequestBuilder;
use Microsoft\\Graph\\Generated\TenantRelationships\FindTenantInformationByTenantIdWithTenantId\FindTenantInformationByTenantIdWithTenantIdRequestBuilder;
use Microsoft\\Graph\\Generated\TenantRelationships\MultiTenantOrganization\MultiTenantOrganizationRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tenantRelationship singleton.
*/
class TenantRelationshipsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the delegatedAdminCustomers property of the microsoft.graph.tenantRelationship entity.
    */
    public function delegatedAdminCustomers(): DelegatedAdminCustomersRequestBuilder {
        return new DelegatedAdminCustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
    */
    public function delegatedAdminRelationships(): DelegatedAdminRelationshipsRequestBuilder {
        return new DelegatedAdminRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiTenantOrganization property of the microsoft.graph.tenantRelationship entity.
    */
    public function multiTenantOrganization(): MultiTenantOrganizationRequestBuilder {
        return new MultiTenantOrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TenantRelationshipsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to call the findTenantInformationByDomainName method.
     * @param string $domainName Usage: domainName='{domainName}'
     * @return FindTenantInformationByDomainNameWithDomainNameRequestBuilder
    */
    public function findTenantInformationByDomainNameWithDomainName(string $domainName): FindTenantInformationByDomainNameWithDomainNameRequestBuilder {
        return new FindTenantInformationByDomainNameWithDomainNameRequestBuilder($this->pathParameters, $this->requestAdapter, $domainName);
    }

    /**
     * Provides operations to call the findTenantInformationByTenantId method.
     * @param string $tenantId Usage: tenantId='{tenantId}'
     * @return FindTenantInformationByTenantIdWithTenantIdRequestBuilder
    */
    public function findTenantInformationByTenantIdWithTenantId(string $tenantId): FindTenantInformationByTenantIdWithTenantIdRequestBuilder {
        return new FindTenantInformationByTenantIdWithTenantIdRequestBuilder($this->pathParameters, $this->requestAdapter, $tenantId);
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantRelationship|null>
     * @throws Exception
    */
    public function get(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body The request body
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TenantRelationship|null>
     * @throws Exception
    */
    public function patch(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TenantRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update tenantRelationships
     * @param TenantRelationship $body The request body
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TenantRelationshipsRequestBuilder
    */
    public function withUrl(string $rawUrl): TenantRelationshipsRequestBuilder {
        return new TenantRelationshipsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

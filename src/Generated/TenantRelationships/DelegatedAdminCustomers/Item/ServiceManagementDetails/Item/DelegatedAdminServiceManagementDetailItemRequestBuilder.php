<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminCustomers\Item\ServiceManagementDetails\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DelegatedAdminServiceManagementDetail;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the serviceManagementDetails property of the microsoft.graph.delegatedAdminCustomer entity.
*/
class DelegatedAdminServiceManagementDetailItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DelegatedAdminServiceManagementDetailItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/delegatedAdminCustomers/{delegatedAdminCustomer%2Did}/serviceManagementDetails/{delegatedAdminServiceManagementDetail%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property serviceManagementDetails for tenantRelationships
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DelegatedAdminServiceManagementDetailItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminServiceManagementDetail|null>
     * @throws Exception
    */
    public function get(?DelegatedAdminServiceManagementDetailItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminServiceManagementDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property serviceManagementDetails in tenantRelationships
     * @param DelegatedAdminServiceManagementDetail $body The request body
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminServiceManagementDetail|null>
     * @throws Exception
    */
    public function patch(DelegatedAdminServiceManagementDetail $body, ?DelegatedAdminServiceManagementDetailItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminServiceManagementDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property serviceManagementDetails for tenantRelationships
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DelegatedAdminServiceManagementDetailItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/delegatedAdminCustomers/{delegatedAdminCustomer%2Did}/serviceManagementDetails/{delegatedAdminServiceManagementDetail%2Did}';
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
     * Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DelegatedAdminServiceManagementDetailItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property serviceManagementDetails in tenantRelationships
     * @param DelegatedAdminServiceManagementDetail $body The request body
     * @param DelegatedAdminServiceManagementDetailItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DelegatedAdminServiceManagementDetail $body, ?DelegatedAdminServiceManagementDetailItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/delegatedAdminCustomers/{delegatedAdminCustomer%2Did}/serviceManagementDetails/{delegatedAdminServiceManagementDetail%2Did}';
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
     * @return DelegatedAdminServiceManagementDetailItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DelegatedAdminServiceManagementDetailItemRequestBuilder {
        return new DelegatedAdminServiceManagementDetailItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

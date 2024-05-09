<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationIdentitySynchronization;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MultiTenantOrganizationIdentitySyncPolicyTemplate;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the multiTenantOrganizationIdentitySynchronization property of the microsoft.graph.policyTemplate entity.
*/
class MultiTenantOrganizationIdentitySynchronizationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MultiTenantOrganizationIdentitySynchronizationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/templates/multiTenantOrganizationIdentitySynchronization{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property multiTenantOrganizationIdentitySynchronization for policies
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MultiTenantOrganizationIdentitySynchronizationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the cross-tenant access policy template with user synchronization settings for a multitenant organization.
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganizationIdentitySyncPolicyTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/multitenantorganizationidentitysyncpolicytemplate-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationIdentitySyncPolicyTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the cross-tenant access policy template with user synchronization settings for a multitenant organization.
     * @param MultiTenantOrganizationIdentitySyncPolicyTemplate $body The request body
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganizationIdentitySyncPolicyTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/multitenantorganizationidentitysyncpolicytemplate-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(MultiTenantOrganizationIdentitySyncPolicyTemplate $body, ?MultiTenantOrganizationIdentitySynchronizationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationIdentitySyncPolicyTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property multiTenantOrganizationIdentitySynchronization for policies
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MultiTenantOrganizationIdentitySynchronizationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the cross-tenant access policy template with user synchronization settings for a multitenant organization.
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the cross-tenant access policy template with user synchronization settings for a multitenant organization.
     * @param MultiTenantOrganizationIdentitySyncPolicyTemplate $body The request body
     * @param MultiTenantOrganizationIdentitySynchronizationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MultiTenantOrganizationIdentitySyncPolicyTemplate $body, ?MultiTenantOrganizationIdentitySynchronizationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MultiTenantOrganizationIdentitySynchronizationRequestBuilder
    */
    public function withUrl(string $rawUrl): MultiTenantOrganizationIdentitySynchronizationRequestBuilder {
        return new MultiTenantOrganizationIdentitySynchronizationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

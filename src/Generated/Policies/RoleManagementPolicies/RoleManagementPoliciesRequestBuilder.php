<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleManagementPolicy;
use Microsoft\Graph\Generated\Models\UnifiedRoleManagementPolicyCollectionResponse;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\UnifiedRoleManagementPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleManagementPolicies property of the microsoft.graph.policyRoot entity.
*/
class RoleManagementPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleManagementPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $unifiedRoleManagementPolicyId The unique identifier of unifiedRoleManagementPolicy
     * @return UnifiedRoleManagementPolicyItemRequestBuilder
    */
    public function byUnifiedRoleManagementPolicyId(string $unifiedRoleManagementPolicyId): UnifiedRoleManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicy%2Did'] = $unifiedRoleManagementPolicyId;
        return new UnifiedRoleManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleManagementPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/roleManagementPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the details of the policies in PIM that can be applied to Microsoft Entra roles or group membership or ownership. To retrieve policies that apply to Azure RBAC, use the Azure REST PIM API for role management policies. This API is available in the following national cloud deployments.
     * @param RoleManagementPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/policyroot-list-rolemanagementpolicies?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleManagementPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to roleManagementPolicies for policies
     * @param UnifiedRoleManagementPolicy $body The request body
     * @param RoleManagementPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementPolicy|null>
     * @throws Exception
    */
    public function post(UnifiedRoleManagementPolicy $body, ?RoleManagementPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the details of the policies in PIM that can be applied to Microsoft Entra roles or group membership or ownership. To retrieve policies that apply to Azure RBAC, use the Azure REST PIM API for role management policies. This API is available in the following national cloud deployments.
     * @param RoleManagementPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleManagementPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to roleManagementPolicies for policies
     * @param UnifiedRoleManagementPolicy $body The request body
     * @param RoleManagementPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleManagementPolicy $body, ?RoleManagementPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RoleManagementPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleManagementPoliciesRequestBuilder {
        return new RoleManagementPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

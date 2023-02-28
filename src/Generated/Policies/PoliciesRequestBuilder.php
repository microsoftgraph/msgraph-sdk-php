<?php

namespace Microsoft\Graph\Generated\Policies;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PolicyRoot;
use Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\ActivityBasedTimeoutPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item\ActivityBasedTimeoutPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\AdminConsentRequestPolicy\AdminConsentRequestPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AppManagementPolicies\AppManagementPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\AppManagementPolicies\Item\AppManagementPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationFlowsPolicy\AuthenticationFlowsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthorizationPolicy\AuthorizationPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\Item\ClaimsMappingPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\ConditionalAccessPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\Item\ConditionalAccessPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\CrossTenantAccessPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\DefaultAppManagementPolicy\DefaultAppManagementPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\FeatureRolloutPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy\IdentitySecurityDefaultsEnforcementPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\PermissionGrantPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\PermissionGrantPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\UnifiedRoleManagementPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\RoleManagementPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments\Item\UnifiedRoleManagementPolicyAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments\RoleManagementPolicyAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the policyRoot singleton.
*/
class PoliciesRequestBuilder 
{
    /**
     * Provides operations to manage the activityBasedTimeoutPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function activityBasedTimeoutPolicies(): ActivityBasedTimeoutPoliciesRequestBuilder {
        return new ActivityBasedTimeoutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the adminConsentRequestPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function adminConsentRequestPolicy(): AdminConsentRequestPolicyRequestBuilder {
        return new AdminConsentRequestPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appManagementPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function appManagementPolicies(): AppManagementPoliciesRequestBuilder {
        return new AppManagementPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationFlowsPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function authenticationFlowsPolicy(): AuthenticationFlowsPolicyRequestBuilder {
        return new AuthenticationFlowsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethodsPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authorizationPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function authorizationPolicy(): AuthorizationPolicyRequestBuilder {
        return new AuthorizationPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the claimsMappingPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder {
        return new ClaimsMappingPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conditionalAccessPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function conditionalAccessPolicies(): ConditionalAccessPoliciesRequestBuilder {
        return new ConditionalAccessPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossTenantAccessPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function crossTenantAccessPolicy(): CrossTenantAccessPolicyRequestBuilder {
        return new CrossTenantAccessPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultAppManagementPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function defaultAppManagementPolicy(): DefaultAppManagementPolicyRequestBuilder {
        return new DefaultAppManagementPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the featureRolloutPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function featureRolloutPolicies(): FeatureRolloutPoliciesRequestBuilder {
        return new FeatureRolloutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identitySecurityDefaultsEnforcementPolicy property of the microsoft.graph.policyRoot entity.
    */
    public function identitySecurityDefaultsEnforcementPolicy(): IdentitySecurityDefaultsEnforcementPolicyRequestBuilder {
        return new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the permissionGrantPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function permissionGrantPolicies(): PermissionGrantPoliciesRequestBuilder {
        return new PermissionGrantPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the roleManagementPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function roleManagementPolicies(): RoleManagementPoliciesRequestBuilder {
        return new RoleManagementPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleManagementPolicyAssignments property of the microsoft.graph.policyRoot entity.
    */
    public function roleManagementPolicyAssignments(): RoleManagementPolicyAssignmentsRequestBuilder {
        return new RoleManagementPolicyAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.policyRoot entity.
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.policyRoot entity.
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the activityBasedTimeoutPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return ActivityBasedTimeoutPolicyItemRequestBuilder
    */
    public function activityBasedTimeoutPoliciesById(string $id): ActivityBasedTimeoutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activityBasedTimeoutPolicy%2Did'] = $id;
        return new ActivityBasedTimeoutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appManagementPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return AppManagementPolicyItemRequestBuilder
    */
    public function appManagementPoliciesById(string $id): AppManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appManagementPolicy%2Did'] = $id;
        return new AppManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the claimsMappingPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return ClaimsMappingPolicyItemRequestBuilder
    */
    public function claimsMappingPoliciesById(string $id): ClaimsMappingPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['claimsMappingPolicy%2Did'] = $id;
        return new ClaimsMappingPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the conditionalAccessPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return ConditionalAccessPolicyItemRequestBuilder
    */
    public function conditionalAccessPoliciesById(string $id): ConditionalAccessPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conditionalAccessPolicy%2Did'] = $id;
        return new ConditionalAccessPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the featureRolloutPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return FeatureRolloutPolicyItemRequestBuilder
    */
    public function featureRolloutPoliciesById(string $id): FeatureRolloutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['featureRolloutPolicy%2Did'] = $id;
        return new FeatureRolloutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get policies
     * @param PoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PolicyRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update policies
     * @param PolicyRoot $body The request body
     * @param PoliciesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(PolicyRoot $body, ?PoliciesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PolicyRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the permissionGrantPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return PermissionGrantPolicyItemRequestBuilder
    */
    public function permissionGrantPoliciesById(string $id): PermissionGrantPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantPolicy%2Did'] = $id;
        return new PermissionGrantPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleManagementPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleManagementPolicyItemRequestBuilder
    */
    public function roleManagementPoliciesById(string $id): UnifiedRoleManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicy%2Did'] = $id;
        return new UnifiedRoleManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleManagementPolicyAssignments property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleManagementPolicyAssignmentItemRequestBuilder
    */
    public function roleManagementPolicyAssignmentsById(string $id): UnifiedRoleManagementPolicyAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicyAssignment%2Did'] = $id;
        return new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get policies
     * @param PoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.policyRoot entity.
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update policies
     * @param PolicyRoot $body The request body
     * @param PoliciesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PolicyRoot $body, ?PoliciesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

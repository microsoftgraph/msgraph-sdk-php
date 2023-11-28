<?php

namespace Microsoft\Graph\Generated\Policies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PolicyRoot;
use Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\ActivityBasedTimeoutPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\AdminConsentRequestPolicy\AdminConsentRequestPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AppManagementPolicies\AppManagementPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationFlowsPolicy\AuthenticationFlowsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies\AuthenticationStrengthPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthorizationPolicy\AuthorizationPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\ConditionalAccessPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\CrossTenantAccessPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\DefaultAppManagementPolicy\DefaultAppManagementPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy\IdentitySecurityDefaultsEnforcementPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\PermissionGrantPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\RoleManagementPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicyAssignments\RoleManagementPolicyAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the policyRoot singleton.
*/
class PoliciesRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the authenticationStrengthPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function authenticationStrengthPolicies(): AuthenticationStrengthPoliciesRequestBuilder {
        return new AuthenticationStrengthPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the permissionGrantPolicies property of the microsoft.graph.policyRoot entity.
    */
    public function permissionGrantPolicies(): PermissionGrantPoliciesRequestBuilder {
        return new PermissionGrantPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new PoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get policies
     * @param PoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PolicyRoot|null>
     * @throws Exception
    */
    public function get(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PolicyRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update policies
     * @param PolicyRoot $body The request body
     * @param PoliciesRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PolicyRoot|null>
     * @throws Exception
    */
    public function patch(PolicyRoot $body, ?PoliciesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PolicyRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * @return PoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

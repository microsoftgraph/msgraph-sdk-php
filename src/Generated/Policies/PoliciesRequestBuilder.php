<?php

namespace Microsoft\Graph\Policies;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Graph\Models\PolicyRoot;
use Microsoft\Graph\Policies\ActivityBasedTimeoutPolicies\ActivityBasedTimeoutPoliciesRequestBuilder;
use Microsoft\Graph\Policies\ActivityBasedTimeoutPolicies\Item\ActivityBasedTimeoutPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\AdminConsentRequestPolicy\AdminConsentRequestPolicyRequestBuilder;
use Microsoft\Graph\Policies\AuthenticationFlowsPolicy\AuthenticationFlowsPolicyRequestBuilder;
use Microsoft\Graph\Policies\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Policies\AuthorizationPolicy\AuthorizationPolicyRequestBuilder;
use Microsoft\Graph\Policies\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\Policies\ClaimsMappingPolicies\Item\ClaimsMappingPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\ConditionalAccessPolicies\ConditionalAccessPoliciesRequestBuilder;
use Microsoft\Graph\Policies\ConditionalAccessPolicies\Item\ConditionalAccessPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Policies\FeatureRolloutPolicies\Item\FeatureRolloutPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Policies\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\IdentitySecurityDefaultsEnforcementPolicy\IdentitySecurityDefaultsEnforcementPolicyRequestBuilder;
use Microsoft\Graph\Policies\PermissionGrantPolicies\Item\PermissionGrantPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\PermissionGrantPolicies\PermissionGrantPoliciesRequestBuilder;
use Microsoft\Graph\Policies\RoleManagementPolicies\Item\UnifiedRoleManagementPolicyItemRequestBuilder;
use Microsoft\Graph\Policies\RoleManagementPolicies\RoleManagementPoliciesRequestBuilder;
use Microsoft\Graph\Policies\RoleManagementPolicyAssignments\Item\UnifiedRoleManagementPolicyAssignmentItemRequestBuilder;
use Microsoft\Graph\Policies\RoleManagementPolicyAssignments\RoleManagementPolicyAssignmentsRequestBuilder;
use Microsoft\Graph\Policies\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Policies\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Policies\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Policies\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PoliciesRequestBuilder 
{
    /**
     * The activityBasedTimeoutPolicies property
    */
    public function activityBasedTimeoutPolicies(): ActivityBasedTimeoutPoliciesRequestBuilder {
        return new ActivityBasedTimeoutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The adminConsentRequestPolicy property
    */
    public function adminConsentRequestPolicy(): AdminConsentRequestPolicyRequestBuilder {
        return new AdminConsentRequestPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authenticationFlowsPolicy property
    */
    public function authenticationFlowsPolicy(): AuthenticationFlowsPolicyRequestBuilder {
        return new AuthenticationFlowsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authenticationMethodsPolicy property
    */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authorizationPolicy property
    */
    public function authorizationPolicy(): AuthorizationPolicyRequestBuilder {
        return new AuthorizationPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The claimsMappingPolicies property
    */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder {
        return new ClaimsMappingPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conditionalAccessPolicies property
    */
    public function conditionalAccessPolicies(): ConditionalAccessPoliciesRequestBuilder {
        return new ConditionalAccessPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The featureRolloutPolicies property
    */
    public function featureRolloutPolicies(): FeatureRolloutPoliciesRequestBuilder {
        return new FeatureRolloutPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The homeRealmDiscoveryPolicies property
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identitySecurityDefaultsEnforcementPolicy property
    */
    public function identitySecurityDefaultsEnforcementPolicy(): IdentitySecurityDefaultsEnforcementPolicyRequestBuilder {
        return new IdentitySecurityDefaultsEnforcementPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The permissionGrantPolicies property
    */
    public function permissionGrantPolicies(): PermissionGrantPoliciesRequestBuilder {
        return new PermissionGrantPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The roleManagementPolicies property
    */
    public function roleManagementPolicies(): RoleManagementPoliciesRequestBuilder {
        return new RoleManagementPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleManagementPolicyAssignments property
    */
    public function roleManagementPolicyAssignments(): RoleManagementPolicyAssignmentsRequestBuilder {
        return new RoleManagementPolicyAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenIssuancePolicies property
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenLifetimePolicies property
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.policies.activityBasedTimeoutPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ActivityBasedTimeoutPolicyItemRequestBuilder
    */
    public function activityBasedTimeoutPoliciesById(string $id): ActivityBasedTimeoutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activityBasedTimeoutPolicy%2Did'] = $id;
        return new ActivityBasedTimeoutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.claimsMappingPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ClaimsMappingPolicyItemRequestBuilder
    */
    public function claimsMappingPoliciesById(string $id): ClaimsMappingPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['claimsMappingPolicy%2Did'] = $id;
        return new ClaimsMappingPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.conditionalAccessPolicies.item collection
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get policies
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update policies
     * @param PolicyRoot $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(PolicyRoot $body, ?PoliciesRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.featureRolloutPolicies.item collection
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
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(PolicyRoot::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.homeRealmDiscoveryPolicies.item collection
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
     * @param PolicyRoot $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(PolicyRoot $body, ?PoliciesRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.permissionGrantPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return PermissionGrantPolicyItemRequestBuilder
    */
    public function permissionGrantPoliciesById(string $id): PermissionGrantPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantPolicy%2Did'] = $id;
        return new PermissionGrantPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.roleManagementPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleManagementPolicyItemRequestBuilder
    */
    public function roleManagementPoliciesById(string $id): UnifiedRoleManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicy%2Did'] = $id;
        return new UnifiedRoleManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.roleManagementPolicyAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleManagementPolicyAssignmentItemRequestBuilder
    */
    public function roleManagementPolicyAssignmentsById(string $id): UnifiedRoleManagementPolicyAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicyAssignment%2Did'] = $id;
        return new UnifiedRoleManagementPolicyAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.tokenIssuancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.policies.tokenLifetimePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

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
use Microsoft\Graph\Generated\Policies\AuthenticationFlowsPolicy\AuthenticationFlowsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthorizationPolicy\AuthorizationPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ClaimsMappingPolicies\Item\ClaimsMappingPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\ConditionalAccessPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\ConditionalAccessPolicies\Item\ConditionalAccessPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\FeatureRolloutPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\FeatureRolloutPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\IdentitySecurityDefaultsEnforcementPolicy\IdentitySecurityDefaultsEnforcementPolicyRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\PermissionGrantPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\PermissionGrantPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
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
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The permissionGrantPolicies property
    */
    public function permissionGrantPolicies(): PermissionGrantPoliciesRequestBuilder {
        return new PermissionGrantPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
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
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.activityBasedTimeoutPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ActivityBasedTimeoutPolicyItemRequestBuilder
    */
    public function activityBasedTimeoutPoliciesById(string $id): ActivityBasedTimeoutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activityBasedTimeoutPolicy_id'] = $id;
        return new ActivityBasedTimeoutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.claimsMappingPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ClaimsMappingPolicyItemRequestBuilder
    */
    public function claimsMappingPoliciesById(string $id): ClaimsMappingPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['claimsMappingPolicy_id'] = $id;
        return new ClaimsMappingPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.conditionalAccessPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ConditionalAccessPolicyItemRequestBuilder
    */
    public function conditionalAccessPoliciesById(string $id): ConditionalAccessPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conditionalAccessPolicy_id'] = $id;
        return new ConditionalAccessPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get policies
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update policies
     * @param PolicyRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(PolicyRoot $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.featureRolloutPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return FeatureRolloutPolicyItemRequestBuilder
    */
    public function featureRolloutPoliciesById(string $id): FeatureRolloutPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['featureRolloutPolicy_id'] = $id;
        return new FeatureRolloutPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get policies
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, PolicyRoot::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.homeRealmDiscoveryPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy_id'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update policies
     * @param PolicyRoot $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(PolicyRoot $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.permissionGrantPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return PermissionGrantPolicyItemRequestBuilder
    */
    public function permissionGrantPoliciesById(string $id): PermissionGrantPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantPolicy_id'] = $id;
        return new PermissionGrantPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.tokenIssuancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy_id'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.policies.tokenLifetimePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy_id'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

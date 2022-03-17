<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyRoot extends Entity 
{
    /** @var array<ActivityBasedTimeoutPolicy>|null $activityBasedTimeoutPolicies The policy that controls the idle time out for web sessions for applications. */
    private ?array $activityBasedTimeoutPolicies = null;
    
    /** @var AdminConsentRequestPolicy|null $adminConsentRequestPolicy The policy by which consent requests are created and managed for the entire tenant. */
    private ?AdminConsentRequestPolicy $adminConsentRequestPolicy = null;
    
    /** @var AuthenticationFlowsPolicy|null $authenticationFlowsPolicy The policy configuration of the self-service sign-up experience of external users. */
    private ?AuthenticationFlowsPolicy $authenticationFlowsPolicy = null;
    
    /** @var AuthenticationMethodsPolicy|null $authenticationMethodsPolicy The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD). */
    private ?AuthenticationMethodsPolicy $authenticationMethodsPolicy = null;
    
    /** @var AuthorizationPolicy|null $authorizationPolicy The policy that controls Azure AD authorization settings. */
    private ?AuthorizationPolicy $authorizationPolicy = null;
    
    /** @var array<ClaimsMappingPolicy>|null $claimsMappingPolicies The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application. */
    private ?array $claimsMappingPolicies = null;
    
    /** @var array<ConditionalAccessPolicy>|null $conditionalAccessPolicies The custom rules that define an access scenario. */
    private ?array $conditionalAccessPolicies = null;
    
    /** @var array<FeatureRolloutPolicy>|null $featureRolloutPolicies The feature rollout policy associated with a directory object. */
    private ?array $featureRolloutPolicies = null;
    
    /** @var array<HomeRealmDiscoveryPolicy>|null $homeRealmDiscoveryPolicies The policy to control Azure AD authentication behavior for federated users. */
    private ?array $homeRealmDiscoveryPolicies = null;
    
    /** @var IdentitySecurityDefaultsEnforcementPolicy|null $identitySecurityDefaultsEnforcementPolicy The policy that represents the security defaults that protect against common attacks. */
    private ?IdentitySecurityDefaultsEnforcementPolicy $identitySecurityDefaultsEnforcementPolicy = null;
    
    /** @var array<PermissionGrantPolicy>|null $permissionGrantPolicies The policy that specifies the conditions under which consent can be granted. */
    private ?array $permissionGrantPolicies = null;
    
    /** @var array<TokenIssuancePolicy>|null $tokenIssuancePolicies The policy that specifies the characteristics of SAML tokens issued by Azure AD. */
    private ?array $tokenIssuancePolicies = null;
    
    /** @var array<TokenLifetimePolicy>|null $tokenLifetimePolicies The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD. */
    private ?array $tokenLifetimePolicies = null;
    
    /**
     * Instantiates a new policyRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyRoot
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PolicyRoot {
        return new PolicyRoot();
    }

    /**
     * Gets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     * @return array<ActivityBasedTimeoutPolicy>|null
    */
    public function getActivityBasedTimeoutPolicies(): ?array {
        return $this->activityBasedTimeoutPolicies;
    }

    /**
     * Gets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     * @return AdminConsentRequestPolicy|null
    */
    public function getAdminConsentRequestPolicy(): ?AdminConsentRequestPolicy {
        return $this->adminConsentRequestPolicy;
    }

    /**
     * Gets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     * @return AuthenticationFlowsPolicy|null
    */
    public function getAuthenticationFlowsPolicy(): ?AuthenticationFlowsPolicy {
        return $this->authenticationFlowsPolicy;
    }

    /**
     * Gets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     * @return AuthenticationMethodsPolicy|null
    */
    public function getAuthenticationMethodsPolicy(): ?AuthenticationMethodsPolicy {
        return $this->authenticationMethodsPolicy;
    }

    /**
     * Gets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     * @return AuthorizationPolicy|null
    */
    public function getAuthorizationPolicy(): ?AuthorizationPolicy {
        return $this->authorizationPolicy;
    }

    /**
     * Gets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     * @return array<ClaimsMappingPolicy>|null
    */
    public function getClaimsMappingPolicies(): ?array {
        return $this->claimsMappingPolicies;
    }

    /**
     * Gets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getConditionalAccessPolicies(): ?array {
        return $this->conditionalAccessPolicies;
    }

    /**
     * Gets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->featureRolloutPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activityBasedTimeoutPolicies' => function (self $o, ParseNode $n) { $o->setActivityBasedTimeoutPolicies($n->getCollectionOfObjectValues(ActivityBasedTimeoutPolicy::class)); },
            'adminConsentRequestPolicy' => function (self $o, ParseNode $n) { $o->setAdminConsentRequestPolicy($n->getObjectValue(AdminConsentRequestPolicy::class)); },
            'authenticationFlowsPolicy' => function (self $o, ParseNode $n) { $o->setAuthenticationFlowsPolicy($n->getObjectValue(AuthenticationFlowsPolicy::class)); },
            'authenticationMethodsPolicy' => function (self $o, ParseNode $n) { $o->setAuthenticationMethodsPolicy($n->getObjectValue(AuthenticationMethodsPolicy::class)); },
            'authorizationPolicy' => function (self $o, ParseNode $n) { $o->setAuthorizationPolicy($n->getObjectValue(AuthorizationPolicy::class)); },
            'claimsMappingPolicies' => function (self $o, ParseNode $n) { $o->setClaimsMappingPolicies($n->getCollectionOfObjectValues(ClaimsMappingPolicy::class)); },
            'conditionalAccessPolicies' => function (self $o, ParseNode $n) { $o->setConditionalAccessPolicies($n->getCollectionOfObjectValues(ConditionalAccessPolicy::class)); },
            'featureRolloutPolicies' => function (self $o, ParseNode $n) { $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues(FeatureRolloutPolicy::class)); },
            'homeRealmDiscoveryPolicies' => function (self $o, ParseNode $n) { $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues(HomeRealmDiscoveryPolicy::class)); },
            'identitySecurityDefaultsEnforcementPolicy' => function (self $o, ParseNode $n) { $o->setIdentitySecurityDefaultsEnforcementPolicy($n->getObjectValue(IdentitySecurityDefaultsEnforcementPolicy::class)); },
            'permissionGrantPolicies' => function (self $o, ParseNode $n) { $o->setPermissionGrantPolicies($n->getCollectionOfObjectValues(PermissionGrantPolicy::class)); },
            'tokenIssuancePolicies' => function (self $o, ParseNode $n) { $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues(TokenIssuancePolicy::class)); },
            'tokenLifetimePolicies' => function (self $o, ParseNode $n) { $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues(TokenLifetimePolicy::class)); },
        ]);
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->homeRealmDiscoveryPolicies;
    }

    /**
     * Gets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     * @return IdentitySecurityDefaultsEnforcementPolicy|null
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy(): ?IdentitySecurityDefaultsEnforcementPolicy {
        return $this->identitySecurityDefaultsEnforcementPolicy;
    }

    /**
     * Gets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     * @return array<PermissionGrantPolicy>|null
    */
    public function getPermissionGrantPolicies(): ?array {
        return $this->permissionGrantPolicies;
    }

    /**
     * Gets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->tokenIssuancePolicies;
    }

    /**
     * Gets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->tokenLifetimePolicies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activityBasedTimeoutPolicies', $this->activityBasedTimeoutPolicies);
        $writer->writeObjectValue('adminConsentRequestPolicy', $this->adminConsentRequestPolicy);
        $writer->writeObjectValue('authenticationFlowsPolicy', $this->authenticationFlowsPolicy);
        $writer->writeObjectValue('authenticationMethodsPolicy', $this->authenticationMethodsPolicy);
        $writer->writeObjectValue('authorizationPolicy', $this->authorizationPolicy);
        $writer->writeCollectionOfObjectValues('claimsMappingPolicies', $this->claimsMappingPolicies);
        $writer->writeCollectionOfObjectValues('conditionalAccessPolicies', $this->conditionalAccessPolicies);
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->featureRolloutPolicies);
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->homeRealmDiscoveryPolicies);
        $writer->writeObjectValue('identitySecurityDefaultsEnforcementPolicy', $this->identitySecurityDefaultsEnforcementPolicy);
        $writer->writeCollectionOfObjectValues('permissionGrantPolicies', $this->permissionGrantPolicies);
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->tokenIssuancePolicies);
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->tokenLifetimePolicies);
    }

    /**
     * Sets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     *  @param array<ActivityBasedTimeoutPolicy>|null $value Value to set for the activityBasedTimeoutPolicies property.
    */
    public function setActivityBasedTimeoutPolicies(?array $value ): void {
        $this->activityBasedTimeoutPolicies = $value;
    }

    /**
     * Sets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     *  @param AdminConsentRequestPolicy|null $value Value to set for the adminConsentRequestPolicy property.
    */
    public function setAdminConsentRequestPolicy(?AdminConsentRequestPolicy $value ): void {
        $this->adminConsentRequestPolicy = $value;
    }

    /**
     * Sets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     *  @param AuthenticationFlowsPolicy|null $value Value to set for the authenticationFlowsPolicy property.
    */
    public function setAuthenticationFlowsPolicy(?AuthenticationFlowsPolicy $value ): void {
        $this->authenticationFlowsPolicy = $value;
    }

    /**
     * Sets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     *  @param AuthenticationMethodsPolicy|null $value Value to set for the authenticationMethodsPolicy property.
    */
    public function setAuthenticationMethodsPolicy(?AuthenticationMethodsPolicy $value ): void {
        $this->authenticationMethodsPolicy = $value;
    }

    /**
     * Sets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     *  @param AuthorizationPolicy|null $value Value to set for the authorizationPolicy property.
    */
    public function setAuthorizationPolicy(?AuthorizationPolicy $value ): void {
        $this->authorizationPolicy = $value;
    }

    /**
     * Sets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     *  @param array<ClaimsMappingPolicy>|null $value Value to set for the claimsMappingPolicies property.
    */
    public function setClaimsMappingPolicies(?array $value ): void {
        $this->claimsMappingPolicies = $value;
    }

    /**
     * Sets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     *  @param array<ConditionalAccessPolicy>|null $value Value to set for the conditionalAccessPolicies property.
    */
    public function setConditionalAccessPolicies(?array $value ): void {
        $this->conditionalAccessPolicies = $value;
    }

    /**
     * Sets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     *  @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value ): void {
        $this->featureRolloutPolicies = $value;
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     *  @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value ): void {
        $this->homeRealmDiscoveryPolicies = $value;
    }

    /**
     * Sets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     *  @param IdentitySecurityDefaultsEnforcementPolicy|null $value Value to set for the identitySecurityDefaultsEnforcementPolicy property.
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy(?IdentitySecurityDefaultsEnforcementPolicy $value ): void {
        $this->identitySecurityDefaultsEnforcementPolicy = $value;
    }

    /**
     * Sets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     *  @param array<PermissionGrantPolicy>|null $value Value to set for the permissionGrantPolicies property.
    */
    public function setPermissionGrantPolicies(?array $value ): void {
        $this->permissionGrantPolicies = $value;
    }

    /**
     * Sets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     *  @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value ): void {
        $this->tokenIssuancePolicies = $value;
    }

    /**
     * Sets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     *  @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value ): void {
        $this->tokenLifetimePolicies = $value;
    }

}

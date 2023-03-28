<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyRoot {
        return new PolicyRoot();
    }

    /**
     * Gets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     * @return array<ActivityBasedTimeoutPolicy>|null
    */
    public function getActivityBasedTimeoutPolicies(): ?array {
        return $this->getBackingStore()->get('activityBasedTimeoutPolicies');
    }

    /**
     * Gets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     * @return AdminConsentRequestPolicy|null
    */
    public function getAdminConsentRequestPolicy(): ?AdminConsentRequestPolicy {
        return $this->getBackingStore()->get('adminConsentRequestPolicy');
    }

    /**
     * Gets the appManagementPolicies property value. The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     * @return array<AppManagementPolicy>|null
    */
    public function getAppManagementPolicies(): ?array {
        return $this->getBackingStore()->get('appManagementPolicies');
    }

    /**
     * Gets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     * @return AuthenticationFlowsPolicy|null
    */
    public function getAuthenticationFlowsPolicy(): ?AuthenticationFlowsPolicy {
        return $this->getBackingStore()->get('authenticationFlowsPolicy');
    }

    /**
     * Gets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     * @return AuthenticationMethodsPolicy|null
    */
    public function getAuthenticationMethodsPolicy(): ?AuthenticationMethodsPolicy {
        return $this->getBackingStore()->get('authenticationMethodsPolicy');
    }

    /**
     * Gets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     * @return AuthorizationPolicy|null
    */
    public function getAuthorizationPolicy(): ?AuthorizationPolicy {
        return $this->getBackingStore()->get('authorizationPolicy');
    }

    /**
     * Gets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     * @return array<ClaimsMappingPolicy>|null
    */
    public function getClaimsMappingPolicies(): ?array {
        return $this->getBackingStore()->get('claimsMappingPolicies');
    }

    /**
     * Gets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getConditionalAccessPolicies(): ?array {
        return $this->getBackingStore()->get('conditionalAccessPolicies');
    }

    /**
     * Gets the crossTenantAccessPolicy property value. The custom rules that define an access scenario when interacting with external Azure AD tenants.
     * @return CrossTenantAccessPolicy|null
    */
    public function getCrossTenantAccessPolicy(): ?CrossTenantAccessPolicy {
        return $this->getBackingStore()->get('crossTenantAccessPolicy');
    }

    /**
     * Gets the defaultAppManagementPolicy property value. The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     * @return TenantAppManagementPolicy|null
    */
    public function getDefaultAppManagementPolicy(): ?TenantAppManagementPolicy {
        return $this->getBackingStore()->get('defaultAppManagementPolicy');
    }

    /**
     * Gets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->getBackingStore()->get('featureRolloutPolicies');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityBasedTimeoutPolicies' => fn(ParseNode $n) => $o->setActivityBasedTimeoutPolicies($n->getCollectionOfObjectValues([ActivityBasedTimeoutPolicy::class, 'createFromDiscriminatorValue'])),
            'adminConsentRequestPolicy' => fn(ParseNode $n) => $o->setAdminConsentRequestPolicy($n->getObjectValue([AdminConsentRequestPolicy::class, 'createFromDiscriminatorValue'])),
            'appManagementPolicies' => fn(ParseNode $n) => $o->setAppManagementPolicies($n->getCollectionOfObjectValues([AppManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'authenticationFlowsPolicy' => fn(ParseNode $n) => $o->setAuthenticationFlowsPolicy($n->getObjectValue([AuthenticationFlowsPolicy::class, 'createFromDiscriminatorValue'])),
            'authenticationMethodsPolicy' => fn(ParseNode $n) => $o->setAuthenticationMethodsPolicy($n->getObjectValue([AuthenticationMethodsPolicy::class, 'createFromDiscriminatorValue'])),
            'authorizationPolicy' => fn(ParseNode $n) => $o->setAuthorizationPolicy($n->getObjectValue([AuthorizationPolicy::class, 'createFromDiscriminatorValue'])),
            'claimsMappingPolicies' => fn(ParseNode $n) => $o->setClaimsMappingPolicies($n->getCollectionOfObjectValues([ClaimsMappingPolicy::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessPolicies' => fn(ParseNode $n) => $o->setConditionalAccessPolicies($n->getCollectionOfObjectValues([ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'crossTenantAccessPolicy' => fn(ParseNode $n) => $o->setCrossTenantAccessPolicy($n->getObjectValue([CrossTenantAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'defaultAppManagementPolicy' => fn(ParseNode $n) => $o->setDefaultAppManagementPolicy($n->getObjectValue([TenantAppManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'featureRolloutPolicies' => fn(ParseNode $n) => $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues([FeatureRolloutPolicy::class, 'createFromDiscriminatorValue'])),
            'homeRealmDiscoveryPolicies' => fn(ParseNode $n) => $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues([HomeRealmDiscoveryPolicy::class, 'createFromDiscriminatorValue'])),
            'identitySecurityDefaultsEnforcementPolicy' => fn(ParseNode $n) => $o->setIdentitySecurityDefaultsEnforcementPolicy($n->getObjectValue([IdentitySecurityDefaultsEnforcementPolicy::class, 'createFromDiscriminatorValue'])),
            'permissionGrantPolicies' => fn(ParseNode $n) => $o->setPermissionGrantPolicies($n->getCollectionOfObjectValues([PermissionGrantPolicy::class, 'createFromDiscriminatorValue'])),
            'roleManagementPolicies' => fn(ParseNode $n) => $o->setRoleManagementPolicies($n->getCollectionOfObjectValues([UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'roleManagementPolicyAssignments' => fn(ParseNode $n) => $o->setRoleManagementPolicyAssignments($n->getCollectionOfObjectValues([UnifiedRoleManagementPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'tokenIssuancePolicies' => fn(ParseNode $n) => $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues([TokenIssuancePolicy::class, 'createFromDiscriminatorValue'])),
            'tokenLifetimePolicies' => fn(ParseNode $n) => $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues([TokenLifetimePolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->getBackingStore()->get('homeRealmDiscoveryPolicies');
    }

    /**
     * Gets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     * @return IdentitySecurityDefaultsEnforcementPolicy|null
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy(): ?IdentitySecurityDefaultsEnforcementPolicy {
        return $this->getBackingStore()->get('identitySecurityDefaultsEnforcementPolicy');
    }

    /**
     * Gets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     * @return array<PermissionGrantPolicy>|null
    */
    public function getPermissionGrantPolicies(): ?array {
        return $this->getBackingStore()->get('permissionGrantPolicies');
    }

    /**
     * Gets the roleManagementPolicies property value. Specifies the various policies associated with scopes and roles.
     * @return array<UnifiedRoleManagementPolicy>|null
    */
    public function getRoleManagementPolicies(): ?array {
        return $this->getBackingStore()->get('roleManagementPolicies');
    }

    /**
     * Gets the roleManagementPolicyAssignments property value. The assignment of a role management policy to a role definition object.
     * @return array<UnifiedRoleManagementPolicyAssignment>|null
    */
    public function getRoleManagementPolicyAssignments(): ?array {
        return $this->getBackingStore()->get('roleManagementPolicyAssignments');
    }

    /**
     * Gets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->getBackingStore()->get('tokenIssuancePolicies');
    }

    /**
     * Gets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->getBackingStore()->get('tokenLifetimePolicies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activityBasedTimeoutPolicies', $this->getActivityBasedTimeoutPolicies());
        $writer->writeObjectValue('adminConsentRequestPolicy', $this->getAdminConsentRequestPolicy());
        $writer->writeCollectionOfObjectValues('appManagementPolicies', $this->getAppManagementPolicies());
        $writer->writeObjectValue('authenticationFlowsPolicy', $this->getAuthenticationFlowsPolicy());
        $writer->writeObjectValue('authenticationMethodsPolicy', $this->getAuthenticationMethodsPolicy());
        $writer->writeObjectValue('authorizationPolicy', $this->getAuthorizationPolicy());
        $writer->writeCollectionOfObjectValues('claimsMappingPolicies', $this->getClaimsMappingPolicies());
        $writer->writeCollectionOfObjectValues('conditionalAccessPolicies', $this->getConditionalAccessPolicies());
        $writer->writeObjectValue('crossTenantAccessPolicy', $this->getCrossTenantAccessPolicy());
        $writer->writeObjectValue('defaultAppManagementPolicy', $this->getDefaultAppManagementPolicy());
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->getFeatureRolloutPolicies());
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->getHomeRealmDiscoveryPolicies());
        $writer->writeObjectValue('identitySecurityDefaultsEnforcementPolicy', $this->getIdentitySecurityDefaultsEnforcementPolicy());
        $writer->writeCollectionOfObjectValues('permissionGrantPolicies', $this->getPermissionGrantPolicies());
        $writer->writeCollectionOfObjectValues('roleManagementPolicies', $this->getRoleManagementPolicies());
        $writer->writeCollectionOfObjectValues('roleManagementPolicyAssignments', $this->getRoleManagementPolicyAssignments());
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->getTokenIssuancePolicies());
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->getTokenLifetimePolicies());
    }

    /**
     * Sets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     * @param array<ActivityBasedTimeoutPolicy>|null $value Value to set for the activityBasedTimeoutPolicies property.
    */
    public function setActivityBasedTimeoutPolicies(?array $value): void {
        $this->getBackingStore()->set('activityBasedTimeoutPolicies', $value);
    }

    /**
     * Sets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     * @param AdminConsentRequestPolicy|null $value Value to set for the adminConsentRequestPolicy property.
    */
    public function setAdminConsentRequestPolicy(?AdminConsentRequestPolicy $value): void {
        $this->getBackingStore()->set('adminConsentRequestPolicy', $value);
    }

    /**
     * Sets the appManagementPolicies property value. The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     * @param array<AppManagementPolicy>|null $value Value to set for the appManagementPolicies property.
    */
    public function setAppManagementPolicies(?array $value): void {
        $this->getBackingStore()->set('appManagementPolicies', $value);
    }

    /**
     * Sets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     * @param AuthenticationFlowsPolicy|null $value Value to set for the authenticationFlowsPolicy property.
    */
    public function setAuthenticationFlowsPolicy(?AuthenticationFlowsPolicy $value): void {
        $this->getBackingStore()->set('authenticationFlowsPolicy', $value);
    }

    /**
     * Sets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     * @param AuthenticationMethodsPolicy|null $value Value to set for the authenticationMethodsPolicy property.
    */
    public function setAuthenticationMethodsPolicy(?AuthenticationMethodsPolicy $value): void {
        $this->getBackingStore()->set('authenticationMethodsPolicy', $value);
    }

    /**
     * Sets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     * @param AuthorizationPolicy|null $value Value to set for the authorizationPolicy property.
    */
    public function setAuthorizationPolicy(?AuthorizationPolicy $value): void {
        $this->getBackingStore()->set('authorizationPolicy', $value);
    }

    /**
     * Sets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     * @param array<ClaimsMappingPolicy>|null $value Value to set for the claimsMappingPolicies property.
    */
    public function setClaimsMappingPolicies(?array $value): void {
        $this->getBackingStore()->set('claimsMappingPolicies', $value);
    }

    /**
     * Sets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     * @param array<ConditionalAccessPolicy>|null $value Value to set for the conditionalAccessPolicies property.
    */
    public function setConditionalAccessPolicies(?array $value): void {
        $this->getBackingStore()->set('conditionalAccessPolicies', $value);
    }

    /**
     * Sets the crossTenantAccessPolicy property value. The custom rules that define an access scenario when interacting with external Azure AD tenants.
     * @param CrossTenantAccessPolicy|null $value Value to set for the crossTenantAccessPolicy property.
    */
    public function setCrossTenantAccessPolicy(?CrossTenantAccessPolicy $value): void {
        $this->getBackingStore()->set('crossTenantAccessPolicy', $value);
    }

    /**
     * Sets the defaultAppManagementPolicy property value. The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     * @param TenantAppManagementPolicy|null $value Value to set for the defaultAppManagementPolicy property.
    */
    public function setDefaultAppManagementPolicy(?TenantAppManagementPolicy $value): void {
        $this->getBackingStore()->set('defaultAppManagementPolicy', $value);
    }

    /**
     * Sets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     * @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value): void {
        $this->getBackingStore()->set('featureRolloutPolicies', $value);
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     * @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value): void {
        $this->getBackingStore()->set('homeRealmDiscoveryPolicies', $value);
    }

    /**
     * Sets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     * @param IdentitySecurityDefaultsEnforcementPolicy|null $value Value to set for the identitySecurityDefaultsEnforcementPolicy property.
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy(?IdentitySecurityDefaultsEnforcementPolicy $value): void {
        $this->getBackingStore()->set('identitySecurityDefaultsEnforcementPolicy', $value);
    }

    /**
     * Sets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     * @param array<PermissionGrantPolicy>|null $value Value to set for the permissionGrantPolicies property.
    */
    public function setPermissionGrantPolicies(?array $value): void {
        $this->getBackingStore()->set('permissionGrantPolicies', $value);
    }

    /**
     * Sets the roleManagementPolicies property value. Specifies the various policies associated with scopes and roles.
     * @param array<UnifiedRoleManagementPolicy>|null $value Value to set for the roleManagementPolicies property.
    */
    public function setRoleManagementPolicies(?array $value): void {
        $this->getBackingStore()->set('roleManagementPolicies', $value);
    }

    /**
     * Sets the roleManagementPolicyAssignments property value. The assignment of a role management policy to a role definition object.
     * @param array<UnifiedRoleManagementPolicyAssignment>|null $value Value to set for the roleManagementPolicyAssignments property.
    */
    public function setRoleManagementPolicyAssignments(?array $value): void {
        $this->getBackingStore()->set('roleManagementPolicyAssignments', $value);
    }

    /**
     * Sets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     * @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value): void {
        $this->getBackingStore()->set('tokenIssuancePolicies', $value);
    }

    /**
     * Sets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     * @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value): void {
        $this->getBackingStore()->set('tokenLifetimePolicies', $value);
    }

}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyRoot File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* PolicyRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyRoot extends Entity
{
    /**
    * Gets the authenticationMethodsPolicy
    * The authentication methods and the users that are allowed to use them to sign in and perform multifactor authentication (MFA) in Microsoft Entra ID.
    *
    * @return AuthenticationMethodsPolicy|null The authenticationMethodsPolicy
    */
    public function getAuthenticationMethodsPolicy()
    {
        if (array_key_exists("authenticationMethodsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethodsPolicy"], "\Microsoft\Graph\Model\AuthenticationMethodsPolicy") || is_null($this->_propDict["authenticationMethodsPolicy"])) {
                return $this->_propDict["authenticationMethodsPolicy"];
            } else {
                $this->_propDict["authenticationMethodsPolicy"] = new AuthenticationMethodsPolicy($this->_propDict["authenticationMethodsPolicy"]);
                return $this->_propDict["authenticationMethodsPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationMethodsPolicy
    * The authentication methods and the users that are allowed to use them to sign in and perform multifactor authentication (MFA) in Microsoft Entra ID.
    *
    * @param AuthenticationMethodsPolicy $val The authenticationMethodsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationMethodsPolicy($val)
    {
        $this->_propDict["authenticationMethodsPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the authenticationStrengthPolicies
    * The authentication method combinations that are to be used in scenarios defined by Microsoft Entra Conditional Access.
     *
     * @return array|null The authenticationStrengthPolicies
     */
    public function getAuthenticationStrengthPolicies()
    {
        if (array_key_exists("authenticationStrengthPolicies", $this->_propDict)) {
           return $this->_propDict["authenticationStrengthPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authenticationStrengthPolicies
    * The authentication method combinations that are to be used in scenarios defined by Microsoft Entra Conditional Access.
    *
    * @param AuthenticationStrengthPolicy[] $val The authenticationStrengthPolicies
    *
    * @return PolicyRoot
    */
    public function setAuthenticationStrengthPolicies($val)
    {
        $this->_propDict["authenticationStrengthPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the authenticationFlowsPolicy
    * The policy configuration of the self-service sign-up experience of external users.
    *
    * @return AuthenticationFlowsPolicy|null The authenticationFlowsPolicy
    */
    public function getAuthenticationFlowsPolicy()
    {
        if (array_key_exists("authenticationFlowsPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationFlowsPolicy"], "\Microsoft\Graph\Model\AuthenticationFlowsPolicy") || is_null($this->_propDict["authenticationFlowsPolicy"])) {
                return $this->_propDict["authenticationFlowsPolicy"];
            } else {
                $this->_propDict["authenticationFlowsPolicy"] = new AuthenticationFlowsPolicy($this->_propDict["authenticationFlowsPolicy"]);
                return $this->_propDict["authenticationFlowsPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authenticationFlowsPolicy
    * The policy configuration of the self-service sign-up experience of external users.
    *
    * @param AuthenticationFlowsPolicy $val The authenticationFlowsPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthenticationFlowsPolicy($val)
    {
        $this->_propDict["authenticationFlowsPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the activityBasedTimeoutPolicies
    * The policy that controls the idle time out for web sessions for applications.
     *
     * @return array|null The activityBasedTimeoutPolicies
     */
    public function getActivityBasedTimeoutPolicies()
    {
        if (array_key_exists("activityBasedTimeoutPolicies", $this->_propDict)) {
           return $this->_propDict["activityBasedTimeoutPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityBasedTimeoutPolicies
    * The policy that controls the idle time out for web sessions for applications.
    *
    * @param ActivityBasedTimeoutPolicy[] $val The activityBasedTimeoutPolicies
    *
    * @return PolicyRoot
    */
    public function setActivityBasedTimeoutPolicies($val)
    {
        $this->_propDict["activityBasedTimeoutPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the appManagementPolicies
    * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     *
     * @return array|null The appManagementPolicies
     */
    public function getAppManagementPolicies()
    {
        if (array_key_exists("appManagementPolicies", $this->_propDict)) {
           return $this->_propDict["appManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appManagementPolicies
    * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
    *
    * @param AppManagementPolicy[] $val The appManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setAppManagementPolicies($val)
    {
        $this->_propDict["appManagementPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the authorizationPolicy
    * The policy that controls Microsoft Entra authorization settings.
    *
    * @return AuthorizationPolicy|null The authorizationPolicy
    */
    public function getAuthorizationPolicy()
    {
        if (array_key_exists("authorizationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationPolicy"], "\Microsoft\Graph\Model\AuthorizationPolicy") || is_null($this->_propDict["authorizationPolicy"])) {
                return $this->_propDict["authorizationPolicy"];
            } else {
                $this->_propDict["authorizationPolicy"] = new AuthorizationPolicy($this->_propDict["authorizationPolicy"]);
                return $this->_propDict["authorizationPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationPolicy
    * The policy that controls Microsoft Entra authorization settings.
    *
    * @param AuthorizationPolicy $val The authorizationPolicy
    *
    * @return PolicyRoot
    */
    public function setAuthorizationPolicy($val)
    {
        $this->_propDict["authorizationPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the claimsMappingPolicies
    * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     *
     * @return array|null The claimsMappingPolicies
     */
    public function getClaimsMappingPolicies()
    {
        if (array_key_exists("claimsMappingPolicies", $this->_propDict)) {
           return $this->_propDict["claimsMappingPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claimsMappingPolicies
    * The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
    *
    * @param ClaimsMappingPolicy[] $val The claimsMappingPolicies
    *
    * @return PolicyRoot
    */
    public function setClaimsMappingPolicies($val)
    {
        $this->_propDict["claimsMappingPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the crossTenantAccessPolicy
    * The custom rules that define an access scenario when interacting with external Microsoft Entra tenants.
    *
    * @return CrossTenantAccessPolicy|null The crossTenantAccessPolicy
    */
    public function getCrossTenantAccessPolicy()
    {
        if (array_key_exists("crossTenantAccessPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["crossTenantAccessPolicy"], "\Microsoft\Graph\Model\CrossTenantAccessPolicy") || is_null($this->_propDict["crossTenantAccessPolicy"])) {
                return $this->_propDict["crossTenantAccessPolicy"];
            } else {
                $this->_propDict["crossTenantAccessPolicy"] = new CrossTenantAccessPolicy($this->_propDict["crossTenantAccessPolicy"]);
                return $this->_propDict["crossTenantAccessPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the crossTenantAccessPolicy
    * The custom rules that define an access scenario when interacting with external Microsoft Entra tenants.
    *
    * @param CrossTenantAccessPolicy $val The crossTenantAccessPolicy
    *
    * @return PolicyRoot
    */
    public function setCrossTenantAccessPolicy($val)
    {
        $this->_propDict["crossTenantAccessPolicy"] = $val;
        return $this;
    }

    /**
    * Gets the defaultAppManagementPolicy
    * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
    *
    * @return TenantAppManagementPolicy|null The defaultAppManagementPolicy
    */
    public function getDefaultAppManagementPolicy()
    {
        if (array_key_exists("defaultAppManagementPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["defaultAppManagementPolicy"], "\Microsoft\Graph\Model\TenantAppManagementPolicy") || is_null($this->_propDict["defaultAppManagementPolicy"])) {
                return $this->_propDict["defaultAppManagementPolicy"];
            } else {
                $this->_propDict["defaultAppManagementPolicy"] = new TenantAppManagementPolicy($this->_propDict["defaultAppManagementPolicy"]);
                return $this->_propDict["defaultAppManagementPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the defaultAppManagementPolicy
    * The tenant-wide policy that enforces app management restrictions for all applications and service principals.
    *
    * @param TenantAppManagementPolicy $val The defaultAppManagementPolicy
    *
    * @return PolicyRoot
    */
    public function setDefaultAppManagementPolicy($val)
    {
        $this->_propDict["defaultAppManagementPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the homeRealmDiscoveryPolicies
    * The policy to control Microsoft Entra authentication behavior for federated users.
     *
     * @return array|null The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the homeRealmDiscoveryPolicies
    * The policy to control Microsoft Entra authentication behavior for federated users.
    *
    * @param HomeRealmDiscoveryPolicy[] $val The homeRealmDiscoveryPolicies
    *
    * @return PolicyRoot
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
        $this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the permissionGrantPolicies
    * The policy that specifies the conditions under which consent can be granted.
     *
     * @return array|null The permissionGrantPolicies
     */
    public function getPermissionGrantPolicies()
    {
        if (array_key_exists("permissionGrantPolicies", $this->_propDict)) {
           return $this->_propDict["permissionGrantPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionGrantPolicies
    * The policy that specifies the conditions under which consent can be granted.
    *
    * @param PermissionGrantPolicy[] $val The permissionGrantPolicies
    *
    * @return PolicyRoot
    */
    public function setPermissionGrantPolicies($val)
    {
        $this->_propDict["permissionGrantPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenIssuancePolicies
    * The policy that specifies the characteristics of SAML tokens issued by Microsoft Entra ID.
     *
     * @return array|null The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenIssuancePolicies
    * The policy that specifies the characteristics of SAML tokens issued by Microsoft Entra ID.
    *
    * @param TokenIssuancePolicy[] $val The tokenIssuancePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenIssuancePolicies($val)
    {
        $this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the tokenLifetimePolicies
    * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Microsoft Entra ID.
     *
     * @return array|null The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tokenLifetimePolicies
    * The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Microsoft Entra ID.
    *
    * @param TokenLifetimePolicy[] $val The tokenLifetimePolicies
    *
    * @return PolicyRoot
    */
    public function setTokenLifetimePolicies($val)
    {
        $this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }


     /**
     * Gets the featureRolloutPolicies
    * The feature rollout policy associated with a directory object.
     *
     * @return array|null The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists("featureRolloutPolicies", $this->_propDict)) {
           return $this->_propDict["featureRolloutPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the featureRolloutPolicies
    * The feature rollout policy associated with a directory object.
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return PolicyRoot
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the adminConsentRequestPolicy
    * The policy by which consent requests are created and managed for the entire tenant.
    *
    * @return AdminConsentRequestPolicy|null The adminConsentRequestPolicy
    */
    public function getAdminConsentRequestPolicy()
    {
        if (array_key_exists("adminConsentRequestPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsentRequestPolicy"], "\Microsoft\Graph\Model\AdminConsentRequestPolicy") || is_null($this->_propDict["adminConsentRequestPolicy"])) {
                return $this->_propDict["adminConsentRequestPolicy"];
            } else {
                $this->_propDict["adminConsentRequestPolicy"] = new AdminConsentRequestPolicy($this->_propDict["adminConsentRequestPolicy"]);
                return $this->_propDict["adminConsentRequestPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the adminConsentRequestPolicy
    * The policy by which consent requests are created and managed for the entire tenant.
    *
    * @param AdminConsentRequestPolicy $val The adminConsentRequestPolicy
    *
    * @return PolicyRoot
    */
    public function setAdminConsentRequestPolicy($val)
    {
        $this->_propDict["adminConsentRequestPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the conditionalAccessPolicies
    * The custom rules that define an access scenario.
     *
     * @return array|null The conditionalAccessPolicies
     */
    public function getConditionalAccessPolicies()
    {
        if (array_key_exists("conditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["conditionalAccessPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessPolicies
    * The custom rules that define an access scenario.
    *
    * @param ConditionalAccessPolicy[] $val The conditionalAccessPolicies
    *
    * @return PolicyRoot
    */
    public function setConditionalAccessPolicies($val)
    {
        $this->_propDict["conditionalAccessPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the identitySecurityDefaultsEnforcementPolicy
    * The policy that represents the security defaults that protect against common attacks.
    *
    * @return IdentitySecurityDefaultsEnforcementPolicy|null The identitySecurityDefaultsEnforcementPolicy
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy()
    {
        if (array_key_exists("identitySecurityDefaultsEnforcementPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["identitySecurityDefaultsEnforcementPolicy"], "\Microsoft\Graph\Model\IdentitySecurityDefaultsEnforcementPolicy") || is_null($this->_propDict["identitySecurityDefaultsEnforcementPolicy"])) {
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            } else {
                $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = new IdentitySecurityDefaultsEnforcementPolicy($this->_propDict["identitySecurityDefaultsEnforcementPolicy"]);
                return $this->_propDict["identitySecurityDefaultsEnforcementPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the identitySecurityDefaultsEnforcementPolicy
    * The policy that represents the security defaults that protect against common attacks.
    *
    * @param IdentitySecurityDefaultsEnforcementPolicy $val The identitySecurityDefaultsEnforcementPolicy
    *
    * @return PolicyRoot
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy($val)
    {
        $this->_propDict["identitySecurityDefaultsEnforcementPolicy"] = $val;
        return $this;
    }


     /**
     * Gets the roleManagementPolicies
    * Specifies the various policies associated with scopes and roles.
     *
     * @return array|null The roleManagementPolicies
     */
    public function getRoleManagementPolicies()
    {
        if (array_key_exists("roleManagementPolicies", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleManagementPolicies
    * Specifies the various policies associated with scopes and roles.
    *
    * @param UnifiedRoleManagementPolicy[] $val The roleManagementPolicies
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicies($val)
    {
        $this->_propDict["roleManagementPolicies"] = $val;
        return $this;
    }


     /**
     * Gets the roleManagementPolicyAssignments
    * The assignment of a role management policy to a role definition object.
     *
     * @return array|null The roleManagementPolicyAssignments
     */
    public function getRoleManagementPolicyAssignments()
    {
        if (array_key_exists("roleManagementPolicyAssignments", $this->_propDict)) {
           return $this->_propDict["roleManagementPolicyAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleManagementPolicyAssignments
    * The assignment of a role management policy to a role definition object.
    *
    * @param UnifiedRoleManagementPolicyAssignment[] $val The roleManagementPolicyAssignments
    *
    * @return PolicyRoot
    */
    public function setRoleManagementPolicyAssignments($val)
    {
        $this->_propDict["roleManagementPolicyAssignments"] = $val;
        return $this;
    }

}

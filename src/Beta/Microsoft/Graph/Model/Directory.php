<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Directory extends Entity
{

     /**
     * Gets the impactedResources
     *
     * @return array|null The impactedResources
     */
    public function getImpactedResources()
    {
        if (array_key_exists("impactedResources", $this->_propDict)) {
           return $this->_propDict["impactedResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the impactedResources
    *
    * @param ImpactedResource[] $val The impactedResources
    *
    * @return Directory
    */
    public function setImpactedResources($val)
    {
        $this->_propDict["impactedResources"] = $val;
        return $this;
    }


     /**
     * Gets the recommendations
    * List of recommended improvements to improve tenant posture.
     *
     * @return array|null The recommendations
     */
    public function getRecommendations()
    {
        if (array_key_exists("recommendations", $this->_propDict)) {
           return $this->_propDict["recommendations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendations
    * List of recommended improvements to improve tenant posture.
    *
    * @param Recommendation[] $val The recommendations
    *
    * @return Directory
    */
    public function setRecommendations($val)
    {
        $this->_propDict["recommendations"] = $val;
        return $this;
    }


     /**
     * Gets the deviceLocalCredentials
    * The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     *
     * @return array|null The deviceLocalCredentials
     */
    public function getDeviceLocalCredentials()
    {
        if (array_key_exists("deviceLocalCredentials", $this->_propDict)) {
           return $this->_propDict["deviceLocalCredentials"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceLocalCredentials
    * The credentials of the device's local administrator account backed up to Microsoft Entra ID.
    *
    * @param DeviceLocalCredentialInfo[] $val The deviceLocalCredentials
    *
    * @return Directory
    */
    public function setDeviceLocalCredentials($val)
    {
        $this->_propDict["deviceLocalCredentials"] = $val;
        return $this;
    }


     /**
     * Gets the administrativeUnits
    * Conceptual container for user and group directory objects.
     *
     * @return array|null The administrativeUnits
     */
    public function getAdministrativeUnits()
    {
        if (array_key_exists("administrativeUnits", $this->_propDict)) {
           return $this->_propDict["administrativeUnits"];
        } else {
            return null;
        }
    }

    /**
    * Sets the administrativeUnits
    * Conceptual container for user and group directory objects.
    *
    * @param AdministrativeUnit[] $val The administrativeUnits
    *
    * @return Directory
    */
    public function setAdministrativeUnits($val)
    {
        $this->_propDict["administrativeUnits"] = $val;
        return $this;
    }


     /**
     * Gets the attributeSets
    * Group of related custom security attribute definitions.
     *
     * @return array|null The attributeSets
     */
    public function getAttributeSets()
    {
        if (array_key_exists("attributeSets", $this->_propDict)) {
           return $this->_propDict["attributeSets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeSets
    * Group of related custom security attribute definitions.
    *
    * @param AttributeSet[] $val The attributeSets
    *
    * @return Directory
    */
    public function setAttributeSets($val)
    {
        $this->_propDict["attributeSets"] = $val;
        return $this;
    }

    /**
    * Gets the certificateAuthorities
    *
    * @return CertificateAuthorityPath|null The certificateAuthorities
    */
    public function getCertificateAuthorities()
    {
        if (array_key_exists("certificateAuthorities", $this->_propDict)) {
            if (is_a($this->_propDict["certificateAuthorities"], "\Beta\Microsoft\Graph\Model\CertificateAuthorityPath") || is_null($this->_propDict["certificateAuthorities"])) {
                return $this->_propDict["certificateAuthorities"];
            } else {
                $this->_propDict["certificateAuthorities"] = new CertificateAuthorityPath($this->_propDict["certificateAuthorities"]);
                return $this->_propDict["certificateAuthorities"];
            }
        }
        return null;
    }

    /**
    * Sets the certificateAuthorities
    *
    * @param CertificateAuthorityPath $val The certificateAuthorities
    *
    * @return Directory
    */
    public function setCertificateAuthorities($val)
    {
        $this->_propDict["certificateAuthorities"] = $val;
        return $this;
    }


     /**
     * Gets the customSecurityAttributeDefinitions
    * Schema of a custom security attributes (key-value pairs).
     *
     * @return array|null The customSecurityAttributeDefinitions
     */
    public function getCustomSecurityAttributeDefinitions()
    {
        if (array_key_exists("customSecurityAttributeDefinitions", $this->_propDict)) {
           return $this->_propDict["customSecurityAttributeDefinitions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customSecurityAttributeDefinitions
    * Schema of a custom security attributes (key-value pairs).
    *
    * @param CustomSecurityAttributeDefinition[] $val The customSecurityAttributeDefinitions
    *
    * @return Directory
    */
    public function setCustomSecurityAttributeDefinitions($val)
    {
        $this->_propDict["customSecurityAttributeDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the deletedItems
     *
     * @return array|null The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists("deletedItems", $this->_propDict)) {
           return $this->_propDict["deletedItems"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deletedItems
    *
    * @param DirectoryObject[] $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
        $this->_propDict["deletedItems"] = $val;
        return $this;
    }


     /**
     * Gets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *
     * @return array|null The federationConfigurations
     */
    public function getFederationConfigurations()
    {
        if (array_key_exists("federationConfigurations", $this->_propDict)) {
           return $this->_propDict["federationConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
    *
    * @param IdentityProviderBase[] $val The federationConfigurations
    *
    * @return Directory
    */
    public function setFederationConfigurations($val)
    {
        $this->_propDict["federationConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the inboundSharedUserProfiles
    * A collection of external Azure AD users whose profile data has been shared with the Azure AD tenant. Nullable.
     *
     * @return array|null The inboundSharedUserProfiles
     */
    public function getInboundSharedUserProfiles()
    {
        if (array_key_exists("inboundSharedUserProfiles", $this->_propDict)) {
           return $this->_propDict["inboundSharedUserProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundSharedUserProfiles
    * A collection of external Azure AD users whose profile data has been shared with the Azure AD tenant. Nullable.
    *
    * @param InboundSharedUserProfile[] $val The inboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setInboundSharedUserProfiles($val)
    {
        $this->_propDict["inboundSharedUserProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the onPremisesSynchronization
    * A container for on-premises directory synchronization functionalities that are available for the organization.
     *
     * @return array|null The onPremisesSynchronization
     */
    public function getOnPremisesSynchronization()
    {
        if (array_key_exists("onPremisesSynchronization", $this->_propDict)) {
           return $this->_propDict["onPremisesSynchronization"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSynchronization
    * A container for on-premises directory synchronization functionalities that are available for the organization.
    *
    * @param OnPremisesDirectorySynchronization[] $val The onPremisesSynchronization
    *
    * @return Directory
    */
    public function setOnPremisesSynchronization($val)
    {
        $this->_propDict["onPremisesSynchronization"] = $val;
        return $this;
    }


     /**
     * Gets the outboundSharedUserProfiles
     *
     * @return array|null The outboundSharedUserProfiles
     */
    public function getOutboundSharedUserProfiles()
    {
        if (array_key_exists("outboundSharedUserProfiles", $this->_propDict)) {
           return $this->_propDict["outboundSharedUserProfiles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundSharedUserProfiles
    *
    * @param OutboundSharedUserProfile[] $val The outboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setOutboundSharedUserProfiles($val)
    {
        $this->_propDict["outboundSharedUserProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the sharedEmailDomains
     *
     * @return array|null The sharedEmailDomains
     */
    public function getSharedEmailDomains()
    {
        if (array_key_exists("sharedEmailDomains", $this->_propDict)) {
           return $this->_propDict["sharedEmailDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharedEmailDomains
    *
    * @param SharedEmailDomain[] $val The sharedEmailDomains
    *
    * @return Directory
    */
    public function setSharedEmailDomains($val)
    {
        $this->_propDict["sharedEmailDomains"] = $val;
        return $this;
    }


     /**
     * Gets the subscriptions
    * List of commercial subscriptions that an organization has acquired.
     *
     * @return array|null The subscriptions
     */
    public function getSubscriptions()
    {
        if (array_key_exists("subscriptions", $this->_propDict)) {
           return $this->_propDict["subscriptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriptions
    * List of commercial subscriptions that an organization has acquired.
    *
    * @param CompanySubscription[] $val The subscriptions
    *
    * @return Directory
    */
    public function setSubscriptions($val)
    {
        $this->_propDict["subscriptions"] = $val;
        return $this;
    }


     /**
     * Gets the featureRolloutPolicies
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
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return Directory
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }

}

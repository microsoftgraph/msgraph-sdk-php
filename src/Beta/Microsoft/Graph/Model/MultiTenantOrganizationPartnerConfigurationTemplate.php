<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationPartnerConfigurationTemplate File
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
* MultiTenantOrganizationPartnerConfigurationTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationPartnerConfigurationTemplate extends Entity
{
    /**
    * Gets the automaticUserConsentSettings
    * Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
    *
    * @return InboundOutboundPolicyConfiguration|null The automaticUserConsentSettings
    */
    public function getAutomaticUserConsentSettings()
    {
        if (array_key_exists("automaticUserConsentSettings", $this->_propDict)) {
            if (is_a($this->_propDict["automaticUserConsentSettings"], "\Beta\Microsoft\Graph\Model\InboundOutboundPolicyConfiguration") || is_null($this->_propDict["automaticUserConsentSettings"])) {
                return $this->_propDict["automaticUserConsentSettings"];
            } else {
                $this->_propDict["automaticUserConsentSettings"] = new InboundOutboundPolicyConfiguration($this->_propDict["automaticUserConsentSettings"]);
                return $this->_propDict["automaticUserConsentSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticUserConsentSettings
    * Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
    *
    * @param InboundOutboundPolicyConfiguration $val The automaticUserConsentSettings
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setAutomaticUserConsentSettings($val)
    {
        $this->_propDict["automaticUserConsentSettings"] = $val;
        return $this;
    }

    /**
    * Gets the b2bCollaborationInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationInbound
    */
    public function getB2bCollaborationInbound()
    {
        if (array_key_exists("b2bCollaborationInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationInbound"])) {
                return $this->_propDict["b2bCollaborationInbound"];
            } else {
                $this->_propDict["b2bCollaborationInbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bCollaborationInbound"]);
                return $this->_propDict["b2bCollaborationInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bCollaborationInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationInbound
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setB2bCollaborationInbound($val)
    {
        $this->_propDict["b2bCollaborationInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bCollaborationOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bCollaborationOutbound
    */
    public function getB2bCollaborationOutbound()
    {
        if (array_key_exists("b2bCollaborationOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bCollaborationOutbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bCollaborationOutbound"])) {
                return $this->_propDict["b2bCollaborationOutbound"];
            } else {
                $this->_propDict["b2bCollaborationOutbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bCollaborationOutbound"]);
                return $this->_propDict["b2bCollaborationOutbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bCollaborationOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bCollaborationOutbound
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setB2bCollaborationOutbound($val)
    {
        $this->_propDict["b2bCollaborationOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectInbound
    */
    public function getB2bDirectConnectInbound()
    {
        if (array_key_exists("b2bDirectConnectInbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectInbound"])) {
                return $this->_propDict["b2bDirectConnectInbound"];
            } else {
                $this->_propDict["b2bDirectConnectInbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bDirectConnectInbound"]);
                return $this->_propDict["b2bDirectConnectInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bDirectConnectInbound
    * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectInbound
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setB2bDirectConnectInbound($val)
    {
        $this->_propDict["b2bDirectConnectInbound"] = $val;
        return $this;
    }

    /**
    * Gets the b2bDirectConnectOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
    *
    * @return CrossTenantAccessPolicyB2BSetting|null The b2bDirectConnectOutbound
    */
    public function getB2bDirectConnectOutbound()
    {
        if (array_key_exists("b2bDirectConnectOutbound", $this->_propDict)) {
            if (is_a($this->_propDict["b2bDirectConnectOutbound"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyB2BSetting") || is_null($this->_propDict["b2bDirectConnectOutbound"])) {
                return $this->_propDict["b2bDirectConnectOutbound"];
            } else {
                $this->_propDict["b2bDirectConnectOutbound"] = new CrossTenantAccessPolicyB2BSetting($this->_propDict["b2bDirectConnectOutbound"]);
                return $this->_propDict["b2bDirectConnectOutbound"];
            }
        }
        return null;
    }

    /**
    * Sets the b2bDirectConnectOutbound
    * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
    *
    * @param CrossTenantAccessPolicyB2BSetting $val The b2bDirectConnectOutbound
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setB2bDirectConnectOutbound($val)
    {
        $this->_propDict["b2bDirectConnectOutbound"] = $val;
        return $this;
    }

    /**
    * Gets the inboundTrust
    * Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
    *
    * @return CrossTenantAccessPolicyInboundTrust|null The inboundTrust
    */
    public function getInboundTrust()
    {
        if (array_key_exists("inboundTrust", $this->_propDict)) {
            if (is_a($this->_propDict["inboundTrust"], "\Beta\Microsoft\Graph\Model\CrossTenantAccessPolicyInboundTrust") || is_null($this->_propDict["inboundTrust"])) {
                return $this->_propDict["inboundTrust"];
            } else {
                $this->_propDict["inboundTrust"] = new CrossTenantAccessPolicyInboundTrust($this->_propDict["inboundTrust"]);
                return $this->_propDict["inboundTrust"];
            }
        }
        return null;
    }

    /**
    * Sets the inboundTrust
    * Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
    *
    * @param CrossTenantAccessPolicyInboundTrust $val The inboundTrust
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setInboundTrust($val)
    {
        $this->_propDict["inboundTrust"] = $val;
        return $this;
    }

    /**
    * Gets the templateApplicationLevel
    * Specifies whether the template will be applied to partner configuration settings of certain tenants. The possible values are: none, newPartners, existingPartners, unknownFutureValue. You can also specify multiple values like newPartners,existingPartners (default). none indicates the template isn't applied to any new or existing partner tenants. newPartners indicates the template is applied to new partner tenants. existingPartners indicates the template is applied to existing partner tenants, those who already had partner-specific partner configurations in place.
    *
    * @return TemplateApplicationLevel|null The templateApplicationLevel
    */
    public function getTemplateApplicationLevel()
    {
        if (array_key_exists("templateApplicationLevel", $this->_propDict)) {
            if (is_a($this->_propDict["templateApplicationLevel"], "\Beta\Microsoft\Graph\Model\TemplateApplicationLevel") || is_null($this->_propDict["templateApplicationLevel"])) {
                return $this->_propDict["templateApplicationLevel"];
            } else {
                $this->_propDict["templateApplicationLevel"] = new TemplateApplicationLevel($this->_propDict["templateApplicationLevel"]);
                return $this->_propDict["templateApplicationLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the templateApplicationLevel
    * Specifies whether the template will be applied to partner configuration settings of certain tenants. The possible values are: none, newPartners, existingPartners, unknownFutureValue. You can also specify multiple values like newPartners,existingPartners (default). none indicates the template isn't applied to any new or existing partner tenants. newPartners indicates the template is applied to new partner tenants. existingPartners indicates the template is applied to existing partner tenants, those who already had partner-specific partner configurations in place.
    *
    * @param TemplateApplicationLevel $val The templateApplicationLevel
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate
    */
    public function setTemplateApplicationLevel($val)
    {
        $this->_propDict["templateApplicationLevel"] = $val;
        return $this;
    }

}

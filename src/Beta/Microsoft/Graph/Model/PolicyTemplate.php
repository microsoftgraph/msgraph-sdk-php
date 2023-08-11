<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicyTemplate File
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
* PolicyTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicyTemplate extends Entity
{
    /**
    * Gets the multiTenantOrganizationIdentitySynchronization
    *
    * @return MultiTenantOrganizationIdentitySyncPolicyTemplate|null The multiTenantOrganizationIdentitySynchronization
    */
    public function getMultiTenantOrganizationIdentitySynchronization()
    {
        if (array_key_exists("multiTenantOrganizationIdentitySynchronization", $this->_propDict)) {
            if (is_a($this->_propDict["multiTenantOrganizationIdentitySynchronization"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationIdentitySyncPolicyTemplate") || is_null($this->_propDict["multiTenantOrganizationIdentitySynchronization"])) {
                return $this->_propDict["multiTenantOrganizationIdentitySynchronization"];
            } else {
                $this->_propDict["multiTenantOrganizationIdentitySynchronization"] = new MultiTenantOrganizationIdentitySyncPolicyTemplate($this->_propDict["multiTenantOrganizationIdentitySynchronization"]);
                return $this->_propDict["multiTenantOrganizationIdentitySynchronization"];
            }
        }
        return null;
    }

    /**
    * Sets the multiTenantOrganizationIdentitySynchronization
    *
    * @param MultiTenantOrganizationIdentitySyncPolicyTemplate $val The multiTenantOrganizationIdentitySynchronization
    *
    * @return PolicyTemplate
    */
    public function setMultiTenantOrganizationIdentitySynchronization($val)
    {
        $this->_propDict["multiTenantOrganizationIdentitySynchronization"] = $val;
        return $this;
    }

    /**
    * Gets the multiTenantOrganizationPartnerConfiguration
    *
    * @return MultiTenantOrganizationPartnerConfigurationTemplate|null The multiTenantOrganizationPartnerConfiguration
    */
    public function getMultiTenantOrganizationPartnerConfiguration()
    {
        if (array_key_exists("multiTenantOrganizationPartnerConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["multiTenantOrganizationPartnerConfiguration"], "\Beta\Microsoft\Graph\Model\MultiTenantOrganizationPartnerConfigurationTemplate") || is_null($this->_propDict["multiTenantOrganizationPartnerConfiguration"])) {
                return $this->_propDict["multiTenantOrganizationPartnerConfiguration"];
            } else {
                $this->_propDict["multiTenantOrganizationPartnerConfiguration"] = new MultiTenantOrganizationPartnerConfigurationTemplate($this->_propDict["multiTenantOrganizationPartnerConfiguration"]);
                return $this->_propDict["multiTenantOrganizationPartnerConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the multiTenantOrganizationPartnerConfiguration
    *
    * @param MultiTenantOrganizationPartnerConfigurationTemplate $val The multiTenantOrganizationPartnerConfiguration
    *
    * @return PolicyTemplate
    */
    public function setMultiTenantOrganizationPartnerConfiguration($val)
    {
        $this->_propDict["multiTenantOrganizationPartnerConfiguration"] = $val;
        return $this;
    }

}

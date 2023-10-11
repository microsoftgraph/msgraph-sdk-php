<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MultiTenantOrganizationIdentitySyncPolicyTemplate File
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
* MultiTenantOrganizationIdentitySyncPolicyTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MultiTenantOrganizationIdentitySyncPolicyTemplate extends Entity
{
    /**
    * Gets the templateApplicationLevel
    * Specifies whether the template will be applied to user synchronization settings of certain tenants. The possible values are: none, newPartners, existingPartners, unknownFutureValue. You can also specify multiple values like newPartners,existingPartners (default). none indicates the template isn't applied to any new or existing partner tenants. newPartners indicates the template is applied to new partner tenants. existingPartners indicates the template is applied to existing partner tenants, those who already had partner-specific user synchronization settings in place.
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
    * Specifies whether the template will be applied to user synchronization settings of certain tenants. The possible values are: none, newPartners, existingPartners, unknownFutureValue. You can also specify multiple values like newPartners,existingPartners (default). none indicates the template isn't applied to any new or existing partner tenants. newPartners indicates the template is applied to new partner tenants. existingPartners indicates the template is applied to existing partner tenants, those who already had partner-specific user synchronization settings in place.
    *
    * @param TemplateApplicationLevel $val The templateApplicationLevel
    *
    * @return MultiTenantOrganizationIdentitySyncPolicyTemplate
    */
    public function setTemplateApplicationLevel($val)
    {
        $this->_propDict["templateApplicationLevel"] = $val;
        return $this;
    }

    /**
    * Gets the userSyncInbound
    * Defines whether users can be synchronized from the partner tenant.
    *
    * @return CrossTenantUserSyncInbound|null The userSyncInbound
    */
    public function getUserSyncInbound()
    {
        if (array_key_exists("userSyncInbound", $this->_propDict)) {
            if (is_a($this->_propDict["userSyncInbound"], "\Beta\Microsoft\Graph\Model\CrossTenantUserSyncInbound") || is_null($this->_propDict["userSyncInbound"])) {
                return $this->_propDict["userSyncInbound"];
            } else {
                $this->_propDict["userSyncInbound"] = new CrossTenantUserSyncInbound($this->_propDict["userSyncInbound"]);
                return $this->_propDict["userSyncInbound"];
            }
        }
        return null;
    }

    /**
    * Sets the userSyncInbound
    * Defines whether users can be synchronized from the partner tenant.
    *
    * @param CrossTenantUserSyncInbound $val The userSyncInbound
    *
    * @return MultiTenantOrganizationIdentitySyncPolicyTemplate
    */
    public function setUserSyncInbound($val)
    {
        $this->_propDict["userSyncInbound"] = $val;
        return $this;
    }

}

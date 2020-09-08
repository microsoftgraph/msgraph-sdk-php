<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagementSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* EntitlementManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagementSettings extends Entity
{
    /**
    * Gets the daysUntilExternalUserDeletedAfterBlocked
    *
    * @return int The daysUntilExternalUserDeletedAfterBlocked
    */
    public function getDaysUntilExternalUserDeletedAfterBlocked()
    {
        if (array_key_exists("daysUntilExternalUserDeletedAfterBlocked", $this->_propDict)) {
            return $this->_propDict["daysUntilExternalUserDeletedAfterBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the daysUntilExternalUserDeletedAfterBlocked
    *
    * @param int $val The daysUntilExternalUserDeletedAfterBlocked
    *
    * @return EntitlementManagementSettings
    */
    public function setDaysUntilExternalUserDeletedAfterBlocked($val)
    {
        $this->_propDict["daysUntilExternalUserDeletedAfterBlocked"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the externalUserLifecycleAction
    *
    * @return string The externalUserLifecycleAction
    */
    public function getExternalUserLifecycleAction()
    {
        if (array_key_exists("externalUserLifecycleAction", $this->_propDict)) {
            return $this->_propDict["externalUserLifecycleAction"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalUserLifecycleAction
    *
    * @param string $val The externalUserLifecycleAction
    *
    * @return EntitlementManagementSettings
    */
    public function setExternalUserLifecycleAction($val)
    {
        $this->_propDict["externalUserLifecycleAction"] = $val;
        return $this;
    }
    
}
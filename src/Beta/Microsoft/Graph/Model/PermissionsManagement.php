<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsManagement File
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
* PermissionsManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsManagement extends Entity
{

     /**
     * Gets the permissionsRequestChanges
     *
     * @return array|null The permissionsRequestChanges
     */
    public function getPermissionsRequestChanges()
    {
        if (array_key_exists("permissionsRequestChanges", $this->_propDict)) {
           return $this->_propDict["permissionsRequestChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permissionsRequestChanges
    *
    * @param PermissionsRequestChange[] $val The permissionsRequestChanges
    *
    * @return PermissionsManagement
    */
    public function setPermissionsRequestChanges($val)
    {
        $this->_propDict["permissionsRequestChanges"] = $val;
        return $this;
    }


     /**
     * Gets the scheduledPermissionsRequests
     *
     * @return array|null The scheduledPermissionsRequests
     */
    public function getScheduledPermissionsRequests()
    {
        if (array_key_exists("scheduledPermissionsRequests", $this->_propDict)) {
           return $this->_propDict["scheduledPermissionsRequests"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scheduledPermissionsRequests
    *
    * @param ScheduledPermissionsRequest[] $val The scheduledPermissionsRequests
    *
    * @return PermissionsManagement
    */
    public function setScheduledPermissionsRequests($val)
    {
        $this->_propDict["scheduledPermissionsRequests"] = $val;
        return $this;
    }

}

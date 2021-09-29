<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InstanceResourceAccess File
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
* InstanceResourceAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InstanceResourceAccess extends Entity
{

    /**
    * Gets the permissions
    *
    * @return ResourcePermission[]|null The permissions
    */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict) && !is_null($this->_propDict["permissions"])) {
       
            if (count($this->_propDict['permissions']) > 0 && is_a($this->_propDict['permissions'][0], 'ResourcePermission')) {
               return $this->_propDict['permissions'];
            }
            $permissions = [];
            foreach ($this->_propDict['permissions'] as $singleValue) {
               $permissions []= new ResourcePermission($singleValue);
            }
            $this->_propDict['permissions'] = $permissions;
            return $this->_propDict['permissions'];
            }
        return null;
    }

    /**
    * Sets the permissions
    *
    * @param ResourcePermission[] $val The value to assign to the permissions
    *
    * @return InstanceResourceAccess The InstanceResourceAccess
    */
    public function setPermissions($val)
    {
        $this->_propDict["permissions"] = $val;
         return $this;
    }
    /**
    * Gets the resourceAppId
    *
    * @return string|null The resourceAppId
    */
    public function getResourceAppId()
    {
        if (array_key_exists("resourceAppId", $this->_propDict)) {
            return $this->_propDict["resourceAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAppId
    *
    * @param string $val The value of the resourceAppId
    *
    * @return InstanceResourceAccess
    */
    public function setResourceAppId($val)
    {
        $this->_propDict["resourceAppId"] = $val;
        return $this;
    }
}

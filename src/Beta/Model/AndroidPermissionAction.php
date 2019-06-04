<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidPermissionAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* AndroidPermissionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidPermissionAction extends Entity
{
    /**
    * Gets the permission
    * Android permission string, defined in the official Android documentation.  Example 'android.permission.READ_CONTACTS'.
    *
    * @return string The permission
    */
    public function getPermission()
    {
        if (array_key_exists("permission", $this->_propDict)) {
            return $this->_propDict["permission"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permission
    * Android permission string, defined in the official Android documentation.  Example 'android.permission.READ_CONTACTS'.
    *
    * @param string $val The value of the permission
    *
    * @return AndroidPermissionAction
    */
    public function setPermission($val)
    {
        $this->_propDict["permission"] = $val;
        return $this;
    }

    /**
    * Gets the action
    * Type of Android permission action.
    *
    * @return AndroidPermissionActionType The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "Microsoft\Graph\Beta\Model\AndroidPermissionActionType")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new AndroidPermissionActionType($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * Type of Android permission action.
    *
    * @param AndroidPermissionActionType $val The value to assign to the action
    *
    * @return AndroidPermissionAction The AndroidPermissionAction
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
}

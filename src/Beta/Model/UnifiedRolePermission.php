<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRolePermission File
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
* UnifiedRolePermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UnifiedRolePermission extends Entity
{
    /**
    * Gets the allowedResourceActions
    *
    * @return string The allowedResourceActions
    */
    public function getAllowedResourceActions()
    {
        if (array_key_exists("allowedResourceActions", $this->_propDict)) {
            return $this->_propDict["allowedResourceActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedResourceActions
    *
    * @param string $val The value of the allowedResourceActions
    *
    * @return UnifiedRolePermission
    */
    public function setAllowedResourceActions($val)
    {
        $this->_propDict["allowedResourceActions"] = $val;
        return $this;
    }
    /**
    * Gets the condition
    *
    * @return string The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            return $this->_propDict["condition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the condition
    *
    * @param string $val The value of the condition
    *
    * @return UnifiedRolePermission
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }
}

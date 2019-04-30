<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SchedulingGroup File
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
* SchedulingGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SchedulingGroup extends ChangeTrackedEntity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return SchedulingGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return SchedulingGroup
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userIds
    *
    * @return string The userIds
    */
    public function getUserIds()
    {
        if (array_key_exists("userIds", $this->_propDict)) {
            return $this->_propDict["userIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userIds
    *
    * @param string $val The userIds
    *
    * @return SchedulingGroup
    */
    public function setUserIds($val)
    {
        $this->_propDict["userIds"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetResource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* TargetResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TargetResource extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return TargetResource
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
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
    * @param string $val The value of the displayName
    *
    * @return TargetResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return TargetResource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return TargetResource
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the groupType
    *
    * @return GroupType The groupType
    */
    public function getGroupType()
    {
        if (array_key_exists("groupType", $this->_propDict)) {
            if (is_a($this->_propDict["groupType"], "Microsoft\Graph\Model\GroupType")) {
                return $this->_propDict["groupType"];
            } else {
                $this->_propDict["groupType"] = new GroupType($this->_propDict["groupType"]);
                return $this->_propDict["groupType"];
            }
        }
        return null;
    }

    /**
    * Sets the groupType
    *
    * @param GroupType $val The value to assign to the groupType
    *
    * @return TargetResource The TargetResource
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
         return $this;
    }

    /**
    * Gets the modifiedProperties
    *
    * @return ModifiedProperty The modifiedProperties
    */
    public function getModifiedProperties()
    {
        if (array_key_exists("modifiedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedProperties"], "Microsoft\Graph\Model\ModifiedProperty")) {
                return $this->_propDict["modifiedProperties"];
            } else {
                $this->_propDict["modifiedProperties"] = new ModifiedProperty($this->_propDict["modifiedProperties"]);
                return $this->_propDict["modifiedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedProperties
    *
    * @param ModifiedProperty $val The value to assign to the modifiedProperties
    *
    * @return TargetResource The TargetResource
    */
    public function setModifiedProperties($val)
    {
        $this->_propDict["modifiedProperties"] = $val;
         return $this;
    }
}

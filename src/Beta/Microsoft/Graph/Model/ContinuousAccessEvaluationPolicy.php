<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContinuousAccessEvaluationPolicy File
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
* ContinuousAccessEvaluationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContinuousAccessEvaluationPolicy extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @param string $val The displayName
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groups
    *
    * @return string The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            return $this->_propDict["groups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groups
    *
    * @param string $val The groups
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the users
    *
    * @return string The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            return $this->_propDict["users"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the users
    *
    * @param string $val The users
    *
    * @return ContinuousAccessEvaluationPolicy
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
        return $this;
    }
    
}
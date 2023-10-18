<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* User File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* User class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class User extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
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
    * @return User
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastAccessDateTime
    *
    * @return \DateTime|null The lastAccessDateTime
    */
    public function getLastAccessDateTime()
    {
        if (array_key_exists("lastAccessDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastAccessDateTime"], "\DateTime") || is_null($this->_propDict["lastAccessDateTime"])) {
                return $this->_propDict["lastAccessDateTime"];
            } else {
                $this->_propDict["lastAccessDateTime"] = new \DateTime($this->_propDict["lastAccessDateTime"]);
                return $this->_propDict["lastAccessDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastAccessDateTime
    *
    * @param \DateTime $val The value to assign to the lastAccessDateTime
    *
    * @return User The User
    */
    public function setLastAccessDateTime($val)
    {
        $this->_propDict["lastAccessDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the trafficType
    *
    * @return TrafficType|null The trafficType
    */
    public function getTrafficType()
    {
        if (array_key_exists("trafficType", $this->_propDict)) {
            if (is_a($this->_propDict["trafficType"], "\Beta\Microsoft\Graph\Networkaccess\Model\TrafficType") || is_null($this->_propDict["trafficType"])) {
                return $this->_propDict["trafficType"];
            } else {
                $this->_propDict["trafficType"] = new TrafficType($this->_propDict["trafficType"]);
                return $this->_propDict["trafficType"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficType
    *
    * @param TrafficType $val The value to assign to the trafficType
    *
    * @return User The User
    */
    public function setTrafficType($val)
    {
        $this->_propDict["trafficType"] = $val;
         return $this;
    }
    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return User
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
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
    * @return User
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    *
    * @return UserType|null The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Networkaccess\Model\UserType") || is_null($this->_propDict["userType"])) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new UserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    *
    * @param UserType $val The value to assign to the userType
    *
    * @return User The User
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
         return $this;
    }
}

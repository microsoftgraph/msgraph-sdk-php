<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityActionState File
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
* SecurityActionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityActionState extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The value of the appId
    *
    * @return SecurityActionState
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return OperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\OperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new OperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param OperationStatus $val The value to assign to the status
    *
    * @return SecurityActionState The SecurityActionState
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the updatedDateTime
    *
    * @return \DateTime The updatedDateTime
    */
    public function getUpdatedDateTime()
    {
        if (array_key_exists("updatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["updatedDateTime"], "\DateTime")) {
                return $this->_propDict["updatedDateTime"];
            } else {
                $this->_propDict["updatedDateTime"] = new \DateTime($this->_propDict["updatedDateTime"]);
                return $this->_propDict["updatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updatedDateTime
    *
    * @param \DateTime $val The value to assign to the updatedDateTime
    *
    * @return SecurityActionState The SecurityActionState
    */
    public function setUpdatedDateTime($val)
    {
        $this->_propDict["updatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the user
    *
    * @return string The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            return $this->_propDict["user"];
        } else {
            return null;
        }
    }

    /**
    * Sets the user
    *
    * @param string $val The value of the user
    *
    * @return SecurityActionState
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
}

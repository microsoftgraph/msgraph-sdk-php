<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedAppleDeviceUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SharedAppleDeviceUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SharedAppleDeviceUser extends Entity
{
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
    * @return SharedAppleDeviceUser
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the dataToSync
    *
    * @return bool The dataToSync
    */
    public function getDataToSync()
    {
        if (array_key_exists("dataToSync", $this->_propDict)) {
            return $this->_propDict["dataToSync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataToSync
    *
    * @param bool $val The value of the dataToSync
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataToSync($val)
    {
        $this->_propDict["dataToSync"] = $val;
        return $this;
    }
    /**
    * Gets the dataQuota
    *
    * @return int The dataQuota
    */
    public function getDataQuota()
    {
        if (array_key_exists("dataQuota", $this->_propDict)) {
            return $this->_propDict["dataQuota"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataQuota
    *
    * @param int $val The value of the dataQuota
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataQuota($val)
    {
        $this->_propDict["dataQuota"] = $val;
        return $this;
    }
    /**
    * Gets the dataUsed
    *
    * @return int The dataUsed
    */
    public function getDataUsed()
    {
        if (array_key_exists("dataUsed", $this->_propDict)) {
            return $this->_propDict["dataUsed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataUsed
    *
    * @param int $val The value of the dataUsed
    *
    * @return SharedAppleDeviceUser
    */
    public function setDataUsed($val)
    {
        $this->_propDict["dataUsed"] = $val;
        return $this;
    }
}

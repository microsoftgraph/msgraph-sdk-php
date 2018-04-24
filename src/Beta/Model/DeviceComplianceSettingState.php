<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceSettingState File
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
* DeviceComplianceSettingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceComplianceSettingState extends Entity
{
    /**
    * Gets the platformType
    *
    * @return DeviceType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "Microsoft\Graph\Beta\Model\DeviceType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new DeviceType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    *
    * @param DeviceType $val The platformType
    *
    * @return DeviceComplianceSettingState
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the setting
    *
    * @return string The setting
    */
    public function getSetting()
    {
        if (array_key_exists("setting", $this->_propDict)) {
            return $this->_propDict["setting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the setting
    *
    * @param string $val The setting
    *
    * @return DeviceComplianceSettingState
    */
    public function setSetting($val)
    {
        $this->_propDict["setting"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingName
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    *
    * @param string $val The settingName
    *
    * @return DeviceComplianceSettingState
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    *
    * @param string $val The deviceId
    *
    * @return DeviceComplianceSettingState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    *
    * @param string $val The deviceName
    *
    * @return DeviceComplianceSettingState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
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
    * @param string $val The userId
    *
    * @return DeviceComplianceSettingState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userEmail
    *
    * @return string The userEmail
    */
    public function getUserEmail()
    {
        if (array_key_exists("userEmail", $this->_propDict)) {
            return $this->_propDict["userEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userEmail
    *
    * @param string $val The userEmail
    *
    * @return DeviceComplianceSettingState
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    *
    * @param string $val The userName
    *
    * @return DeviceComplianceSettingState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
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
    * @param string $val The userPrincipalName
    *
    * @return DeviceComplianceSettingState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceModel
    *
    * @return string The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceModel
    *
    * @param string $val The deviceModel
    *
    * @return DeviceComplianceSettingState
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return ComplianceStatus The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\ComplianceStatus")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ComplianceStatus($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param ComplianceStatus $val The state
    *
    * @return DeviceComplianceSettingState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the complianceGracePeriodExpirationDateTime
    *
    * @return \DateTime The complianceGracePeriodExpirationDateTime
    */
    public function getComplianceGracePeriodExpirationDateTime()
    {
        if (array_key_exists("complianceGracePeriodExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceGracePeriodExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            } else {
                $this->_propDict["complianceGracePeriodExpirationDateTime"] = new \DateTime($this->_propDict["complianceGracePeriodExpirationDateTime"]);
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceGracePeriodExpirationDateTime
    *
    * @param \DateTime $val The complianceGracePeriodExpirationDateTime
    *
    * @return DeviceComplianceSettingState
    */
    public function setComplianceGracePeriodExpirationDateTime($val)
    {
        $this->_propDict["complianceGracePeriodExpirationDateTime"] = $val;
        return $this;
    }
    
}
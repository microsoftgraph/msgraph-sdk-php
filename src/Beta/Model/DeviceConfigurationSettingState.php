<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationSettingState File
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
* DeviceConfigurationSettingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationSettingState extends Entity
{
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
    * @param string $val The value of the setting
    *
    * @return DeviceConfigurationSettingState
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
    * @param string $val The value of the settingName
    *
    * @return DeviceConfigurationSettingState
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    /**
    * Gets the instanceDisplayName
    *
    * @return string The instanceDisplayName
    */
    public function getInstanceDisplayName()
    {
        if (array_key_exists("instanceDisplayName", $this->_propDict)) {
            return $this->_propDict["instanceDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceDisplayName
    *
    * @param string $val The value of the instanceDisplayName
    *
    * @return DeviceConfigurationSettingState
    */
    public function setInstanceDisplayName($val)
    {
        $this->_propDict["instanceDisplayName"] = $val;
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
    * @param ComplianceStatus $val The value to assign to the state
    *
    * @return DeviceConfigurationSettingState The DeviceConfigurationSettingState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
    /**
    * Gets the errorCode
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    *
    * @param int $val The value of the errorCode
    *
    * @return DeviceConfigurationSettingState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    /**
    * Gets the errorDescription
    *
    * @return string The errorDescription
    */
    public function getErrorDescription()
    {
        if (array_key_exists("errorDescription", $this->_propDict)) {
            return $this->_propDict["errorDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorDescription
    *
    * @param string $val The value of the errorDescription
    *
    * @return DeviceConfigurationSettingState
    */
    public function setErrorDescription($val)
    {
        $this->_propDict["errorDescription"] = $val;
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
    * @param string $val The value of the userId
    *
    * @return DeviceConfigurationSettingState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
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
    * @param string $val The value of the userName
    *
    * @return DeviceConfigurationSettingState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
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
    * @param string $val The value of the userEmail
    *
    * @return DeviceConfigurationSettingState
    */
    public function setUserEmail($val)
    {
        $this->_propDict["userEmail"] = $val;
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
    * @return DeviceConfigurationSettingState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the sources
    *
    * @return SettingSource The sources
    */
    public function getSources()
    {
        if (array_key_exists("sources", $this->_propDict)) {
            if (is_a($this->_propDict["sources"], "Microsoft\Graph\Beta\Model\SettingSource")) {
                return $this->_propDict["sources"];
            } else {
                $this->_propDict["sources"] = new SettingSource($this->_propDict["sources"]);
                return $this->_propDict["sources"];
            }
        }
        return null;
    }

    /**
    * Sets the sources
    *
    * @param SettingSource $val The value to assign to the sources
    *
    * @return DeviceConfigurationSettingState The DeviceConfigurationSettingState
    */
    public function setSources($val)
    {
        $this->_propDict["sources"] = $val;
         return $this;
    }
    /**
    * Gets the currentValue
    *
    * @return string The currentValue
    */
    public function getCurrentValue()
    {
        if (array_key_exists("currentValue", $this->_propDict)) {
            return $this->_propDict["currentValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currentValue
    *
    * @param string $val The value of the currentValue
    *
    * @return DeviceConfigurationSettingState
    */
    public function setCurrentValue($val)
    {
        $this->_propDict["currentValue"] = $val;
        return $this;
    }
}

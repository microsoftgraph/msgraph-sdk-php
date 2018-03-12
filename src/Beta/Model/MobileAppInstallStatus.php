<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppInstallStatus File
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
* MobileAppInstallStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MobileAppInstallStatus extends Entity
{
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
    * @return MobileAppInstallStatus
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
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
    * @return MobileAppInstallStatus
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return MobileAppInstallStatus
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the mobileAppInstallStatusValue
    *
    * @return ResultantAppState The mobileAppInstallStatusValue
    */
    public function getMobileAppInstallStatusValue()
    {
        if (array_key_exists("mobileAppInstallStatusValue", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppInstallStatusValue"], "Microsoft\Graph\Beta\Model\ResultantAppState")) {
                return $this->_propDict["mobileAppInstallStatusValue"];
            } else {
                $this->_propDict["mobileAppInstallStatusValue"] = new ResultantAppState($this->_propDict["mobileAppInstallStatusValue"]);
                return $this->_propDict["mobileAppInstallStatusValue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mobileAppInstallStatusValue
    *
    * @param ResultantAppState $val The mobileAppInstallStatusValue
    *
    * @return MobileAppInstallStatus
    */
    public function setMobileAppInstallStatusValue($val)
    {
        $this->_propDict["mobileAppInstallStatusValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the installState
    *
    * @return ResultantAppState The installState
    */
    public function getInstallState()
    {
        if (array_key_exists("installState", $this->_propDict)) {
            if (is_a($this->_propDict["installState"], "Microsoft\Graph\Beta\Model\ResultantAppState")) {
                return $this->_propDict["installState"];
            } else {
                $this->_propDict["installState"] = new ResultantAppState($this->_propDict["installState"]);
                return $this->_propDict["installState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installState
    *
    * @param ResultantAppState $val The installState
    *
    * @return MobileAppInstallStatus
    */
    public function setInstallState($val)
    {
        $this->_propDict["installState"] = $val;
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
    * @param int $val The errorCode
    *
    * @return MobileAppInstallStatus
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the osVersion
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    *
    * @param string $val The osVersion
    *
    * @return MobileAppInstallStatus
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osDescription
    *
    * @return string The osDescription
    */
    public function getOsDescription()
    {
        if (array_key_exists("osDescription", $this->_propDict)) {
            return $this->_propDict["osDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osDescription
    *
    * @param string $val The osDescription
    *
    * @return MobileAppInstallStatus
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
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
    * @return MobileAppInstallStatus
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
    * @return MobileAppInstallStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayVersion
    *
    * @return string The displayVersion
    */
    public function getDisplayVersion()
    {
        if (array_key_exists("displayVersion", $this->_propDict)) {
            return $this->_propDict["displayVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayVersion
    *
    * @param string $val The displayVersion
    *
    * @return MobileAppInstallStatus
    */
    public function setDisplayVersion($val)
    {
        $this->_propDict["displayVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the app
    *
    * @return MobileApp The app
    */
    public function getApp()
    {
        if (array_key_exists("app", $this->_propDict)) {
            if (is_a($this->_propDict["app"], "Microsoft\Graph\Beta\Model\MobileApp")) {
                return $this->_propDict["app"];
            } else {
                $this->_propDict["app"] = new MobileApp($this->_propDict["app"]);
                return $this->_propDict["app"];
            }
        }
        return null;
    }
    
    /**
    * Sets the app
    *
    * @param MobileApp $val The app
    *
    * @return MobileAppInstallStatus
    */
    public function setApp($val)
    {
        $this->_propDict["app"] = $val;
        return $this;
    }
    
}
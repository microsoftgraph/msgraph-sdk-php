<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedPCConfiguration File
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
* SharedPCConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SharedPCConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountManagerPolicy
    *
    * @return SharedPCAccountManagerPolicy The accountManagerPolicy
    */
    public function getAccountManagerPolicy()
    {
        if (array_key_exists("accountManagerPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accountManagerPolicy"], "Microsoft\Graph\Model\SharedPCAccountManagerPolicy")) {
                return $this->_propDict["accountManagerPolicy"];
            } else {
                $this->_propDict["accountManagerPolicy"] = new SharedPCAccountManagerPolicy($this->_propDict["accountManagerPolicy"]);
                return $this->_propDict["accountManagerPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accountManagerPolicy
    *
    * @param SharedPCAccountManagerPolicy $val The accountManagerPolicy
    *
    * @return SharedPCConfiguration
    */
    public function setAccountManagerPolicy($val)
    {
        $this->_propDict["accountManagerPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedAccounts
    *
    * @return SharedPCAllowedAccountType The allowedAccounts
    */
    public function getAllowedAccounts()
    {
        if (array_key_exists("allowedAccounts", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAccounts"], "Microsoft\Graph\Model\SharedPCAllowedAccountType")) {
                return $this->_propDict["allowedAccounts"];
            } else {
                $this->_propDict["allowedAccounts"] = new SharedPCAllowedAccountType($this->_propDict["allowedAccounts"]);
                return $this->_propDict["allowedAccounts"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedAccounts
    *
    * @param SharedPCAllowedAccountType $val The allowedAccounts
    *
    * @return SharedPCConfiguration
    */
    public function setAllowedAccounts($val)
    {
        $this->_propDict["allowedAccounts"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowLocalStorage
    *
    * @return bool The allowLocalStorage
    */
    public function getAllowLocalStorage()
    {
        if (array_key_exists("allowLocalStorage", $this->_propDict)) {
            return $this->_propDict["allowLocalStorage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowLocalStorage
    *
    * @param bool $val The allowLocalStorage
    *
    * @return SharedPCConfiguration
    */
    public function setAllowLocalStorage($val)
    {
        $this->_propDict["allowLocalStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAccountManager
    *
    * @return bool The disableAccountManager
    */
    public function getDisableAccountManager()
    {
        if (array_key_exists("disableAccountManager", $this->_propDict)) {
            return $this->_propDict["disableAccountManager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAccountManager
    *
    * @param bool $val The disableAccountManager
    *
    * @return SharedPCConfiguration
    */
    public function setDisableAccountManager($val)
    {
        $this->_propDict["disableAccountManager"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableEduPolicies
    *
    * @return bool The disableEduPolicies
    */
    public function getDisableEduPolicies()
    {
        if (array_key_exists("disableEduPolicies", $this->_propDict)) {
            return $this->_propDict["disableEduPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableEduPolicies
    *
    * @param bool $val The disableEduPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setDisableEduPolicies($val)
    {
        $this->_propDict["disableEduPolicies"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disablePowerPolicies
    *
    * @return bool The disablePowerPolicies
    */
    public function getDisablePowerPolicies()
    {
        if (array_key_exists("disablePowerPolicies", $this->_propDict)) {
            return $this->_propDict["disablePowerPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disablePowerPolicies
    *
    * @param bool $val The disablePowerPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setDisablePowerPolicies($val)
    {
        $this->_propDict["disablePowerPolicies"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableSignInOnResume
    *
    * @return bool The disableSignInOnResume
    */
    public function getDisableSignInOnResume()
    {
        if (array_key_exists("disableSignInOnResume", $this->_propDict)) {
            return $this->_propDict["disableSignInOnResume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableSignInOnResume
    *
    * @param bool $val The disableSignInOnResume
    *
    * @return SharedPCConfiguration
    */
    public function setDisableSignInOnResume($val)
    {
        $this->_propDict["disableSignInOnResume"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    *
    * @param bool $val The enabled
    *
    * @return SharedPCConfiguration
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the idleTimeBeforeSleepInSeconds
    *
    * @return int The idleTimeBeforeSleepInSeconds
    */
    public function getIdleTimeBeforeSleepInSeconds()
    {
        if (array_key_exists("idleTimeBeforeSleepInSeconds", $this->_propDict)) {
            return $this->_propDict["idleTimeBeforeSleepInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the idleTimeBeforeSleepInSeconds
    *
    * @param int $val The idleTimeBeforeSleepInSeconds
    *
    * @return SharedPCConfiguration
    */
    public function setIdleTimeBeforeSleepInSeconds($val)
    {
        $this->_propDict["idleTimeBeforeSleepInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the kioskAppDisplayName
    *
    * @return string The kioskAppDisplayName
    */
    public function getKioskAppDisplayName()
    {
        if (array_key_exists("kioskAppDisplayName", $this->_propDict)) {
            return $this->_propDict["kioskAppDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskAppDisplayName
    *
    * @param string $val The kioskAppDisplayName
    *
    * @return SharedPCConfiguration
    */
    public function setKioskAppDisplayName($val)
    {
        $this->_propDict["kioskAppDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskAppUserModelId
    *
    * @return string The kioskAppUserModelId
    */
    public function getKioskAppUserModelId()
    {
        if (array_key_exists("kioskAppUserModelId", $this->_propDict)) {
            return $this->_propDict["kioskAppUserModelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskAppUserModelId
    *
    * @param string $val The kioskAppUserModelId
    *
    * @return SharedPCConfiguration
    */
    public function setKioskAppUserModelId($val)
    {
        $this->_propDict["kioskAppUserModelId"] = $val;
        return $this;
    }
    
    /**
    * Gets the maintenanceStartTime
    *
    * @return TimeOfDay The maintenanceStartTime
    */
    public function getMaintenanceStartTime()
    {
        if (array_key_exists("maintenanceStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["maintenanceStartTime"], "Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["maintenanceStartTime"];
            } else {
                $this->_propDict["maintenanceStartTime"] = new TimeOfDay($this->_propDict["maintenanceStartTime"]);
                return $this->_propDict["maintenanceStartTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the maintenanceStartTime
    *
    * @param TimeOfDay $val The maintenanceStartTime
    *
    * @return SharedPCConfiguration
    */
    public function setMaintenanceStartTime($val)
    {
        $this->_propDict["maintenanceStartTime"] = $val;
        return $this;
    }
    
}
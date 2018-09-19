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
namespace Microsoft\Graph\Beta\Model;

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
            if (is_a($this->_propDict["accountManagerPolicy"], "Microsoft\Graph\Beta\Model\SharedPCAccountManagerPolicy")) {
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
            if (is_a($this->_propDict["allowedAccounts"], "Microsoft\Graph\Beta\Model\SharedPCAllowedAccountType")) {
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
    * Gets the localStorage
    *
    * @return Enablement The localStorage
    */
    public function getLocalStorage()
    {
        if (array_key_exists("localStorage", $this->_propDict)) {
            if (is_a($this->_propDict["localStorage"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["localStorage"];
            } else {
                $this->_propDict["localStorage"] = new Enablement($this->_propDict["localStorage"]);
                return $this->_propDict["localStorage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localStorage
    *
    * @param Enablement $val The localStorage
    *
    * @return SharedPCConfiguration
    */
    public function setLocalStorage($val)
    {
        $this->_propDict["localStorage"] = $val;
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
    * Gets the setAccountManager
    *
    * @return Enablement The setAccountManager
    */
    public function getSetAccountManager()
    {
        if (array_key_exists("setAccountManager", $this->_propDict)) {
            if (is_a($this->_propDict["setAccountManager"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["setAccountManager"];
            } else {
                $this->_propDict["setAccountManager"] = new Enablement($this->_propDict["setAccountManager"]);
                return $this->_propDict["setAccountManager"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setAccountManager
    *
    * @param Enablement $val The setAccountManager
    *
    * @return SharedPCConfiguration
    */
    public function setSetAccountManager($val)
    {
        $this->_propDict["setAccountManager"] = $val;
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
    * Gets the setEduPolicies
    *
    * @return Enablement The setEduPolicies
    */
    public function getSetEduPolicies()
    {
        if (array_key_exists("setEduPolicies", $this->_propDict)) {
            if (is_a($this->_propDict["setEduPolicies"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["setEduPolicies"];
            } else {
                $this->_propDict["setEduPolicies"] = new Enablement($this->_propDict["setEduPolicies"]);
                return $this->_propDict["setEduPolicies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setEduPolicies
    *
    * @param Enablement $val The setEduPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setSetEduPolicies($val)
    {
        $this->_propDict["setEduPolicies"] = $val;
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
    * Gets the setPowerPolicies
    *
    * @return Enablement The setPowerPolicies
    */
    public function getSetPowerPolicies()
    {
        if (array_key_exists("setPowerPolicies", $this->_propDict)) {
            if (is_a($this->_propDict["setPowerPolicies"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["setPowerPolicies"];
            } else {
                $this->_propDict["setPowerPolicies"] = new Enablement($this->_propDict["setPowerPolicies"]);
                return $this->_propDict["setPowerPolicies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setPowerPolicies
    *
    * @param Enablement $val The setPowerPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setSetPowerPolicies($val)
    {
        $this->_propDict["setPowerPolicies"] = $val;
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
    * Gets the signInOnResume
    *
    * @return Enablement The signInOnResume
    */
    public function getSignInOnResume()
    {
        if (array_key_exists("signInOnResume", $this->_propDict)) {
            if (is_a($this->_propDict["signInOnResume"], "Microsoft\Graph\Beta\Model\Enablement")) {
                return $this->_propDict["signInOnResume"];
            } else {
                $this->_propDict["signInOnResume"] = new Enablement($this->_propDict["signInOnResume"]);
                return $this->_propDict["signInOnResume"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signInOnResume
    *
    * @param Enablement $val The signInOnResume
    *
    * @return SharedPCConfiguration
    */
    public function setSignInOnResume($val)
    {
        $this->_propDict["signInOnResume"] = $val;
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
            if (is_a($this->_propDict["maintenanceStartTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
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
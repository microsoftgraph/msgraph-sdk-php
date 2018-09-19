<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosManagedAppProtection File
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
* IosManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosManagedAppProtection extends TargetedManagedAppProtection
{
    /**
    * Gets the appDataEncryptionType
    *
    * @return ManagedAppDataEncryptionType The appDataEncryptionType
    */
    public function getAppDataEncryptionType()
    {
        if (array_key_exists("appDataEncryptionType", $this->_propDict)) {
            if (is_a($this->_propDict["appDataEncryptionType"], "Microsoft\Graph\Beta\Model\ManagedAppDataEncryptionType")) {
                return $this->_propDict["appDataEncryptionType"];
            } else {
                $this->_propDict["appDataEncryptionType"] = new ManagedAppDataEncryptionType($this->_propDict["appDataEncryptionType"]);
                return $this->_propDict["appDataEncryptionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appDataEncryptionType
    *
    * @param ManagedAppDataEncryptionType $val The appDataEncryptionType
    *
    * @return IosManagedAppProtection
    */
    public function setAppDataEncryptionType($val)
    {
        $this->_propDict["appDataEncryptionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumRequiredSdkVersion
    *
    * @return string The minimumRequiredSdkVersion
    */
    public function getMinimumRequiredSdkVersion()
    {
        if (array_key_exists("minimumRequiredSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredSdkVersion
    *
    * @param string $val The minimumRequiredSdkVersion
    *
    * @return IosManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployedAppCount
    *
    * @return int The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedAppCount
    *
    * @param int $val The deployedAppCount
    *
    * @return IosManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the faceIdBlocked
    *
    * @return bool The faceIdBlocked
    */
    public function getFaceIdBlocked()
    {
        if (array_key_exists("faceIdBlocked", $this->_propDict)) {
            return $this->_propDict["faceIdBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faceIdBlocked
    *
    * @param bool $val The faceIdBlocked
    *
    * @return IosManagedAppProtection
    */
    public function setFaceIdBlocked($val)
    {
        $this->_propDict["faceIdBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the exemptedAppProtocols
     *
     * @return array The exemptedAppProtocols
     */
    public function getExemptedAppProtocols()
    {
        if (array_key_exists("exemptedAppProtocols", $this->_propDict)) {
           return $this->_propDict["exemptedAppProtocols"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppProtocols
    *
    * @param KeyValuePair $val The exemptedAppProtocols
    *
    * @return IosManagedAppProtection
    */
    public function setExemptedAppProtocols($val)
    {
		$this->_propDict["exemptedAppProtocols"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipeSdkVersion
    *
    * @return string The minimumWipeSdkVersion
    */
    public function getMinimumWipeSdkVersion()
    {
        if (array_key_exists("minimumWipeSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeSdkVersion
    *
    * @param string $val The minimumWipeSdkVersion
    *
    * @return IosManagedAppProtection
    */
    public function setMinimumWipeSdkVersion($val)
    {
        $this->_propDict["minimumWipeSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedIosDeviceModels
    *
    * @return string The allowedIosDeviceModels
    */
    public function getAllowedIosDeviceModels()
    {
        if (array_key_exists("allowedIosDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedIosDeviceModels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedIosDeviceModels
    *
    * @param string $val The allowedIosDeviceModels
    *
    * @return IosManagedAppProtection
    */
    public function setAllowedIosDeviceModels($val)
    {
        $this->_propDict["allowedIosDeviceModels"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfIosDeviceModelNotAllowed
    *
    * @return ManagedAppRemediationAction The appActionIfIosDeviceModelNotAllowed
    */
    public function getAppActionIfIosDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfIosDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfIosDeviceModelNotAllowed"], "Microsoft\Graph\Beta\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfIosDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfIosDeviceModelNotAllowed
    *
    * @param ManagedAppRemediationAction $val The appActionIfIosDeviceModelNotAllowed
    *
    * @return IosManagedAppProtection
    */
    public function setAppActionIfIosDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the thirdPartyKeyboardsBlocked
    *
    * @return bool The thirdPartyKeyboardsBlocked
    */
    public function getThirdPartyKeyboardsBlocked()
    {
        if (array_key_exists("thirdPartyKeyboardsBlocked", $this->_propDict)) {
            return $this->_propDict["thirdPartyKeyboardsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thirdPartyKeyboardsBlocked
    *
    * @param bool $val The thirdPartyKeyboardsBlocked
    *
    * @return IosManagedAppProtection
    */
    public function setThirdPartyKeyboardsBlocked($val)
    {
        $this->_propDict["thirdPartyKeyboardsBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the filterOpenInToOnlyManagedApps
    *
    * @return bool The filterOpenInToOnlyManagedApps
    */
    public function getFilterOpenInToOnlyManagedApps()
    {
        if (array_key_exists("filterOpenInToOnlyManagedApps", $this->_propDict)) {
            return $this->_propDict["filterOpenInToOnlyManagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filterOpenInToOnlyManagedApps
    *
    * @param bool $val The filterOpenInToOnlyManagedApps
    *
    * @return IosManagedAppProtection
    */
    public function setFilterOpenInToOnlyManagedApps($val)
    {
        $this->_propDict["filterOpenInToOnlyManagedApps"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the apps
     *
     * @return array The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the apps
    *
    * @param ManagedMobileApp $val The apps
    *
    * @return IosManagedAppProtection
    */
    public function setApps($val)
    {
		$this->_propDict["apps"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentSummary
    *
    * @return ManagedAppPolicyDeploymentSummary The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSummary"], "Microsoft\Graph\Beta\Model\ManagedAppPolicyDeploymentSummary")) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentSummary
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return IosManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}
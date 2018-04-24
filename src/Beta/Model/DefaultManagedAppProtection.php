<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefaultManagedAppProtection File
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
* DefaultManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DefaultManagedAppProtection extends ManagedAppProtection
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
    * @return DefaultManagedAppProtection
    */
    public function setAppDataEncryptionType($val)
    {
        $this->_propDict["appDataEncryptionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the screenCaptureBlocked
    *
    * @return bool The screenCaptureBlocked
    */
    public function getScreenCaptureBlocked()
    {
        if (array_key_exists("screenCaptureBlocked", $this->_propDict)) {
            return $this->_propDict["screenCaptureBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenCaptureBlocked
    *
    * @param bool $val The screenCaptureBlocked
    *
    * @return DefaultManagedAppProtection
    */
    public function setScreenCaptureBlocked($val)
    {
        $this->_propDict["screenCaptureBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the encryptAppData
    *
    * @return bool The encryptAppData
    */
    public function getEncryptAppData()
    {
        if (array_key_exists("encryptAppData", $this->_propDict)) {
            return $this->_propDict["encryptAppData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptAppData
    *
    * @param bool $val The encryptAppData
    *
    * @return DefaultManagedAppProtection
    */
    public function setEncryptAppData($val)
    {
        $this->_propDict["encryptAppData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return bool The disableAppEncryptionIfDeviceEncryptionIsEnabled
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled()
    {
        if (array_key_exists("disableAppEncryptionIfDeviceEncryptionIsEnabled", $this->_propDict)) {
            return $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @param bool $val The disableAppEncryptionIfDeviceEncryptionIsEnabled
    *
    * @return DefaultManagedAppProtection
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled($val)
    {
        $this->_propDict["disableAppEncryptionIfDeviceEncryptionIsEnabled"] = boolval($val);
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
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customSettings
     *
     * @return array The customSettings
     */
    public function getCustomSettings()
    {
        if (array_key_exists("customSettings", $this->_propDict)) {
           return $this->_propDict["customSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customSettings
    *
    * @param KeyValuePair $val The customSettings
    *
    * @return DefaultManagedAppProtection
    */
    public function setCustomSettings($val)
    {
		$this->_propDict["customSettings"] = $val;
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
    * @return DefaultManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredPatchVersion
    *
    * @return string The minimumRequiredPatchVersion
    */
    public function getMinimumRequiredPatchVersion()
    {
        if (array_key_exists("minimumRequiredPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredPatchVersion
    *
    * @param string $val The minimumRequiredPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumRequiredPatchVersion($val)
    {
        $this->_propDict["minimumRequiredPatchVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWarningPatchVersion
    *
    * @return string The minimumWarningPatchVersion
    */
    public function getMinimumWarningPatchVersion()
    {
        if (array_key_exists("minimumWarningPatchVersion", $this->_propDict)) {
            return $this->_propDict["minimumWarningPatchVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWarningPatchVersion
    *
    * @param string $val The minimumWarningPatchVersion
    *
    * @return DefaultManagedAppProtection
    */
    public function setMinimumWarningPatchVersion($val)
    {
        $this->_propDict["minimumWarningPatchVersion"] = $val;
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
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppProtocols($val)
    {
		$this->_propDict["exemptedAppProtocols"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exemptedAppPackages
     *
     * @return array The exemptedAppPackages
     */
    public function getExemptedAppPackages()
    {
        if (array_key_exists("exemptedAppPackages", $this->_propDict)) {
           return $this->_propDict["exemptedAppPackages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppPackages
    *
    * @param KeyValuePair $val The exemptedAppPackages
    *
    * @return DefaultManagedAppProtection
    */
    public function setExemptedAppPackages($val)
    {
		$this->_propDict["exemptedAppPackages"] = $val;
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
    * @return DefaultManagedAppProtection
    */
    public function setFaceIdBlocked($val)
    {
        $this->_propDict["faceIdBlocked"] = boolval($val);
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
    * @return DefaultManagedAppProtection
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
    * @return DefaultManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}
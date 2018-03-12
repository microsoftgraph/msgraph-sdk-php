<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepEnrollmentProfile File
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
* DepEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DepEnrollmentProfile extends EnrollmentProfile
{
    /**
    * Gets the supervisedModeEnabled
    *
    * @return bool The supervisedModeEnabled
    */
    public function getSupervisedModeEnabled()
    {
        if (array_key_exists("supervisedModeEnabled", $this->_propDict)) {
            return $this->_propDict["supervisedModeEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supervisedModeEnabled
    *
    * @param bool $val The supervisedModeEnabled
    *
    * @return DepEnrollmentProfile
    */
    public function setSupervisedModeEnabled($val)
    {
        $this->_propDict["supervisedModeEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportDepartment
    *
    * @return string The supportDepartment
    */
    public function getSupportDepartment()
    {
        if (array_key_exists("supportDepartment", $this->_propDict)) {
            return $this->_propDict["supportDepartment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportDepartment
    *
    * @param string $val The supportDepartment
    *
    * @return DepEnrollmentProfile
    */
    public function setSupportDepartment($val)
    {
        $this->_propDict["supportDepartment"] = $val;
        return $this;
    }
    
    /**
    * Gets the passCodeDisabled
    *
    * @return bool The passCodeDisabled
    */
    public function getPassCodeDisabled()
    {
        if (array_key_exists("passCodeDisabled", $this->_propDict)) {
            return $this->_propDict["passCodeDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passCodeDisabled
    *
    * @param bool $val The passCodeDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setPassCodeDisabled($val)
    {
        $this->_propDict["passCodeDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isMandatory
    *
    * @return bool The isMandatory
    */
    public function getIsMandatory()
    {
        if (array_key_exists("isMandatory", $this->_propDict)) {
            return $this->_propDict["isMandatory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMandatory
    *
    * @param bool $val The isMandatory
    *
    * @return DepEnrollmentProfile
    */
    public function setIsMandatory($val)
    {
        $this->_propDict["isMandatory"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locationDisabled
    *
    * @return bool The locationDisabled
    */
    public function getLocationDisabled()
    {
        if (array_key_exists("locationDisabled", $this->_propDict)) {
            return $this->_propDict["locationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationDisabled
    *
    * @param bool $val The locationDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setLocationDisabled($val)
    {
        $this->_propDict["locationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportPhoneNumber
    *
    * @return string The supportPhoneNumber
    */
    public function getSupportPhoneNumber()
    {
        if (array_key_exists("supportPhoneNumber", $this->_propDict)) {
            return $this->_propDict["supportPhoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportPhoneNumber
    *
    * @param string $val The supportPhoneNumber
    *
    * @return DepEnrollmentProfile
    */
    public function setSupportPhoneNumber($val)
    {
        $this->_propDict["supportPhoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the iTunesPairingMode
    *
    * @return ITunesPairingMode The iTunesPairingMode
    */
    public function getITunesPairingMode()
    {
        if (array_key_exists("iTunesPairingMode", $this->_propDict)) {
            if (is_a($this->_propDict["iTunesPairingMode"], "Microsoft\Graph\Model\ITunesPairingMode")) {
                return $this->_propDict["iTunesPairingMode"];
            } else {
                $this->_propDict["iTunesPairingMode"] = new ITunesPairingMode($this->_propDict["iTunesPairingMode"]);
                return $this->_propDict["iTunesPairingMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iTunesPairingMode
    *
    * @param ITunesPairingMode $val The iTunesPairingMode
    *
    * @return DepEnrollmentProfile
    */
    public function setITunesPairingMode($val)
    {
        $this->_propDict["iTunesPairingMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileRemovalDisabled
    *
    * @return bool The profileRemovalDisabled
    */
    public function getProfileRemovalDisabled()
    {
        if (array_key_exists("profileRemovalDisabled", $this->_propDict)) {
            return $this->_propDict["profileRemovalDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileRemovalDisabled
    *
    * @param bool $val The profileRemovalDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setProfileRemovalDisabled($val)
    {
        $this->_propDict["profileRemovalDisabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the managementCertificates
     *
     * @return array The managementCertificates
     */
    public function getManagementCertificates()
    {
        if (array_key_exists("managementCertificates", $this->_propDict)) {
           return $this->_propDict["managementCertificates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementCertificates
    *
    * @param ManagementCertificateWithThumbprint $val The managementCertificates
    *
    * @return DepEnrollmentProfile
    */
    public function setManagementCertificates($val)
    {
		$this->_propDict["managementCertificates"] = $val;
        return $this;
    }
    
    /**
    * Gets the restoreBlocked
    *
    * @return bool The restoreBlocked
    */
    public function getRestoreBlocked()
    {
        if (array_key_exists("restoreBlocked", $this->_propDict)) {
            return $this->_propDict["restoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreBlocked
    *
    * @param bool $val The restoreBlocked
    *
    * @return DepEnrollmentProfile
    */
    public function setRestoreBlocked($val)
    {
        $this->_propDict["restoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restoreFromAndroidDisabled
    *
    * @return bool The restoreFromAndroidDisabled
    */
    public function getRestoreFromAndroidDisabled()
    {
        if (array_key_exists("restoreFromAndroidDisabled", $this->_propDict)) {
            return $this->_propDict["restoreFromAndroidDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreFromAndroidDisabled
    *
    * @param bool $val The restoreFromAndroidDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setRestoreFromAndroidDisabled($val)
    {
        $this->_propDict["restoreFromAndroidDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appleIdDisabled
    *
    * @return bool The appleIdDisabled
    */
    public function getAppleIdDisabled()
    {
        if (array_key_exists("appleIdDisabled", $this->_propDict)) {
            return $this->_propDict["appleIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdDisabled
    *
    * @param bool $val The appleIdDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setAppleIdDisabled($val)
    {
        $this->_propDict["appleIdDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the termsAndConditionsDisabled
    *
    * @return bool The termsAndConditionsDisabled
    */
    public function getTermsAndConditionsDisabled()
    {
        if (array_key_exists("termsAndConditionsDisabled", $this->_propDict)) {
            return $this->_propDict["termsAndConditionsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the termsAndConditionsDisabled
    *
    * @param bool $val The termsAndConditionsDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setTermsAndConditionsDisabled($val)
    {
        $this->_propDict["termsAndConditionsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the touchIdDisabled
    *
    * @return bool The touchIdDisabled
    */
    public function getTouchIdDisabled()
    {
        if (array_key_exists("touchIdDisabled", $this->_propDict)) {
            return $this->_propDict["touchIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the touchIdDisabled
    *
    * @param bool $val The touchIdDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setTouchIdDisabled($val)
    {
        $this->_propDict["touchIdDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applePayDisabled
    *
    * @return bool The applePayDisabled
    */
    public function getApplePayDisabled()
    {
        if (array_key_exists("applePayDisabled", $this->_propDict)) {
            return $this->_propDict["applePayDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applePayDisabled
    *
    * @param bool $val The applePayDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setApplePayDisabled($val)
    {
        $this->_propDict["applePayDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the zoomDisabled
    *
    * @return bool The zoomDisabled
    */
    public function getZoomDisabled()
    {
        if (array_key_exists("zoomDisabled", $this->_propDict)) {
            return $this->_propDict["zoomDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the zoomDisabled
    *
    * @param bool $val The zoomDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setZoomDisabled($val)
    {
        $this->_propDict["zoomDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriDisabled
    *
    * @return bool The siriDisabled
    */
    public function getSiriDisabled()
    {
        if (array_key_exists("siriDisabled", $this->_propDict)) {
            return $this->_propDict["siriDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriDisabled
    *
    * @param bool $val The siriDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setSiriDisabled($val)
    {
        $this->_propDict["siriDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the diagnosticsDisabled
    *
    * @return bool The diagnosticsDisabled
    */
    public function getDiagnosticsDisabled()
    {
        if (array_key_exists("diagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["diagnosticsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticsDisabled
    *
    * @param bool $val The diagnosticsDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setDiagnosticsDisabled($val)
    {
        $this->_propDict["diagnosticsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macOSRegistrationDisabled
    *
    * @return bool The macOSRegistrationDisabled
    */
    public function getMacOSRegistrationDisabled()
    {
        if (array_key_exists("macOSRegistrationDisabled", $this->_propDict)) {
            return $this->_propDict["macOSRegistrationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macOSRegistrationDisabled
    *
    * @param bool $val The macOSRegistrationDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setMacOSRegistrationDisabled($val)
    {
        $this->_propDict["macOSRegistrationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macOSFileVaultDisabled
    *
    * @return bool The macOSFileVaultDisabled
    */
    public function getMacOSFileVaultDisabled()
    {
        if (array_key_exists("macOSFileVaultDisabled", $this->_propDict)) {
            return $this->_propDict["macOSFileVaultDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macOSFileVaultDisabled
    *
    * @param bool $val The macOSFileVaultDisabled
    *
    * @return DepEnrollmentProfile
    */
    public function setMacOSFileVaultDisabled($val)
    {
        $this->_propDict["macOSFileVaultDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the awaitDeviceConfiguredConfirmation
    *
    * @return bool The awaitDeviceConfiguredConfirmation
    */
    public function getAwaitDeviceConfiguredConfirmation()
    {
        if (array_key_exists("awaitDeviceConfiguredConfirmation", $this->_propDict)) {
            return $this->_propDict["awaitDeviceConfiguredConfirmation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the awaitDeviceConfiguredConfirmation
    *
    * @param bool $val The awaitDeviceConfiguredConfirmation
    *
    * @return DepEnrollmentProfile
    */
    public function setAwaitDeviceConfiguredConfirmation($val)
    {
        $this->_propDict["awaitDeviceConfiguredConfirmation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sharedIPadMaximumUserCount
    *
    * @return int The sharedIPadMaximumUserCount
    */
    public function getSharedIPadMaximumUserCount()
    {
        if (array_key_exists("sharedIPadMaximumUserCount", $this->_propDict)) {
            return $this->_propDict["sharedIPadMaximumUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedIPadMaximumUserCount
    *
    * @param int $val The sharedIPadMaximumUserCount
    *
    * @return DepEnrollmentProfile
    */
    public function setSharedIPadMaximumUserCount($val)
    {
        $this->_propDict["sharedIPadMaximumUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enableSharedIPad
    *
    * @return bool The enableSharedIPad
    */
    public function getEnableSharedIPad()
    {
        if (array_key_exists("enableSharedIPad", $this->_propDict)) {
            return $this->_propDict["enableSharedIPad"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSharedIPad
    *
    * @param bool $val The enableSharedIPad
    *
    * @return DepEnrollmentProfile
    */
    public function setEnableSharedIPad($val)
    {
        $this->_propDict["enableSharedIPad"] = boolval($val);
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepEnrollmentBaseProfile File
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
* DepEnrollmentBaseProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DepEnrollmentBaseProfile extends EnrollmentProfile
{
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
    */
    public function setSupportPhoneNumber($val)
    {
        $this->_propDict["supportPhoneNumber"] = $val;
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
    * @return DepEnrollmentBaseProfile
    */
    public function setProfileRemovalDisabled($val)
    {
        $this->_propDict["profileRemovalDisabled"] = boolval($val);
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
    * @return DepEnrollmentBaseProfile
    */
    public function setRestoreBlocked($val)
    {
        $this->_propDict["restoreBlocked"] = boolval($val);
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
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
    * @return DepEnrollmentBaseProfile
    */
    public function setDiagnosticsDisabled($val)
    {
        $this->_propDict["diagnosticsDisabled"] = boolval($val);
        return $this;
    }
    
}
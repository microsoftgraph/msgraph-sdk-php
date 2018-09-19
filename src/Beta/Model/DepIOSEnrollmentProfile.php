<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepIOSEnrollmentProfile File
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
* DepIOSEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DepIOSEnrollmentProfile extends DepEnrollmentBaseProfile
{
    /**
    * Gets the iTunesPairingMode
    *
    * @return ITunesPairingMode The iTunesPairingMode
    */
    public function getITunesPairingMode()
    {
        if (array_key_exists("iTunesPairingMode", $this->_propDict)) {
            if (is_a($this->_propDict["iTunesPairingMode"], "Microsoft\Graph\Beta\Model\ITunesPairingMode")) {
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
    * @return DepIOSEnrollmentProfile
    */
    public function setITunesPairingMode($val)
    {
        $this->_propDict["iTunesPairingMode"] = $val;
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
    * @return DepIOSEnrollmentProfile
    */
    public function setManagementCertificates($val)
    {
		$this->_propDict["managementCertificates"] = $val;
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
    * @return DepIOSEnrollmentProfile
    */
    public function setRestoreFromAndroidDisabled($val)
    {
        $this->_propDict["restoreFromAndroidDisabled"] = boolval($val);
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
    * @return DepIOSEnrollmentProfile
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
    * @return DepIOSEnrollmentProfile
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
    * @return DepIOSEnrollmentProfile
    */
    public function setEnableSharedIPad($val)
    {
        $this->_propDict["enableSharedIPad"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the companyPortalVppTokenId
    *
    * @return string The companyPortalVppTokenId
    */
    public function getCompanyPortalVppTokenId()
    {
        if (array_key_exists("companyPortalVppTokenId", $this->_propDict)) {
            return $this->_propDict["companyPortalVppTokenId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyPortalVppTokenId
    *
    * @param string $val The companyPortalVppTokenId
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setCompanyPortalVppTokenId($val)
    {
        $this->_propDict["companyPortalVppTokenId"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableSingleAppEnrollmentMode
    *
    * @return bool The enableSingleAppEnrollmentMode
    */
    public function getEnableSingleAppEnrollmentMode()
    {
        if (array_key_exists("enableSingleAppEnrollmentMode", $this->_propDict)) {
            return $this->_propDict["enableSingleAppEnrollmentMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSingleAppEnrollmentMode
    *
    * @param bool $val The enableSingleAppEnrollmentMode
    *
    * @return DepIOSEnrollmentProfile
    */
    public function setEnableSingleAppEnrollmentMode($val)
    {
        $this->_propDict["enableSingleAppEnrollmentMode"] = boolval($val);
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepOnboardingSetting File
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
* DepOnboardingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DepOnboardingSetting extends Entity
{
    /**
    * Gets the appleIdentifier
    *
    * @return string The appleIdentifier
    */
    public function getAppleIdentifier()
    {
        if (array_key_exists("appleIdentifier", $this->_propDict)) {
            return $this->_propDict["appleIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdentifier
    *
    * @param string $val The appleIdentifier
    *
    * @return DepOnboardingSetting
    */
    public function setAppleIdentifier($val)
    {
        $this->_propDict["appleIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenExpirationDateTime
    *
    * @return \DateTime The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenExpirationDateTime
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSuccessfulSyncDateTime
    *
    * @return \DateTime The lastSuccessfulSyncDateTime
    */
    public function getLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("lastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["lastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["lastSuccessfulSyncDateTime"]);
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSuccessfulSyncDateTime
    *
    * @param \DateTime $val The lastSuccessfulSyncDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["lastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncTriggeredDateTime
    *
    * @return \DateTime The lastSyncTriggeredDateTime
    */
    public function getLastSyncTriggeredDateTime()
    {
        if (array_key_exists("lastSyncTriggeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncTriggeredDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncTriggeredDateTime"];
            } else {
                $this->_propDict["lastSyncTriggeredDateTime"] = new \DateTime($this->_propDict["lastSyncTriggeredDateTime"]);
                return $this->_propDict["lastSyncTriggeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncTriggeredDateTime
    *
    * @param \DateTime $val The lastSyncTriggeredDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncTriggeredDateTime($val)
    {
        $this->_propDict["lastSyncTriggeredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the shareTokenWithSchoolDataSyncService
    *
    * @return bool The shareTokenWithSchoolDataSyncService
    */
    public function getShareTokenWithSchoolDataSyncService()
    {
        if (array_key_exists("shareTokenWithSchoolDataSyncService", $this->_propDict)) {
            return $this->_propDict["shareTokenWithSchoolDataSyncService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shareTokenWithSchoolDataSyncService
    *
    * @param bool $val The shareTokenWithSchoolDataSyncService
    *
    * @return DepOnboardingSetting
    */
    public function setShareTokenWithSchoolDataSyncService($val)
    {
        $this->_propDict["shareTokenWithSchoolDataSyncService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastSyncErrorCode
    *
    * @return int The lastSyncErrorCode
    */
    public function getLastSyncErrorCode()
    {
        if (array_key_exists("lastSyncErrorCode", $this->_propDict)) {
            return $this->_propDict["lastSyncErrorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastSyncErrorCode
    *
    * @param int $val The lastSyncErrorCode
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncErrorCode($val)
    {
        $this->_propDict["lastSyncErrorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tokenType
    *
    * @return DepTokenType The tokenType
    */
    public function getTokenType()
    {
        if (array_key_exists("tokenType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenType"], "Microsoft\Graph\Beta\Model\DepTokenType")) {
                return $this->_propDict["tokenType"];
            } else {
                $this->_propDict["tokenType"] = new DepTokenType($this->_propDict["tokenType"]);
                return $this->_propDict["tokenType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenType
    *
    * @param DepTokenType $val The tokenType
    *
    * @return DepOnboardingSetting
    */
    public function setTokenType($val)
    {
        $this->_propDict["tokenType"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenName
    *
    * @return string The tokenName
    */
    public function getTokenName()
    {
        if (array_key_exists("tokenName", $this->_propDict)) {
            return $this->_propDict["tokenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenName
    *
    * @param string $val The tokenName
    *
    * @return DepOnboardingSetting
    */
    public function setTokenName($val)
    {
        $this->_propDict["tokenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the syncedDeviceCount
    *
    * @return int The syncedDeviceCount
    */
    public function getSyncedDeviceCount()
    {
        if (array_key_exists("syncedDeviceCount", $this->_propDict)) {
            return $this->_propDict["syncedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncedDeviceCount
    *
    * @param int $val The syncedDeviceCount
    *
    * @return DepOnboardingSetting
    */
    public function setSyncedDeviceCount($val)
    {
        $this->_propDict["syncedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the defaultProfileDisplayName
    *
    * @return string The defaultProfileDisplayName
    */
    public function getDefaultProfileDisplayName()
    {
        if (array_key_exists("defaultProfileDisplayName", $this->_propDict)) {
            return $this->_propDict["defaultProfileDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultProfileDisplayName
    *
    * @param string $val The defaultProfileDisplayName
    *
    * @return DepOnboardingSetting
    */
    public function setDefaultProfileDisplayName($val)
    {
        $this->_propDict["defaultProfileDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataSharingConsentGranted
    *
    * @return bool The dataSharingConsentGranted
    */
    public function getDataSharingConsentGranted()
    {
        if (array_key_exists("dataSharingConsentGranted", $this->_propDict)) {
            return $this->_propDict["dataSharingConsentGranted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataSharingConsentGranted
    *
    * @param bool $val The dataSharingConsentGranted
    *
    * @return DepOnboardingSetting
    */
    public function setDataSharingConsentGranted($val)
    {
        $this->_propDict["dataSharingConsentGranted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the defaultIosEnrollmentProfile
    *
    * @return DepIOSEnrollmentProfile The defaultIosEnrollmentProfile
    */
    public function getDefaultIosEnrollmentProfile()
    {
        if (array_key_exists("defaultIosEnrollmentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["defaultIosEnrollmentProfile"], "Microsoft\Graph\Beta\Model\DepIOSEnrollmentProfile")) {
                return $this->_propDict["defaultIosEnrollmentProfile"];
            } else {
                $this->_propDict["defaultIosEnrollmentProfile"] = new DepIOSEnrollmentProfile($this->_propDict["defaultIosEnrollmentProfile"]);
                return $this->_propDict["defaultIosEnrollmentProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultIosEnrollmentProfile
    *
    * @param DepIOSEnrollmentProfile $val The defaultIosEnrollmentProfile
    *
    * @return DepOnboardingSetting
    */
    public function setDefaultIosEnrollmentProfile($val)
    {
        $this->_propDict["defaultIosEnrollmentProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultMacOsEnrollmentProfile
    *
    * @return DepMacOSEnrollmentProfile The defaultMacOsEnrollmentProfile
    */
    public function getDefaultMacOsEnrollmentProfile()
    {
        if (array_key_exists("defaultMacOsEnrollmentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["defaultMacOsEnrollmentProfile"], "Microsoft\Graph\Beta\Model\DepMacOSEnrollmentProfile")) {
                return $this->_propDict["defaultMacOsEnrollmentProfile"];
            } else {
                $this->_propDict["defaultMacOsEnrollmentProfile"] = new DepMacOSEnrollmentProfile($this->_propDict["defaultMacOsEnrollmentProfile"]);
                return $this->_propDict["defaultMacOsEnrollmentProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultMacOsEnrollmentProfile
    *
    * @param DepMacOSEnrollmentProfile $val The defaultMacOsEnrollmentProfile
    *
    * @return DepOnboardingSetting
    */
    public function setDefaultMacOsEnrollmentProfile($val)
    {
        $this->_propDict["defaultMacOsEnrollmentProfile"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enrollmentProfiles
     *
     * @return array The enrollmentProfiles
     */
    public function getEnrollmentProfiles()
    {
        if (array_key_exists("enrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["enrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enrollmentProfiles
    *
    * @param EnrollmentProfile $val The enrollmentProfiles
    *
    * @return DepOnboardingSetting
    */
    public function setEnrollmentProfiles($val)
    {
		$this->_propDict["enrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedAppleDeviceIdentities
     *
     * @return array The importedAppleDeviceIdentities
     */
    public function getImportedAppleDeviceIdentities()
    {
        if (array_key_exists("importedAppleDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedAppleDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedAppleDeviceIdentities
    *
    * @param ImportedAppleDeviceIdentity $val The importedAppleDeviceIdentities
    *
    * @return DepOnboardingSetting
    */
    public function setImportedAppleDeviceIdentities($val)
    {
		$this->_propDict["importedAppleDeviceIdentities"] = $val;
        return $this;
    }
    
}
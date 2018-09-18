<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppManagement File
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
* DeviceAppManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceAppManagement extends Entity
{
    /**
    * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @return \DateTime The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabledForMicrosoftStoreForBusiness
    *
    * @return bool The isEnabledForMicrosoftStoreForBusiness
    */
    public function getIsEnabledForMicrosoftStoreForBusiness()
    {
        if (array_key_exists("isEnabledForMicrosoftStoreForBusiness", $this->_propDict)) {
            return $this->_propDict["isEnabledForMicrosoftStoreForBusiness"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabledForMicrosoftStoreForBusiness
    *
    * @param bool $val The isEnabledForMicrosoftStoreForBusiness
    *
    * @return DeviceAppManagement
    */
    public function setIsEnabledForMicrosoftStoreForBusiness($val)
    {
        $this->_propDict["isEnabledForMicrosoftStoreForBusiness"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLanguage
    *
    * @return string The microsoftStoreForBusinessLanguage
    */
    public function getMicrosoftStoreForBusinessLanguage()
    {
        if (array_key_exists("microsoftStoreForBusinessLanguage", $this->_propDict)) {
            return $this->_propDict["microsoftStoreForBusinessLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftStoreForBusinessLanguage
    *
    * @param string $val The microsoftStoreForBusinessLanguage
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLanguage($val)
    {
        $this->_propDict["microsoftStoreForBusinessLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @return \DateTime The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastCompletedApplicationSyncTime", $this->_propDict)) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsManagementApp
    *
    * @return WindowsManagementApp The windowsManagementApp
    */
    public function getWindowsManagementApp()
    {
        if (array_key_exists("windowsManagementApp", $this->_propDict)) {
            if (is_a($this->_propDict["windowsManagementApp"], "Microsoft\Graph\Beta\Model\WindowsManagementApp")) {
                return $this->_propDict["windowsManagementApp"];
            } else {
                $this->_propDict["windowsManagementApp"] = new WindowsManagementApp($this->_propDict["windowsManagementApp"]);
                return $this->_propDict["windowsManagementApp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsManagementApp
    *
    * @param WindowsManagementApp $val The windowsManagementApp
    *
    * @return DeviceAppManagement
    */
    public function setWindowsManagementApp($val)
    {
        $this->_propDict["windowsManagementApp"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileApps
     *
     * @return array The mobileApps
     */
    public function getMobileApps()
    {
        if (array_key_exists("mobileApps", $this->_propDict)) {
           return $this->_propDict["mobileApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileApps
    *
    * @param MobileApp $val The mobileApps
    *
    * @return DeviceAppManagement
    */
    public function setMobileApps($val)
    {
		$this->_propDict["mobileApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppCategories
     *
     * @return array The mobileAppCategories
     */
    public function getMobileAppCategories()
    {
        if (array_key_exists("mobileAppCategories", $this->_propDict)) {
           return $this->_propDict["mobileAppCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppCategories
    *
    * @param MobileAppCategory $val The mobileAppCategories
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppCategories($val)
    {
		$this->_propDict["mobileAppCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseCodeSigningCertificates
     *
     * @return array The enterpriseCodeSigningCertificates
     */
    public function getEnterpriseCodeSigningCertificates()
    {
        if (array_key_exists("enterpriseCodeSigningCertificates", $this->_propDict)) {
           return $this->_propDict["enterpriseCodeSigningCertificates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enterpriseCodeSigningCertificates
    *
    * @param EnterpriseCodeSigningCertificate $val The enterpriseCodeSigningCertificates
    *
    * @return DeviceAppManagement
    */
    public function setEnterpriseCodeSigningCertificates($val)
    {
		$this->_propDict["enterpriseCodeSigningCertificates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosLobAppProvisioningConfigurations
     *
     * @return array The iosLobAppProvisioningConfigurations
     */
    public function getIosLobAppProvisioningConfigurations()
    {
        if (array_key_exists("iosLobAppProvisioningConfigurations", $this->_propDict)) {
           return $this->_propDict["iosLobAppProvisioningConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosLobAppProvisioningConfigurations
    *
    * @param IosLobAppProvisioningConfiguration $val The iosLobAppProvisioningConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setIosLobAppProvisioningConfigurations($val)
    {
		$this->_propDict["iosLobAppProvisioningConfigurations"] = $val;
        return $this;
    }
    
    /**
    * Gets the symantecCodeSigningCertificate
    *
    * @return SymantecCodeSigningCertificate The symantecCodeSigningCertificate
    */
    public function getSymantecCodeSigningCertificate()
    {
        if (array_key_exists("symantecCodeSigningCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["symantecCodeSigningCertificate"], "Microsoft\Graph\Beta\Model\SymantecCodeSigningCertificate")) {
                return $this->_propDict["symantecCodeSigningCertificate"];
            } else {
                $this->_propDict["symantecCodeSigningCertificate"] = new SymantecCodeSigningCertificate($this->_propDict["symantecCodeSigningCertificate"]);
                return $this->_propDict["symantecCodeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the symantecCodeSigningCertificate
    *
    * @param SymantecCodeSigningCertificate $val The symantecCodeSigningCertificate
    *
    * @return DeviceAppManagement
    */
    public function setSymantecCodeSigningCertificate($val)
    {
        $this->_propDict["symantecCodeSigningCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppConfigurations
     *
     * @return array The mobileAppConfigurations
     */
    public function getMobileAppConfigurations()
    {
        if (array_key_exists("mobileAppConfigurations", $this->_propDict)) {
           return $this->_propDict["mobileAppConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppConfigurations
    *
    * @param ManagedDeviceMobileAppConfiguration $val The mobileAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppConfigurations($val)
    {
		$this->_propDict["mobileAppConfigurations"] = $val;
        return $this;
    }
    

     /** 

     * Gets the sideLoadingKeys
     *
     * @return array The sideLoadingKeys
     */
    public function getSideLoadingKeys()
    {
        if (array_key_exists("sideLoadingKeys", $this->_propDict)) {
           return $this->_propDict["sideLoadingKeys"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sideLoadingKeys
    *
    * @param SideLoadingKey $val The sideLoadingKeys
    *
    * @return DeviceAppManagement
    */
    public function setSideLoadingKeys($val)
    {
		$this->_propDict["sideLoadingKeys"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vppTokens
     * List of Vpp tokens for this organization.
     *
     * @return array The vppTokens
     */
    public function getVppTokens()
    {
        if (array_key_exists("vppTokens", $this->_propDict)) {
           return $this->_propDict["vppTokens"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the vppTokens
    *
    * @param VppToken $val The vppTokens
    *
    * @return DeviceAppManagement
    */
    public function setVppTokens($val)
    {
		$this->_propDict["vppTokens"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppPolicies
     *
     * @return array The managedAppPolicies
     */
    public function getManagedAppPolicies()
    {
        if (array_key_exists("managedAppPolicies", $this->_propDict)) {
           return $this->_propDict["managedAppPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppPolicies
    *
    * @param ManagedAppPolicy $val The managedAppPolicies
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppPolicies($val)
    {
		$this->_propDict["managedAppPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosManagedAppProtections
     *
     * @return array The iosManagedAppProtections
     */
    public function getIosManagedAppProtections()
    {
        if (array_key_exists("iosManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["iosManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosManagedAppProtections
    *
    * @param IosManagedAppProtection $val The iosManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setIosManagedAppProtections($val)
    {
		$this->_propDict["iosManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidManagedAppProtections
     *
     * @return array The androidManagedAppProtections
     */
    public function getAndroidManagedAppProtections()
    {
        if (array_key_exists("androidManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["androidManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidManagedAppProtections
    *
    * @param AndroidManagedAppProtection $val The androidManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setAndroidManagedAppProtections($val)
    {
		$this->_propDict["androidManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the defaultManagedAppProtections
     *
     * @return array The defaultManagedAppProtections
     */
    public function getDefaultManagedAppProtections()
    {
        if (array_key_exists("defaultManagedAppProtections", $this->_propDict)) {
           return $this->_propDict["defaultManagedAppProtections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the defaultManagedAppProtections
    *
    * @param DefaultManagedAppProtection $val The defaultManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setDefaultManagedAppProtections($val)
    {
		$this->_propDict["defaultManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetedManagedAppConfigurations
     *
     * @return array The targetedManagedAppConfigurations
     */
    public function getTargetedManagedAppConfigurations()
    {
        if (array_key_exists("targetedManagedAppConfigurations", $this->_propDict)) {
           return $this->_propDict["targetedManagedAppConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetedManagedAppConfigurations
    *
    * @param TargetedManagedAppConfiguration $val The targetedManagedAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setTargetedManagedAppConfigurations($val)
    {
		$this->_propDict["targetedManagedAppConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mdmWindowsInformationProtectionPolicies
     *
     * @return array The mdmWindowsInformationProtectionPolicies
     */
    public function getMdmWindowsInformationProtectionPolicies()
    {
        if (array_key_exists("mdmWindowsInformationProtectionPolicies", $this->_propDict)) {
           return $this->_propDict["mdmWindowsInformationProtectionPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mdmWindowsInformationProtectionPolicies
    *
    * @param MdmWindowsInformationProtectionPolicy $val The mdmWindowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setMdmWindowsInformationProtectionPolicies($val)
    {
		$this->_propDict["mdmWindowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionPolicies
     *
     * @return array The windowsInformationProtectionPolicies
     */
    public function getWindowsInformationProtectionPolicies()
    {
        if (array_key_exists("windowsInformationProtectionPolicies", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionPolicies
    *
    * @param WindowsInformationProtectionPolicy $val The windowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionPolicies($val)
    {
		$this->_propDict["windowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppRegistrations
     *
     * @return array The managedAppRegistrations
     */
    public function getManagedAppRegistrations()
    {
        if (array_key_exists("managedAppRegistrations", $this->_propDict)) {
           return $this->_propDict["managedAppRegistrations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppRegistrations
    *
    * @param ManagedAppRegistration $val The managedAppRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppRegistrations($val)
    {
		$this->_propDict["managedAppRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppStatuses
     *
     * @return array The managedAppStatuses
     */
    public function getManagedAppStatuses()
    {
        if (array_key_exists("managedAppStatuses", $this->_propDict)) {
           return $this->_propDict["managedAppStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedAppStatuses
    *
    * @param ManagedAppStatus $val The managedAppStatuses
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppStatuses($val)
    {
		$this->_propDict["managedAppStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBooks
     *
     * @return array The managedEBooks
     */
    public function getManagedEBooks()
    {
        if (array_key_exists("managedEBooks", $this->_propDict)) {
           return $this->_propDict["managedEBooks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedEBooks
    *
    * @param ManagedEBook $val The managedEBooks
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBooks($val)
    {
		$this->_propDict["managedEBooks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBookCategories
     *
     * @return array The managedEBookCategories
     */
    public function getManagedEBookCategories()
    {
        if (array_key_exists("managedEBookCategories", $this->_propDict)) {
           return $this->_propDict["managedEBookCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedEBookCategories
    *
    * @param ManagedEBookCategory $val The managedEBookCategories
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBookCategories($val)
    {
		$this->_propDict["managedEBookCategories"] = $val;
        return $this;
    }
    
}
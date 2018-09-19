<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagement File
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
* DeviceManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagement extends Entity
{
    /**
    * Gets the subscriptionState
    *
    * @return DeviceManagementSubscriptionState The subscriptionState
    */
    public function getSubscriptionState()
    {
        if (array_key_exists("subscriptionState", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptionState"], "Microsoft\Graph\Beta\Model\DeviceManagementSubscriptionState")) {
                return $this->_propDict["subscriptionState"];
            } else {
                $this->_propDict["subscriptionState"] = new DeviceManagementSubscriptionState($this->_propDict["subscriptionState"]);
                return $this->_propDict["subscriptionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptionState
    *
    * @param DeviceManagementSubscriptionState $val The subscriptionState
    *
    * @return DeviceManagement
    */
    public function setSubscriptionState($val)
    {
        $this->_propDict["subscriptionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptions
    *
    * @return DeviceManagementSubscriptions The subscriptions
    */
    public function getSubscriptions()
    {
        if (array_key_exists("subscriptions", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptions"], "Microsoft\Graph\Beta\Model\DeviceManagementSubscriptions")) {
                return $this->_propDict["subscriptions"];
            } else {
                $this->_propDict["subscriptions"] = new DeviceManagementSubscriptions($this->_propDict["subscriptions"]);
                return $this->_propDict["subscriptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptions
    *
    * @param DeviceManagementSubscriptions $val The subscriptions
    *
    * @return DeviceManagement
    */
    public function setSubscriptions($val)
    {
        $this->_propDict["subscriptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceCleanupSettings
    *
    * @return ManagedDeviceCleanupSettings The managedDeviceCleanupSettings
    */
    public function getManagedDeviceCleanupSettings()
    {
        if (array_key_exists("managedDeviceCleanupSettings", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceCleanupSettings"], "Microsoft\Graph\Beta\Model\ManagedDeviceCleanupSettings")) {
                return $this->_propDict["managedDeviceCleanupSettings"];
            } else {
                $this->_propDict["managedDeviceCleanupSettings"] = new ManagedDeviceCleanupSettings($this->_propDict["managedDeviceCleanupSettings"]);
                return $this->_propDict["managedDeviceCleanupSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceCleanupSettings
    *
    * @param ManagedDeviceCleanupSettings $val The managedDeviceCleanupSettings
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceCleanupSettings($val)
    {
        $this->_propDict["managedDeviceCleanupSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminConsent
    *
    * @return AdminConsent The adminConsent
    */
    public function getAdminConsent()
    {
        if (array_key_exists("adminConsent", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsent"], "Microsoft\Graph\Beta\Model\AdminConsent")) {
                return $this->_propDict["adminConsent"];
            } else {
                $this->_propDict["adminConsent"] = new AdminConsent($this->_propDict["adminConsent"]);
                return $this->_propDict["adminConsent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the adminConsent
    *
    * @param AdminConsent $val The adminConsent
    *
    * @return DeviceManagement
    */
    public function setAdminConsent($val)
    {
        $this->_propDict["adminConsent"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceProtectionOverview
    *
    * @return DeviceProtectionOverview The deviceProtectionOverview
    */
    public function getDeviceProtectionOverview()
    {
        if (array_key_exists("deviceProtectionOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceProtectionOverview"], "Microsoft\Graph\Beta\Model\DeviceProtectionOverview")) {
                return $this->_propDict["deviceProtectionOverview"];
            } else {
                $this->_propDict["deviceProtectionOverview"] = new DeviceProtectionOverview($this->_propDict["deviceProtectionOverview"]);
                return $this->_propDict["deviceProtectionOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceProtectionOverview
    *
    * @param DeviceProtectionOverview $val The deviceProtectionOverview
    *
    * @return DeviceManagement
    */
    public function setDeviceProtectionOverview($val)
    {
        $this->_propDict["deviceProtectionOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsMalwareOverview
    *
    * @return WindowsMalwareOverview The windowsMalwareOverview
    */
    public function getWindowsMalwareOverview()
    {
        if (array_key_exists("windowsMalwareOverview", $this->_propDict)) {
            if (is_a($this->_propDict["windowsMalwareOverview"], "Microsoft\Graph\Beta\Model\WindowsMalwareOverview")) {
                return $this->_propDict["windowsMalwareOverview"];
            } else {
                $this->_propDict["windowsMalwareOverview"] = new WindowsMalwareOverview($this->_propDict["windowsMalwareOverview"]);
                return $this->_propDict["windowsMalwareOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsMalwareOverview
    *
    * @param WindowsMalwareOverview $val The windowsMalwareOverview
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareOverview($val)
    {
        $this->_propDict["windowsMalwareOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountMoveCompletionDateTime
    *
    * @return \DateTime The accountMoveCompletionDateTime
    */
    public function getAccountMoveCompletionDateTime()
    {
        if (array_key_exists("accountMoveCompletionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["accountMoveCompletionDateTime"], "\DateTime")) {
                return $this->_propDict["accountMoveCompletionDateTime"];
            } else {
                $this->_propDict["accountMoveCompletionDateTime"] = new \DateTime($this->_propDict["accountMoveCompletionDateTime"]);
                return $this->_propDict["accountMoveCompletionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accountMoveCompletionDateTime
    *
    * @param \DateTime $val The accountMoveCompletionDateTime
    *
    * @return DeviceManagement
    */
    public function setAccountMoveCompletionDateTime($val)
    {
        $this->_propDict["accountMoveCompletionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return DeviceManagementSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Beta\Model\DeviceManagementSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new DeviceManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param DeviceManagementSettings $val The settings
    *
    * @return DeviceManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximumDepTokens
    *
    * @return int The maximumDepTokens
    */
    public function getMaximumDepTokens()
    {
        if (array_key_exists("maximumDepTokens", $this->_propDict)) {
            return $this->_propDict["maximumDepTokens"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumDepTokens
    *
    * @param int $val The maximumDepTokens
    *
    * @return DeviceManagement
    */
    public function setMaximumDepTokens($val)
    {
        $this->_propDict["maximumDepTokens"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the intuneAccountId
    *
    * @return string The intuneAccountId
    */
    public function getIntuneAccountId()
    {
        if (array_key_exists("intuneAccountId", $this->_propDict)) {
            return $this->_propDict["intuneAccountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneAccountId
    *
    * @param string $val The intuneAccountId
    *
    * @return DeviceManagement
    */
    public function setIntuneAccountId($val)
    {
        $this->_propDict["intuneAccountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneBrand
    *
    * @return IntuneBrand The intuneBrand
    */
    public function getIntuneBrand()
    {
        if (array_key_exists("intuneBrand", $this->_propDict)) {
            if (is_a($this->_propDict["intuneBrand"], "Microsoft\Graph\Beta\Model\IntuneBrand")) {
                return $this->_propDict["intuneBrand"];
            } else {
                $this->_propDict["intuneBrand"] = new IntuneBrand($this->_propDict["intuneBrand"]);
                return $this->_propDict["intuneBrand"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intuneBrand
    *
    * @param IntuneBrand $val The intuneBrand
    *
    * @return DeviceManagement
    */
    public function setIntuneBrand($val)
    {
        $this->_propDict["intuneBrand"] = $val;
        return $this;
    }
    

     /** 
     * Gets the termsAndConditions
     *
     * @return array The termsAndConditions
     */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
           return $this->_propDict["termsAndConditions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the termsAndConditions
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return DeviceManagement
    */
    public function setTermsAndConditions($val)
    {
		$this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidForWorkSettings
    *
    * @return AndroidForWorkSettings The androidForWorkSettings
    */
    public function getAndroidForWorkSettings()
    {
        if (array_key_exists("androidForWorkSettings", $this->_propDict)) {
            if (is_a($this->_propDict["androidForWorkSettings"], "Microsoft\Graph\Beta\Model\AndroidForWorkSettings")) {
                return $this->_propDict["androidForWorkSettings"];
            } else {
                $this->_propDict["androidForWorkSettings"] = new AndroidForWorkSettings($this->_propDict["androidForWorkSettings"]);
                return $this->_propDict["androidForWorkSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidForWorkSettings
    *
    * @param AndroidForWorkSettings $val The androidForWorkSettings
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkSettings($val)
    {
        $this->_propDict["androidForWorkSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkAppConfigurationSchemas
     *
     * @return array The androidForWorkAppConfigurationSchemas
     */
    public function getAndroidForWorkAppConfigurationSchemas()
    {
        if (array_key_exists("androidForWorkAppConfigurationSchemas", $this->_propDict)) {
           return $this->_propDict["androidForWorkAppConfigurationSchemas"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidForWorkAppConfigurationSchemas
    *
    * @param AndroidForWorkAppConfigurationSchema $val The androidForWorkAppConfigurationSchemas
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkAppConfigurationSchemas($val)
    {
		$this->_propDict["androidForWorkAppConfigurationSchemas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkEnrollmentProfiles
     *
     * @return array The androidForWorkEnrollmentProfiles
     */
    public function getAndroidForWorkEnrollmentProfiles()
    {
        if (array_key_exists("androidForWorkEnrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["androidForWorkEnrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidForWorkEnrollmentProfiles
    *
    * @param AndroidForWorkEnrollmentProfile $val The androidForWorkEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkEnrollmentProfiles($val)
    {
		$this->_propDict["androidForWorkEnrollmentProfiles"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidManagedStoreAccountEnterpriseSettings
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings The androidManagedStoreAccountEnterpriseSettings
    */
    public function getAndroidManagedStoreAccountEnterpriseSettings()
    {
        if (array_key_exists("androidManagedStoreAccountEnterpriseSettings", $this->_propDict)) {
            if (is_a($this->_propDict["androidManagedStoreAccountEnterpriseSettings"], "Microsoft\Graph\Beta\Model\AndroidManagedStoreAccountEnterpriseSettings")) {
                return $this->_propDict["androidManagedStoreAccountEnterpriseSettings"];
            } else {
                $this->_propDict["androidManagedStoreAccountEnterpriseSettings"] = new AndroidManagedStoreAccountEnterpriseSettings($this->_propDict["androidManagedStoreAccountEnterpriseSettings"]);
                return $this->_propDict["androidManagedStoreAccountEnterpriseSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidManagedStoreAccountEnterpriseSettings
    *
    * @param AndroidManagedStoreAccountEnterpriseSettings $val The androidManagedStoreAccountEnterpriseSettings
    *
    * @return DeviceManagement
    */
    public function setAndroidManagedStoreAccountEnterpriseSettings($val)
    {
        $this->_propDict["androidManagedStoreAccountEnterpriseSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidManagedStoreAppConfigurationSchemas
     *
     * @return array The androidManagedStoreAppConfigurationSchemas
     */
    public function getAndroidManagedStoreAppConfigurationSchemas()
    {
        if (array_key_exists("androidManagedStoreAppConfigurationSchemas", $this->_propDict)) {
           return $this->_propDict["androidManagedStoreAppConfigurationSchemas"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidManagedStoreAppConfigurationSchemas
    *
    * @param AndroidManagedStoreAppConfigurationSchema $val The androidManagedStoreAppConfigurationSchemas
    *
    * @return DeviceManagement
    */
    public function setAndroidManagedStoreAppConfigurationSchemas($val)
    {
		$this->_propDict["androidManagedStoreAppConfigurationSchemas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidDeviceOwnerEnrollmentProfiles
     *
     * @return array The androidDeviceOwnerEnrollmentProfiles
     */
    public function getAndroidDeviceOwnerEnrollmentProfiles()
    {
        if (array_key_exists("androidDeviceOwnerEnrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["androidDeviceOwnerEnrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidDeviceOwnerEnrollmentProfiles
    *
    * @param AndroidDeviceOwnerEnrollmentProfile $val The androidDeviceOwnerEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAndroidDeviceOwnerEnrollmentProfiles($val)
    {
		$this->_propDict["androidDeviceOwnerEnrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteActionAudits
     *
     * @return array The remoteActionAudits
     */
    public function getRemoteActionAudits()
    {
        if (array_key_exists("remoteActionAudits", $this->_propDict)) {
           return $this->_propDict["remoteActionAudits"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the remoteActionAudits
    *
    * @param RemoteActionAudit $val The remoteActionAudits
    *
    * @return DeviceManagement
    */
    public function setRemoteActionAudits($val)
    {
		$this->_propDict["remoteActionAudits"] = $val;
        return $this;
    }
    
    /**
    * Gets the applePushNotificationCertificate
    *
    * @return ApplePushNotificationCertificate The applePushNotificationCertificate
    */
    public function getApplePushNotificationCertificate()
    {
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "Microsoft\Graph\Beta\Model\ApplePushNotificationCertificate")) {
                return $this->_propDict["applePushNotificationCertificate"];
            } else {
                $this->_propDict["applePushNotificationCertificate"] = new ApplePushNotificationCertificate($this->_propDict["applePushNotificationCertificate"]);
                return $this->_propDict["applePushNotificationCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applePushNotificationCertificate
    *
    * @param ApplePushNotificationCertificate $val The applePushNotificationCertificate
    *
    * @return DeviceManagement
    */
    public function setApplePushNotificationCertificate($val)
    {
        $this->_propDict["applePushNotificationCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementScripts
     *
     * @return array The deviceManagementScripts
     */
    public function getDeviceManagementScripts()
    {
        if (array_key_exists("deviceManagementScripts", $this->_propDict)) {
           return $this->_propDict["deviceManagementScripts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceManagementScripts
    *
    * @param DeviceManagementScript $val The deviceManagementScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementScripts($val)
    {
		$this->_propDict["deviceManagementScripts"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceOverview
    *
    * @return ManagedDeviceOverview The managedDeviceOverview
    */
    public function getManagedDeviceOverview()
    {
        if (array_key_exists("managedDeviceOverview", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOverview"], "Microsoft\Graph\Beta\Model\ManagedDeviceOverview")) {
                return $this->_propDict["managedDeviceOverview"];
            } else {
                $this->_propDict["managedDeviceOverview"] = new ManagedDeviceOverview($this->_propDict["managedDeviceOverview"]);
                return $this->_propDict["managedDeviceOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceOverview
    *
    * @param ManagedDeviceOverview $val The managedDeviceOverview
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceOverview($val)
    {
        $this->_propDict["managedDeviceOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the detectedApps
     *
     * @return array The detectedApps
     */
    public function getDetectedApps()
    {
        if (array_key_exists("detectedApps", $this->_propDict)) {
           return $this->_propDict["detectedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the detectedApps
    *
    * @param DetectedApp $val The detectedApps
    *
    * @return DeviceManagement
    */
    public function setDetectedApps($val)
    {
		$this->_propDict["detectedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDevices
     *
     * @return array The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists("managedDevices", $this->_propDict)) {
           return $this->_propDict["managedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDevices
    *
    * @param ManagedDevice $val The managedDevices
    *
    * @return DeviceManagement
    */
    public function setManagedDevices($val)
    {
		$this->_propDict["managedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsMalwareInformation
     *
     * @return array The windowsMalwareInformation
     */
    public function getWindowsMalwareInformation()
    {
        if (array_key_exists("windowsMalwareInformation", $this->_propDict)) {
           return $this->_propDict["windowsMalwareInformation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsMalwareInformation
    *
    * @param WindowsMalwareInformation $val The windowsMalwareInformation
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareInformation($val)
    {
		$this->_propDict["windowsMalwareInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dataSharingConsents
     *
     * @return array The dataSharingConsents
     */
    public function getDataSharingConsents()
    {
        if (array_key_exists("dataSharingConsents", $this->_propDict)) {
           return $this->_propDict["dataSharingConsents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dataSharingConsents
    *
    * @param DataSharingConsent $val The dataSharingConsents
    *
    * @return DeviceManagement
    */
    public function setDataSharingConsents($val)
    {
		$this->_propDict["dataSharingConsents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurations
     *
     * @return array The deviceConfigurations
     */
    public function getDeviceConfigurations()
    {
        if (array_key_exists("deviceConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceConfigurations
    *
    * @param DeviceConfiguration $val The deviceConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurations($val)
    {
		$this->_propDict["deviceConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicies
     *
     * @return array The deviceCompliancePolicies
     */
    public function getDeviceCompliancePolicies()
    {
        if (array_key_exists("deviceCompliancePolicies", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicies
    *
    * @param DeviceCompliancePolicy $val The deviceCompliancePolicies
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicies($val)
    {
		$this->_propDict["deviceCompliancePolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the softwareUpdateStatusSummary
    *
    * @return SoftwareUpdateStatusSummary The softwareUpdateStatusSummary
    */
    public function getSoftwareUpdateStatusSummary()
    {
        if (array_key_exists("softwareUpdateStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "Microsoft\Graph\Beta\Model\SoftwareUpdateStatusSummary")) {
                return $this->_propDict["softwareUpdateStatusSummary"];
            } else {
                $this->_propDict["softwareUpdateStatusSummary"] = new SoftwareUpdateStatusSummary($this->_propDict["softwareUpdateStatusSummary"]);
                return $this->_propDict["softwareUpdateStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the softwareUpdateStatusSummary
    *
    * @param SoftwareUpdateStatusSummary $val The softwareUpdateStatusSummary
    *
    * @return DeviceManagement
    */
    public function setSoftwareUpdateStatusSummary($val)
    {
        $this->_propDict["softwareUpdateStatusSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicyDeviceStateSummary
    *
    * @return DeviceCompliancePolicyDeviceStateSummary The deviceCompliancePolicyDeviceStateSummary
    */
    public function getDeviceCompliancePolicyDeviceStateSummary()
    {
        if (array_key_exists("deviceCompliancePolicyDeviceStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "Microsoft\Graph\Beta\Model\DeviceCompliancePolicyDeviceStateSummary")) {
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            } else {
                $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = new DeviceCompliancePolicyDeviceStateSummary($this->_propDict["deviceCompliancePolicyDeviceStateSummary"]);
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicyDeviceStateSummary
    *
    * @param DeviceCompliancePolicyDeviceStateSummary $val The deviceCompliancePolicyDeviceStateSummary
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicyDeviceStateSummary($val)
    {
        $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
     *
     * @return array The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists("deviceCompliancePolicySettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicySettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicySettingStateSummaries
    *
    * @param DeviceCompliancePolicySettingStateSummary $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
		$this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOnboardingStateSummary
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary The advancedThreatProtectionOnboardingStateSummary
    */
    public function getAdvancedThreatProtectionOnboardingStateSummary()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionOnboardingStateSummary"], "Microsoft\Graph\Beta\Model\AdvancedThreatProtectionOnboardingStateSummary")) {
                return $this->_propDict["advancedThreatProtectionOnboardingStateSummary"];
            } else {
                $this->_propDict["advancedThreatProtectionOnboardingStateSummary"] = new AdvancedThreatProtectionOnboardingStateSummary($this->_propDict["advancedThreatProtectionOnboardingStateSummary"]);
                return $this->_propDict["advancedThreatProtectionOnboardingStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingStateSummary
    *
    * @param AdvancedThreatProtectionOnboardingStateSummary $val The advancedThreatProtectionOnboardingStateSummary
    *
    * @return DeviceManagement
    */
    public function setAdvancedThreatProtectionOnboardingStateSummary($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingStateSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationDeviceStateSummaries
    *
    * @return DeviceConfigurationDeviceStateSummary The deviceConfigurationDeviceStateSummaries
    */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "Microsoft\Graph\Beta\Model\DeviceConfigurationDeviceStateSummary")) {
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            } else {
                $this->_propDict["deviceConfigurationDeviceStateSummaries"] = new DeviceConfigurationDeviceStateSummary($this->_propDict["deviceConfigurationDeviceStateSummaries"]);
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfigurationDeviceStateSummaries
    *
    * @param DeviceConfigurationDeviceStateSummary $val The deviceConfigurationDeviceStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationDeviceStateSummaries($val)
    {
        $this->_propDict["deviceConfigurationDeviceStateSummaries"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationUserStateSummaries
    *
    * @return DeviceConfigurationUserStateSummary The deviceConfigurationUserStateSummaries
    */
    public function getDeviceConfigurationUserStateSummaries()
    {
        if (array_key_exists("deviceConfigurationUserStateSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfigurationUserStateSummaries"], "Microsoft\Graph\Beta\Model\DeviceConfigurationUserStateSummary")) {
                return $this->_propDict["deviceConfigurationUserStateSummaries"];
            } else {
                $this->_propDict["deviceConfigurationUserStateSummaries"] = new DeviceConfigurationUserStateSummary($this->_propDict["deviceConfigurationUserStateSummaries"]);
                return $this->_propDict["deviceConfigurationUserStateSummaries"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfigurationUserStateSummaries
    *
    * @param DeviceConfigurationUserStateSummary $val The deviceConfigurationUserStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationUserStateSummaries($val)
    {
        $this->_propDict["deviceConfigurationUserStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cartToClassAssociations
     *
     * @return array The cartToClassAssociations
     */
    public function getCartToClassAssociations()
    {
        if (array_key_exists("cartToClassAssociations", $this->_propDict)) {
           return $this->_propDict["cartToClassAssociations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cartToClassAssociations
    *
    * @param CartToClassAssociation $val The cartToClassAssociations
    *
    * @return DeviceManagement
    */
    public function setCartToClassAssociations($val)
    {
		$this->_propDict["cartToClassAssociations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosUpdateStatuses
     *
     * @return array The iosUpdateStatuses
     */
    public function getIosUpdateStatuses()
    {
        if (array_key_exists("iosUpdateStatuses", $this->_propDict)) {
           return $this->_propDict["iosUpdateStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosUpdateStatuses
    *
    * @param IosUpdateDeviceStatus $val The iosUpdateStatuses
    *
    * @return DeviceManagement
    */
    public function setIosUpdateStatuses($val)
    {
		$this->_propDict["iosUpdateStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ndesConnectors
     *
     * @return array The ndesConnectors
     */
    public function getNdesConnectors()
    {
        if (array_key_exists("ndesConnectors", $this->_propDict)) {
           return $this->_propDict["ndesConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ndesConnectors
    *
    * @param NdesConnector $val The ndesConnectors
    *
    * @return DeviceManagement
    */
    public function setNdesConnectors($val)
    {
		$this->_propDict["ndesConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationRestrictedAppsViolations
     *
     * @return array The deviceConfigurationRestrictedAppsViolations
     */
    public function getDeviceConfigurationRestrictedAppsViolations()
    {
        if (array_key_exists("deviceConfigurationRestrictedAppsViolations", $this->_propDict)) {
           return $this->_propDict["deviceConfigurationRestrictedAppsViolations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceConfigurationRestrictedAppsViolations
    *
    * @param RestrictedAppsViolation $val The deviceConfigurationRestrictedAppsViolations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationRestrictedAppsViolations($val)
    {
		$this->_propDict["deviceConfigurationRestrictedAppsViolations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCategories
     *
     * @return array The deviceCategories
     */
    public function getDeviceCategories()
    {
        if (array_key_exists("deviceCategories", $this->_propDict)) {
           return $this->_propDict["deviceCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCategories
    *
    * @param DeviceCategory $val The deviceCategories
    *
    * @return DeviceManagement
    */
    public function setDeviceCategories($val)
    {
		$this->_propDict["deviceCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeConnectors
     *
     * @return array The exchangeConnectors
     */
    public function getExchangeConnectors()
    {
        if (array_key_exists("exchangeConnectors", $this->_propDict)) {
           return $this->_propDict["exchangeConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exchangeConnectors
    *
    * @param DeviceManagementExchangeConnector $val The exchangeConnectors
    *
    * @return DeviceManagement
    */
    public function setExchangeConnectors($val)
    {
		$this->_propDict["exchangeConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceEnrollmentConfigurations
     *
     * @return array The deviceEnrollmentConfigurations
     */
    public function getDeviceEnrollmentConfigurations()
    {
        if (array_key_exists("deviceEnrollmentConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceEnrollmentConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceEnrollmentConfigurations
    *
    * @param DeviceEnrollmentConfiguration $val The deviceEnrollmentConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceEnrollmentConfigurations($val)
    {
		$this->_propDict["deviceEnrollmentConfigurations"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeOnPremisesPolicy
    *
    * @return DeviceManagementExchangeOnPremisesPolicy The exchangeOnPremisesPolicy
    */
    public function getExchangeOnPremisesPolicy()
    {
        if (array_key_exists("exchangeOnPremisesPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeOnPremisesPolicy"], "Microsoft\Graph\Beta\Model\DeviceManagementExchangeOnPremisesPolicy")) {
                return $this->_propDict["exchangeOnPremisesPolicy"];
            } else {
                $this->_propDict["exchangeOnPremisesPolicy"] = new DeviceManagementExchangeOnPremisesPolicy($this->_propDict["exchangeOnPremisesPolicy"]);
                return $this->_propDict["exchangeOnPremisesPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeOnPremisesPolicy
    *
    * @param DeviceManagementExchangeOnPremisesPolicy $val The exchangeOnPremisesPolicy
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicy($val)
    {
        $this->_propDict["exchangeOnPremisesPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeOnPremisesPolicies
     *
     * @return array The exchangeOnPremisesPolicies
     */
    public function getExchangeOnPremisesPolicies()
    {
        if (array_key_exists("exchangeOnPremisesPolicies", $this->_propDict)) {
           return $this->_propDict["exchangeOnPremisesPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exchangeOnPremisesPolicies
    *
    * @param DeviceManagementExchangeOnPremisesPolicy $val The exchangeOnPremisesPolicies
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicies($val)
    {
		$this->_propDict["exchangeOnPremisesPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessSettings
    *
    * @return OnPremisesConditionalAccessSettings The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "Microsoft\Graph\Beta\Model\OnPremisesConditionalAccessSettings")) {
                return $this->_propDict["conditionalAccessSettings"];
            } else {
                $this->_propDict["conditionalAccessSettings"] = new OnPremisesConditionalAccessSettings($this->_propDict["conditionalAccessSettings"]);
                return $this->_propDict["conditionalAccessSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessSettings
    *
    * @param OnPremisesConditionalAccessSettings $val The conditionalAccessSettings
    *
    * @return DeviceManagement
    */
    public function setConditionalAccessSettings($val)
    {
        $this->_propDict["conditionalAccessSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileThreatDefenseConnectors
     *
     * @return array The mobileThreatDefenseConnectors
     */
    public function getMobileThreatDefenseConnectors()
    {
        if (array_key_exists("mobileThreatDefenseConnectors", $this->_propDict)) {
           return $this->_propDict["mobileThreatDefenseConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileThreatDefenseConnectors
    *
    * @param MobileThreatDefenseConnector $val The mobileThreatDefenseConnectors
    *
    * @return DeviceManagement
    */
    public function setMobileThreatDefenseConnectors($val)
    {
		$this->_propDict["mobileThreatDefenseConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementPartners
     *
     * @return array The deviceManagementPartners
     */
    public function getDeviceManagementPartners()
    {
        if (array_key_exists("deviceManagementPartners", $this->_propDict)) {
           return $this->_propDict["deviceManagementPartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceManagementPartners
    *
    * @param DeviceManagementPartner $val The deviceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementPartners($val)
    {
		$this->_propDict["deviceManagementPartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditions
     *
     * @return array The managementConditions
     */
    public function getManagementConditions()
    {
        if (array_key_exists("managementConditions", $this->_propDict)) {
           return $this->_propDict["managementConditions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementConditions
    *
    * @param ManagementCondition $val The managementConditions
    *
    * @return DeviceManagement
    */
    public function setManagementConditions($val)
    {
		$this->_propDict["managementConditions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditionStatements
     *
     * @return array The managementConditionStatements
     */
    public function getManagementConditionStatements()
    {
        if (array_key_exists("managementConditionStatements", $this->_propDict)) {
           return $this->_propDict["managementConditionStatements"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementConditionStatements
    *
    * @param ManagementConditionStatement $val The managementConditionStatements
    *
    * @return DeviceManagement
    */
    public function setManagementConditionStatements($val)
    {
		$this->_propDict["managementConditionStatements"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationMessageTemplates
     *
     * @return array The notificationMessageTemplates
     */
    public function getNotificationMessageTemplates()
    {
        if (array_key_exists("notificationMessageTemplates", $this->_propDict)) {
           return $this->_propDict["notificationMessageTemplates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notificationMessageTemplates
    *
    * @param NotificationMessageTemplate $val The notificationMessageTemplates
    *
    * @return DeviceManagement
    */
    public function setNotificationMessageTemplates($val)
    {
		$this->_propDict["notificationMessageTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    *
    * @param RoleDefinition $val The roleDefinitions
    *
    * @return DeviceManagement
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    *
    * @param DeviceAndAppManagementRoleAssignment $val The roleAssignments
    *
    * @return DeviceManagement
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleScopeTags
     *
     * @return array The roleScopeTags
     */
    public function getRoleScopeTags()
    {
        if (array_key_exists("roleScopeTags", $this->_propDict)) {
           return $this->_propDict["roleScopeTags"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleScopeTags
    *
    * @param RoleScopeTag $val The roleScopeTags
    *
    * @return DeviceManagement
    */
    public function setRoleScopeTags($val)
    {
		$this->_propDict["roleScopeTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resourceOperations
     *
     * @return array The resourceOperations
     */
    public function getResourceOperations()
    {
        if (array_key_exists("resourceOperations", $this->_propDict)) {
           return $this->_propDict["resourceOperations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resourceOperations
    *
    * @param ResourceOperation $val The resourceOperations
    *
    * @return DeviceManagement
    */
    public function setResourceOperations($val)
    {
		$this->_propDict["resourceOperations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the embeddedSIMActivationCodePools
     *
     * @return array The embeddedSIMActivationCodePools
     */
    public function getEmbeddedSIMActivationCodePools()
    {
        if (array_key_exists("embeddedSIMActivationCodePools", $this->_propDict)) {
           return $this->_propDict["embeddedSIMActivationCodePools"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the embeddedSIMActivationCodePools
    *
    * @param EmbeddedSIMActivationCodePool $val The embeddedSIMActivationCodePools
    *
    * @return DeviceManagement
    */
    public function setEmbeddedSIMActivationCodePools($val)
    {
		$this->_propDict["embeddedSIMActivationCodePools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the telecomExpenseManagementPartners
     *
     * @return array The telecomExpenseManagementPartners
     */
    public function getTelecomExpenseManagementPartners()
    {
        if (array_key_exists("telecomExpenseManagementPartners", $this->_propDict)) {
           return $this->_propDict["telecomExpenseManagementPartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the telecomExpenseManagementPartners
    *
    * @param TelecomExpenseManagementPartner $val The telecomExpenseManagementPartners
    *
    * @return DeviceManagement
    */
    public function setTelecomExpenseManagementPartners($val)
    {
		$this->_propDict["telecomExpenseManagementPartners"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsAutopilotSettings
    *
    * @return WindowsAutopilotSettings The windowsAutopilotSettings
    */
    public function getWindowsAutopilotSettings()
    {
        if (array_key_exists("windowsAutopilotSettings", $this->_propDict)) {
            if (is_a($this->_propDict["windowsAutopilotSettings"], "Microsoft\Graph\Beta\Model\WindowsAutopilotSettings")) {
                return $this->_propDict["windowsAutopilotSettings"];
            } else {
                $this->_propDict["windowsAutopilotSettings"] = new WindowsAutopilotSettings($this->_propDict["windowsAutopilotSettings"]);
                return $this->_propDict["windowsAutopilotSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsAutopilotSettings
    *
    * @param WindowsAutopilotSettings $val The windowsAutopilotSettings
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotSettings($val)
    {
        $this->_propDict["windowsAutopilotSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeviceIdentities
     *
     * @return array The windowsAutopilotDeviceIdentities
     */
    public function getWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists("windowsAutopilotDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["windowsAutopilotDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsAutopilotDeviceIdentities
    *
    * @param WindowsAutopilotDeviceIdentity $val The windowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeviceIdentities($val)
    {
		$this->_propDict["windowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeploymentProfiles
     *
     * @return array The windowsAutopilotDeploymentProfiles
     */
    public function getWindowsAutopilotDeploymentProfiles()
    {
        if (array_key_exists("windowsAutopilotDeploymentProfiles", $this->_propDict)) {
           return $this->_propDict["windowsAutopilotDeploymentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsAutopilotDeploymentProfiles
    *
    * @param WindowsAutopilotDeploymentProfile $val The windowsAutopilotDeploymentProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeploymentProfiles($val)
    {
		$this->_propDict["windowsAutopilotDeploymentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedDeviceIdentities
     *
     * @return array The importedDeviceIdentities
     */
    public function getImportedDeviceIdentities()
    {
        if (array_key_exists("importedDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedDeviceIdentities
    *
    * @param ImportedDeviceIdentity $val The importedDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedDeviceIdentities($val)
    {
		$this->_propDict["importedDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the depOnboardingSettings
     *
     * @return array The depOnboardingSettings
     */
    public function getDepOnboardingSettings()
    {
        if (array_key_exists("depOnboardingSettings", $this->_propDict)) {
           return $this->_propDict["depOnboardingSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the depOnboardingSettings
    *
    * @param DepOnboardingSetting $val The depOnboardingSettings
    *
    * @return DeviceManagement
    */
    public function setDepOnboardingSettings($val)
    {
		$this->_propDict["depOnboardingSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedWindowsAutopilotDeviceIdentities
     *
     * @return array The importedWindowsAutopilotDeviceIdentities
     */
    public function getImportedWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists("importedWindowsAutopilotDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedWindowsAutopilotDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedWindowsAutopilotDeviceIdentities
    *
    * @param ImportedWindowsAutopilotDeviceIdentity $val The importedWindowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedWindowsAutopilotDeviceIdentities($val)
    {
		$this->_propDict["importedWindowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteAssistancePartners
     *
     * @return array The remoteAssistancePartners
     */
    public function getRemoteAssistancePartners()
    {
        if (array_key_exists("remoteAssistancePartners", $this->_propDict)) {
           return $this->_propDict["remoteAssistancePartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the remoteAssistancePartners
    *
    * @param RemoteAssistancePartner $val The remoteAssistancePartners
    *
    * @return DeviceManagement
    */
    public function setRemoteAssistancePartners($val)
    {
		$this->_propDict["remoteAssistancePartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionAppLearningSummaries
     *
     * @return array The windowsInformationProtectionAppLearningSummaries
     */
    public function getWindowsInformationProtectionAppLearningSummaries()
    {
        if (array_key_exists("windowsInformationProtectionAppLearningSummaries", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionAppLearningSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionAppLearningSummaries
    *
    * @param WindowsInformationProtectionAppLearningSummary $val The windowsInformationProtectionAppLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionAppLearningSummaries($val)
    {
		$this->_propDict["windowsInformationProtectionAppLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionNetworkLearningSummaries
     *
     * @return array The windowsInformationProtectionNetworkLearningSummaries
     */
    public function getWindowsInformationProtectionNetworkLearningSummaries()
    {
        if (array_key_exists("windowsInformationProtectionNetworkLearningSummaries", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionNetworkLearningSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionNetworkLearningSummaries
    *
    * @param WindowsInformationProtectionNetworkLearningSummary $val The windowsInformationProtectionNetworkLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries($val)
    {
		$this->_propDict["windowsInformationProtectionNetworkLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the auditEvents
     *
     * @return array The auditEvents
     */
    public function getAuditEvents()
    {
        if (array_key_exists("auditEvents", $this->_propDict)) {
           return $this->_propDict["auditEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the auditEvents
    *
    * @param AuditEvent $val The auditEvents
    *
    * @return DeviceManagement
    */
    public function setAuditEvents($val)
    {
		$this->_propDict["auditEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the troubleshootingEvents
     *
     * @return array The troubleshootingEvents
     */
    public function getTroubleshootingEvents()
    {
        if (array_key_exists("troubleshootingEvents", $this->_propDict)) {
           return $this->_propDict["troubleshootingEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the troubleshootingEvents
    *
    * @param DeviceManagementTroubleshootingEvent $val The troubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setTroubleshootingEvents($val)
    {
		$this->_propDict["troubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userPfxCertificates
     *
     * @return array The userPfxCertificates
     */
    public function getUserPfxCertificates()
    {
        if (array_key_exists("userPfxCertificates", $this->_propDict)) {
           return $this->_propDict["userPfxCertificates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userPfxCertificates
    *
    * @param UserPFXCertificate $val The userPfxCertificates
    *
    * @return DeviceManagement
    */
    public function setUserPfxCertificates($val)
    {
		$this->_propDict["userPfxCertificates"] = $val;
        return $this;
    }
    
}
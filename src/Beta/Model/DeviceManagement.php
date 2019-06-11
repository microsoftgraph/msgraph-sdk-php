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
    * Tenant mobile device management subscription state. The possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
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
    * Tenant mobile device management subscription state. The possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
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
    * Tenant's Subscription.
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
    * Tenant's Subscription.
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
    * Device cleanup rule
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
    * Device cleanup rule
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
    * Admin consent information.
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
    * Admin consent information.
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
    * Device protection overview.
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
    * Device protection overview.
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
    * Malware overview for windows devices.
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
    * Malware overview for windows devices.
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
    * The date &amp; time when tenant data moved between scaleunits.
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
    * The date &amp; time when tenant data moved between scaleunits.
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
    * Account level settings.
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
    * Account level settings.
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
    * Maximum number of dep tokens allowed per-tenant.
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
    * Maximum number of dep tokens allowed per-tenant.
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
    * Intune Account Id for given tenant
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
    * Intune Account Id for given tenant
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
    * Gets the lastReportAggregationDateTime
    * The last modified time of reporting for this account. This property is read-only.
    *
    * @return \DateTime The lastReportAggregationDateTime
    */
    public function getLastReportAggregationDateTime()
    {
        if (array_key_exists("lastReportAggregationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportAggregationDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportAggregationDateTime"];
            } else {
                $this->_propDict["lastReportAggregationDateTime"] = new \DateTime($this->_propDict["lastReportAggregationDateTime"]);
                return $this->_propDict["lastReportAggregationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportAggregationDateTime
    * The last modified time of reporting for this account. This property is read-only.
    *
    * @param \DateTime $val The lastReportAggregationDateTime
    *
    * @return DeviceManagement
    */
    public function setLastReportAggregationDateTime($val)
    {
        $this->_propDict["lastReportAggregationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceComplianceReportSummarizationDateTime
    * The last requested time of device compliance reporting for this account. This property is read-only.
    *
    * @return \DateTime The deviceComplianceReportSummarizationDateTime
    */
    public function getDeviceComplianceReportSummarizationDateTime()
    {
        if (array_key_exists("deviceComplianceReportSummarizationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deviceComplianceReportSummarizationDateTime"], "\DateTime")) {
                return $this->_propDict["deviceComplianceReportSummarizationDateTime"];
            } else {
                $this->_propDict["deviceComplianceReportSummarizationDateTime"] = new \DateTime($this->_propDict["deviceComplianceReportSummarizationDateTime"]);
                return $this->_propDict["deviceComplianceReportSummarizationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceComplianceReportSummarizationDateTime
    * The last requested time of device compliance reporting for this account. This property is read-only.
    *
    * @param \DateTime $val The deviceComplianceReportSummarizationDateTime
    *
    * @return DeviceManagement
    */
    public function setDeviceComplianceReportSummarizationDateTime($val)
    {
        $this->_propDict["deviceComplianceReportSummarizationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the legacyPcManangementEnabled
    * The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
    *
    * @return bool The legacyPcManangementEnabled
    */
    public function getLegacyPcManangementEnabled()
    {
        if (array_key_exists("legacyPcManangementEnabled", $this->_propDict)) {
            return $this->_propDict["legacyPcManangementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the legacyPcManangementEnabled
    * The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
    *
    * @param bool $val The legacyPcManangementEnabled
    *
    * @return DeviceManagement
    */
    public function setLegacyPcManangementEnabled($val)
    {
        $this->_propDict["legacyPcManangementEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
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
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
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
    * The terms and conditions associated with device management of the company.
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
    * The terms and conditions associated with device management of the company.
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
    * The singleton Android for Work settings entity.
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
    * The singleton Android for Work settings entity.
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
    * Android for Work app configuration schema entities.
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
    * Android for Work app configuration schema entities.
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
    * Android for Work enrollment profile entities.
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
    * Android for Work enrollment profile entities.
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
    * The singleton Android managed store account enterprise settings entity.
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
    * The singleton Android managed store account enterprise settings entity.
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
    * Android Enterprise app configuration schema entities.
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
    * Android Enterprise app configuration schema entities.
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
    * Android device owner enrollment profile entities.
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
    * Android device owner enrollment profile entities.
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
    * The list of device remote action audits with the tenant.
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
    * The list of device remote action audits with the tenant.
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
    * Apple push notification certificate.
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
    * Apple push notification certificate.
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
    * The list of device management scripts associated with the tenant.
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
    * The list of device management scripts associated with the tenant.
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
    * Device overview
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
    * Device overview
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
    * The list of detected apps associated with a device.
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
    * The list of detected apps associated with a device.
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
    * The list of managed devices.
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
    * The list of managed devices.
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
    * The list of affected malware in the tenant.
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
    * The list of affected malware in the tenant.
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
    * Data sharing consents.
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
    * Data sharing consents.
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
     * Gets the mobileAppTroubleshootingEvents
    * The collection property of MobileAppTroubleshootingEvent.
     *
     * @return array The mobileAppTroubleshootingEvents
     */
    public function getMobileAppTroubleshootingEvents()
    {
        if (array_key_exists("mobileAppTroubleshootingEvents", $this->_propDict)) {
           return $this->_propDict["mobileAppTroubleshootingEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileAppTroubleshootingEvents
    * The collection property of MobileAppTroubleshootingEvent.
    *
    * @param MobileAppTroubleshootingEvent $val The mobileAppTroubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setMobileAppTroubleshootingEvents($val)
    {
		$this->_propDict["mobileAppTroubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurations
    * The device configurations.
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
    * The device configurations.
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
    * The device compliance policies.
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
    * The device compliance policies.
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
    * The software update status summary.
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
    * The software update status summary.
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
    * The device compliance state summary for this account.
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
    * The device compliance state summary for this account.
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
    * The summary states of compliance policy settings for this account.
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
    * The summary states of compliance policy settings for this account.
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
    * The summary state of ATP onboarding state for this account.
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
    * The summary state of ATP onboarding state for this account.
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
    * The device configuration device state summary for this account.
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
    * The device configuration device state summary for this account.
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
    * The device configuration user state summary for this account.
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
    * The device configuration user state summary for this account.
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
    * The Cart To Class Associations.
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
    * The Cart To Class Associations.
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
    * The IOS software update installation statuses for this account.
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
    * The IOS software update installation statuses for this account.
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
    * The collection of Ndes connectors for this account.
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
    * The collection of Ndes connectors for this account.
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
    * Restricted apps violations for this account.
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
    * Restricted apps violations for this account.
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
     * Gets the managedDeviceEncryptionStates
    * Encryption report for devices in this account
     *
     * @return array The managedDeviceEncryptionStates
     */
    public function getManagedDeviceEncryptionStates()
    {
        if (array_key_exists("managedDeviceEncryptionStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceEncryptionStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceEncryptionStates
    * Encryption report for devices in this account
    *
    * @param ManagedDeviceEncryptionState $val The managedDeviceEncryptionStates
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceEncryptionStates($val)
    {
		$this->_propDict["managedDeviceEncryptionStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationConflictSummary
    * Summary of policies in conflict state for this account.
     *
     * @return array The deviceConfigurationConflictSummary
     */
    public function getDeviceConfigurationConflictSummary()
    {
        if (array_key_exists("deviceConfigurationConflictSummary", $this->_propDict)) {
           return $this->_propDict["deviceConfigurationConflictSummary"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceConfigurationConflictSummary
    * Summary of policies in conflict state for this account.
    *
    * @param DeviceConfigurationConflictSummary $val The deviceConfigurationConflictSummary
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationConflictSummary($val)
    {
		$this->_propDict["deviceConfigurationConflictSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCategories
    * The list of device categories with the tenant.
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
    * The list of device categories with the tenant.
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
    * The list of Exchange Connectors configured by the tenant.
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
    * The list of Exchange Connectors configured by the tenant.
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
    * The list of device enrollment configurations
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
    * The list of device enrollment configurations
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
    * The policy which controls mobile device access to Exchange On Premises
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
    * The policy which controls mobile device access to Exchange On Premises
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
    * The list of Exchange On Premisis policies configured by the tenant.
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
    * The list of Exchange On Premisis policies configured by the tenant.
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
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
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
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
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
    * The list of Mobile threat Defense connectors configured by the tenant.
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
    * The list of Mobile threat Defense connectors configured by the tenant.
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
    * The list of Device Management Partners configured by the tenant.
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
    * The list of Device Management Partners configured by the tenant.
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
    * The management conditions associated with device management of the company.
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
    * The management conditions associated with device management of the company.
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
    * The management condition statements associated with device management of the company.
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
    * The management condition statements associated with device management of the company.
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
    * The Notification Message Templates.
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
    * The Notification Message Templates.
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
    * The Role Definitions.
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
    * The Role Definitions.
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
    * The Role Assignments.
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
    * The Role Assignments.
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
    * The Role Scope Tags.
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
    * The Role Scope Tags.
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
    * The Resource Operations.
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
    * The Resource Operations.
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
    * The embedded SIM activation code pools created by this account.
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
    * The embedded SIM activation code pools created by this account.
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
    * The telecom expense management partners.
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
    * The telecom expense management partners.
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
    * The Windows autopilot account settings.
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
    * The Windows autopilot account settings.
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
    * The Windows autopilot device identities contained collection.
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
    * The Windows autopilot device identities contained collection.
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
    * Windows auto pilot deployment profiles
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
    * Windows auto pilot deployment profiles
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
    * The imported device identities.
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
    * The imported device identities.
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
    * This collections of multiple DEP tokens per-tenant.
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
    * This collections of multiple DEP tokens per-tenant.
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
     * Gets the importedWindowsAutopilotDeviceIdentityUploads
    * Collection of Windows autopilot devices upload.
     *
     * @return array The importedWindowsAutopilotDeviceIdentityUploads
     */
    public function getImportedWindowsAutopilotDeviceIdentityUploads()
    {
        if (array_key_exists("importedWindowsAutopilotDeviceIdentityUploads", $this->_propDict)) {
           return $this->_propDict["importedWindowsAutopilotDeviceIdentityUploads"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedWindowsAutopilotDeviceIdentityUploads
    * Collection of Windows autopilot devices upload.
    *
    * @param ImportedWindowsAutopilotDeviceIdentityUpload $val The importedWindowsAutopilotDeviceIdentityUploads
    *
    * @return DeviceManagement
    */
    public function setImportedWindowsAutopilotDeviceIdentityUploads($val)
    {
		$this->_propDict["importedWindowsAutopilotDeviceIdentityUploads"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedWindowsAutopilotDeviceIdentities
    * Collection of imported Windows autopilot devices.
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
    * Collection of imported Windows autopilot devices.
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
    * The remote assist partners.
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
    * The remote assist partners.
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
    * The windows information protection app learning summaries.
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
    * The windows information protection app learning summaries.
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
    * The windows information protection network learning summaries.
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
    * The windows information protection network learning summaries.
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
     * Gets the intuneBrandingProfiles
    * Intune branding profiles targeted to AAD groups
     *
     * @return array The intuneBrandingProfiles
     */
    public function getIntuneBrandingProfiles()
    {
        if (array_key_exists("intuneBrandingProfiles", $this->_propDict)) {
           return $this->_propDict["intuneBrandingProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the intuneBrandingProfiles
    * Intune branding profiles targeted to AAD groups
    *
    * @param IntuneBrandingProfile $val The intuneBrandingProfiles
    *
    * @return DeviceManagement
    */
    public function setIntuneBrandingProfiles($val)
    {
		$this->_propDict["intuneBrandingProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the auditEvents
    * The Audit Events
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
    * The Audit Events
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
    * The list of troubleshooting events for the tenant.
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
    * The list of troubleshooting events for the tenant.
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
    * Collection of PFX certificates associated with a user.
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
    * Collection of PFX certificates associated with a user.
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
    

     /** 
     * Gets the groupPolicyConfigurations
    * The group policy configurations created by this account.
     *
     * @return array The groupPolicyConfigurations
     */
    public function getGroupPolicyConfigurations()
    {
        if (array_key_exists("groupPolicyConfigurations", $this->_propDict)) {
           return $this->_propDict["groupPolicyConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupPolicyConfigurations
    * The group policy configurations created by this account.
    *
    * @param GroupPolicyConfiguration $val The groupPolicyConfigurations
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyConfigurations($val)
    {
		$this->_propDict["groupPolicyConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyDefinitions
    * The available group policy definitions for this account.
     *
     * @return array The groupPolicyDefinitions
     */
    public function getGroupPolicyDefinitions()
    {
        if (array_key_exists("groupPolicyDefinitions", $this->_propDict)) {
           return $this->_propDict["groupPolicyDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupPolicyDefinitions
    * The available group policy definitions for this account.
    *
    * @param GroupPolicyDefinition $val The groupPolicyDefinitions
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyDefinitions($val)
    {
		$this->_propDict["groupPolicyDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyDefinitionFiles
    * The available group policy definition files for this account.
     *
     * @return array The groupPolicyDefinitionFiles
     */
    public function getGroupPolicyDefinitionFiles()
    {
        if (array_key_exists("groupPolicyDefinitionFiles", $this->_propDict)) {
           return $this->_propDict["groupPolicyDefinitionFiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupPolicyDefinitionFiles
    * The available group policy definition files for this account.
    *
    * @param GroupPolicyDefinitionFile $val The groupPolicyDefinitionFiles
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyDefinitionFiles($val)
    {
		$this->_propDict["groupPolicyDefinitionFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the intents
    * The device management intents
     *
     * @return array The intents
     */
    public function getIntents()
    {
        if (array_key_exists("intents", $this->_propDict)) {
           return $this->_propDict["intents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the intents
    * The device management intents
    *
    * @param DeviceManagementIntent $val The intents
    *
    * @return DeviceManagement
    */
    public function setIntents($val)
    {
		$this->_propDict["intents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settingDefinitions
    * The device management intent setting definitions
     *
     * @return array The settingDefinitions
     */
    public function getSettingDefinitions()
    {
        if (array_key_exists("settingDefinitions", $this->_propDict)) {
           return $this->_propDict["settingDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingDefinitions
    * The device management intent setting definitions
    *
    * @param DeviceManagementSettingDefinition $val The settingDefinitions
    *
    * @return DeviceManagement
    */
    public function setSettingDefinitions($val)
    {
		$this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the templates
    * The available templates
     *
     * @return array The templates
     */
    public function getTemplates()
    {
        if (array_key_exists("templates", $this->_propDict)) {
           return $this->_propDict["templates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the templates
    * The available templates
    *
    * @param DeviceManagementTemplate $val The templates
    *
    * @return DeviceManagement
    */
    public function setTemplates($val)
    {
		$this->_propDict["templates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * The available categories
     *
     * @return array The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categories
    * The available categories
    *
    * @param DeviceManagementSettingCategory $val The categories
    *
    * @return DeviceManagement
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    
}
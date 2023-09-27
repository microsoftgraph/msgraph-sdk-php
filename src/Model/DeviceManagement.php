<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagement File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DeviceManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagement extends Entity
{
    /**
    * Gets the intuneAccountId
    * Intune Account Id for given tenant
    *
    * @return string|null The intuneAccountId
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
    * Gets the settings
    * Account level settings.
    *
    * @return DeviceManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\DeviceManagementSettings") || is_null($this->_propDict["settings"])) {
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
    * Gets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    *
    * @return IntuneBrand|null The intuneBrand
    */
    public function getIntuneBrand()
    {
        if (array_key_exists("intuneBrand", $this->_propDict)) {
            if (is_a($this->_propDict["intuneBrand"], "\Microsoft\Graph\Model\IntuneBrand") || is_null($this->_propDict["intuneBrand"])) {
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
    * Gets the deviceProtectionOverview
    * Device protection overview.
    *
    * @return DeviceProtectionOverview|null The deviceProtectionOverview
    */
    public function getDeviceProtectionOverview()
    {
        if (array_key_exists("deviceProtectionOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceProtectionOverview"], "\Microsoft\Graph\Model\DeviceProtectionOverview") || is_null($this->_propDict["deviceProtectionOverview"])) {
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
    * Gets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @return DeviceManagementSubscriptionState|null The subscriptionState
    */
    public function getSubscriptionState()
    {
        if (array_key_exists("subscriptionState", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptionState"], "\Microsoft\Graph\Model\DeviceManagementSubscriptionState") || is_null($this->_propDict["subscriptionState"])) {
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
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
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
    * Gets the userExperienceAnalyticsSettings
    * User experience analytics device settings
    *
    * @return UserExperienceAnalyticsSettings|null The userExperienceAnalyticsSettings
    */
    public function getUserExperienceAnalyticsSettings()
    {
        if (array_key_exists("userExperienceAnalyticsSettings", $this->_propDict)) {
            if (is_a($this->_propDict["userExperienceAnalyticsSettings"], "\Microsoft\Graph\Model\UserExperienceAnalyticsSettings") || is_null($this->_propDict["userExperienceAnalyticsSettings"])) {
                return $this->_propDict["userExperienceAnalyticsSettings"];
            } else {
                $this->_propDict["userExperienceAnalyticsSettings"] = new UserExperienceAnalyticsSettings($this->_propDict["userExperienceAnalyticsSettings"]);
                return $this->_propDict["userExperienceAnalyticsSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperienceAnalyticsSettings
    * User experience analytics device settings
    *
    * @param UserExperienceAnalyticsSettings $val The userExperienceAnalyticsSettings
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsSettings($val)
    {
        $this->_propDict["userExperienceAnalyticsSettings"] = $val;
        return $this;
    }

    /**
    * Gets the windowsMalwareOverview
    * Malware overview for windows devices.
    *
    * @return WindowsMalwareOverview|null The windowsMalwareOverview
    */
    public function getWindowsMalwareOverview()
    {
        if (array_key_exists("windowsMalwareOverview", $this->_propDict)) {
            if (is_a($this->_propDict["windowsMalwareOverview"], "\Microsoft\Graph\Model\WindowsMalwareOverview") || is_null($this->_propDict["windowsMalwareOverview"])) {
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
     * Gets the termsAndConditions
    * The terms and conditions associated with device management of the company.
     *
     * @return array|null The termsAndConditions
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
    * @param TermsAndConditions[] $val The termsAndConditions
    *
    * @return DeviceManagement
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }


     /**
     * Gets the auditEvents
    * The Audit Events
     *
     * @return array|null The auditEvents
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
    * @param AuditEvent[] $val The auditEvents
    *
    * @return DeviceManagement
    */
    public function setAuditEvents($val)
    {
        $this->_propDict["auditEvents"] = $val;
        return $this;
    }


     /**
     * Gets the deviceCompliancePolicies
    * The device compliance policies.
     *
     * @return array|null The deviceCompliancePolicies
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
    * @param DeviceCompliancePolicy[] $val The deviceCompliancePolicies
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicies($val)
    {
        $this->_propDict["deviceCompliancePolicies"] = $val;
        return $this;
    }

    /**
    * Gets the deviceCompliancePolicyDeviceStateSummary
    * The device compliance state summary for this account.
    *
    * @return DeviceCompliancePolicyDeviceStateSummary|null The deviceCompliancePolicyDeviceStateSummary
    */
    public function getDeviceCompliancePolicyDeviceStateSummary()
    {
        if (array_key_exists("deviceCompliancePolicyDeviceStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "\Microsoft\Graph\Model\DeviceCompliancePolicyDeviceStateSummary") || is_null($this->_propDict["deviceCompliancePolicyDeviceStateSummary"])) {
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
     * @return array|null The deviceCompliancePolicySettingStateSummaries
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
    * @param DeviceCompliancePolicySettingStateSummary[] $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }

    /**
    * Gets the deviceConfigurationDeviceStateSummaries
    * The device configuration device state summary for this account.
    *
    * @return DeviceConfigurationDeviceStateSummary|null The deviceConfigurationDeviceStateSummaries
    */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "\Microsoft\Graph\Model\DeviceConfigurationDeviceStateSummary") || is_null($this->_propDict["deviceConfigurationDeviceStateSummaries"])) {
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
     * Gets the deviceConfigurations
    * The device configurations.
     *
     * @return array|null The deviceConfigurations
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
    * @param DeviceConfiguration[] $val The deviceConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurations($val)
    {
        $this->_propDict["deviceConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the iosUpdateStatuses
    * The IOS software update installation statuses for this account.
     *
     * @return array|null The iosUpdateStatuses
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
    * @param IosUpdateDeviceStatus[] $val The iosUpdateStatuses
    *
    * @return DeviceManagement
    */
    public function setIosUpdateStatuses($val)
    {
        $this->_propDict["iosUpdateStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the softwareUpdateStatusSummary
    * The software update status summary.
    *
    * @return SoftwareUpdateStatusSummary|null The softwareUpdateStatusSummary
    */
    public function getSoftwareUpdateStatusSummary()
    {
        if (array_key_exists("softwareUpdateStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "\Microsoft\Graph\Model\SoftwareUpdateStatusSummary") || is_null($this->_propDict["softwareUpdateStatusSummary"])) {
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
     * Gets the complianceManagementPartners
    * The list of Compliance Management Partners configured by the tenant.
     *
     * @return array|null The complianceManagementPartners
     */
    public function getComplianceManagementPartners()
    {
        if (array_key_exists("complianceManagementPartners", $this->_propDict)) {
           return $this->_propDict["complianceManagementPartners"];
        } else {
            return null;
        }
    }

    /**
    * Sets the complianceManagementPartners
    * The list of Compliance Management Partners configured by the tenant.
    *
    * @param ComplianceManagementPartner[] $val The complianceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setComplianceManagementPartners($val)
    {
        $this->_propDict["complianceManagementPartners"] = $val;
        return $this;
    }

    /**
    * Gets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @return OnPremisesConditionalAccessSettings|null The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "\Microsoft\Graph\Model\OnPremisesConditionalAccessSettings") || is_null($this->_propDict["conditionalAccessSettings"])) {
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
     * Gets the deviceCategories
    * The list of device categories with the tenant.
     *
     * @return array|null The deviceCategories
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
    * @param DeviceCategory[] $val The deviceCategories
    *
    * @return DeviceManagement
    */
    public function setDeviceCategories($val)
    {
        $this->_propDict["deviceCategories"] = $val;
        return $this;
    }


     /**
     * Gets the deviceEnrollmentConfigurations
    * The list of device enrollment configurations
     *
     * @return array|null The deviceEnrollmentConfigurations
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
    * @param DeviceEnrollmentConfiguration[] $val The deviceEnrollmentConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceEnrollmentConfigurations($val)
    {
        $this->_propDict["deviceEnrollmentConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the deviceManagementPartners
    * The list of Device Management Partners configured by the tenant.
     *
     * @return array|null The deviceManagementPartners
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
    * @param DeviceManagementPartner[] $val The deviceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementPartners($val)
    {
        $this->_propDict["deviceManagementPartners"] = $val;
        return $this;
    }


     /**
     * Gets the exchangeConnectors
    * The list of Exchange Connectors configured by the tenant.
     *
     * @return array|null The exchangeConnectors
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
    * @param DeviceManagementExchangeConnector[] $val The exchangeConnectors
    *
    * @return DeviceManagement
    */
    public function setExchangeConnectors($val)
    {
        $this->_propDict["exchangeConnectors"] = $val;
        return $this;
    }


     /**
     * Gets the mobileThreatDefenseConnectors
    * The list of Mobile threat Defense connectors configured by the tenant.
     *
     * @return array|null The mobileThreatDefenseConnectors
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
    * @param MobileThreatDefenseConnector[] $val The mobileThreatDefenseConnectors
    *
    * @return DeviceManagement
    */
    public function setMobileThreatDefenseConnectors($val)
    {
        $this->_propDict["mobileThreatDefenseConnectors"] = $val;
        return $this;
    }

    /**
    * Gets the applePushNotificationCertificate
    * Apple push notification certificate.
    *
    * @return ApplePushNotificationCertificate|null The applePushNotificationCertificate
    */
    public function getApplePushNotificationCertificate()
    {
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "\Microsoft\Graph\Model\ApplePushNotificationCertificate") || is_null($this->_propDict["applePushNotificationCertificate"])) {
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
     * Gets the detectedApps
    * The list of detected apps associated with a device.
     *
     * @return array|null The detectedApps
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
    * @param DetectedApp[] $val The detectedApps
    *
    * @return DeviceManagement
    */
    public function setDetectedApps($val)
    {
        $this->_propDict["detectedApps"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceOverview
    * Device overview
    *
    * @return ManagedDeviceOverview|null The managedDeviceOverview
    */
    public function getManagedDeviceOverview()
    {
        if (array_key_exists("managedDeviceOverview", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOverview"], "\Microsoft\Graph\Model\ManagedDeviceOverview") || is_null($this->_propDict["managedDeviceOverview"])) {
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
     * Gets the managedDevices
    * The list of managed devices.
     *
     * @return array|null The managedDevices
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
    * @param ManagedDevice[] $val The managedDevices
    *
    * @return DeviceManagement
    */
    public function setManagedDevices($val)
    {
        $this->_propDict["managedDevices"] = $val;
        return $this;
    }


     /**
     * Gets the mobileAppTroubleshootingEvents
    * The collection property of MobileAppTroubleshootingEvent.
     *
     * @return array|null The mobileAppTroubleshootingEvents
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
    * @param MobileAppTroubleshootingEvent[] $val The mobileAppTroubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setMobileAppTroubleshootingEvents($val)
    {
        $this->_propDict["mobileAppTroubleshootingEvents"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance
    * User experience analytics appHealth Application Performance
     *
     * @return array|null The userExperienceAnalyticsAppHealthApplicationPerformance
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthApplicationPerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformance
    * User experience analytics appHealth Application Performance
    *
    * @param UserExperienceAnalyticsAppHealthApplicationPerformance[] $val The userExperienceAnalyticsAppHealthApplicationPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformance"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    * User experience analytics appHealth Application Performance by App Version details
     *
     * @return array|null The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    * User experience analytics appHealth Application Performance by App Version details
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    * User experience analytics appHealth Application Performance by App Version Device Id
     *
     * @return array|null The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    * User experience analytics appHealth Application Performance by App Version Device Id
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    * User experience analytics appHealth Application Performance by OS Version
     *
     * @return array|null The userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    * User experience analytics appHealth Application Performance by OS Version
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance
    * User experience analytics appHealth Model Performance
     *
     * @return array|null The userExperienceAnalyticsAppHealthDeviceModelPerformance
     */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthDeviceModelPerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthDeviceModelPerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthDeviceModelPerformance
    * User experience analytics appHealth Model Performance
    *
    * @param UserExperienceAnalyticsAppHealthDeviceModelPerformance[] $val The userExperienceAnalyticsAppHealthDeviceModelPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDeviceModelPerformance"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance
    * User experience analytics appHealth Device Performance
     *
     * @return array|null The userExperienceAnalyticsAppHealthDevicePerformance
     */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthDevicePerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthDevicePerformance
    * User experience analytics appHealth Device Performance
    *
    * @param UserExperienceAnalyticsAppHealthDevicePerformance[] $val The userExperienceAnalyticsAppHealthDevicePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformance"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails
    * User experience analytics device performance details
     *
     * @return array|null The userExperienceAnalyticsAppHealthDevicePerformanceDetails
     */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthDevicePerformanceDetails", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformanceDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthDevicePerformanceDetails
    * User experience analytics device performance details
    *
    * @param UserExperienceAnalyticsAppHealthDevicePerformanceDetails[] $val The userExperienceAnalyticsAppHealthDevicePerformanceDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformanceDetails"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance
    * User experience analytics appHealth OS version Performance
     *
     * @return array|null The userExperienceAnalyticsAppHealthOSVersionPerformance
     */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthOSVersionPerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsAppHealthOSVersionPerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthOSVersionPerformance
    * User experience analytics appHealth OS version Performance
    *
    * @param UserExperienceAnalyticsAppHealthOSVersionPerformance[] $val The userExperienceAnalyticsAppHealthOSVersionPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthOSVersionPerformance"] = $val;
        return $this;
    }

    /**
    * Gets the userExperienceAnalyticsAppHealthOverview
    * User experience analytics appHealth overview
    *
    * @return UserExperienceAnalyticsCategory|null The userExperienceAnalyticsAppHealthOverview
    */
    public function getUserExperienceAnalyticsAppHealthOverview()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userExperienceAnalyticsAppHealthOverview"], "\Microsoft\Graph\Model\UserExperienceAnalyticsCategory") || is_null($this->_propDict["userExperienceAnalyticsAppHealthOverview"])) {
                return $this->_propDict["userExperienceAnalyticsAppHealthOverview"];
            } else {
                $this->_propDict["userExperienceAnalyticsAppHealthOverview"] = new UserExperienceAnalyticsCategory($this->_propDict["userExperienceAnalyticsAppHealthOverview"]);
                return $this->_propDict["userExperienceAnalyticsAppHealthOverview"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperienceAnalyticsAppHealthOverview
    * User experience analytics appHealth overview
    *
    * @param UserExperienceAnalyticsCategory $val The userExperienceAnalyticsAppHealthOverview
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthOverview($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthOverview"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsBaselines
    * User experience analytics baselines
     *
     * @return array|null The userExperienceAnalyticsBaselines
     */
    public function getUserExperienceAnalyticsBaselines()
    {
        if (array_key_exists("userExperienceAnalyticsBaselines", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsBaselines"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsBaselines
    * User experience analytics baselines
    *
    * @param UserExperienceAnalyticsBaseline[] $val The userExperienceAnalyticsBaselines
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBaselines($val)
    {
        $this->_propDict["userExperienceAnalyticsBaselines"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsCategories
    * User experience analytics categories
     *
     * @return array|null The userExperienceAnalyticsCategories
     */
    public function getUserExperienceAnalyticsCategories()
    {
        if (array_key_exists("userExperienceAnalyticsCategories", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsCategories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsCategories
    * User experience analytics categories
    *
    * @param UserExperienceAnalyticsCategory[] $val The userExperienceAnalyticsCategories
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsCategories($val)
    {
        $this->_propDict["userExperienceAnalyticsCategories"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsDevicePerformance
    * User experience analytics device performance
     *
     * @return array|null The userExperienceAnalyticsDevicePerformance
     */
    public function getUserExperienceAnalyticsDevicePerformance()
    {
        if (array_key_exists("userExperienceAnalyticsDevicePerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsDevicePerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsDevicePerformance
    * User experience analytics device performance
    *
    * @param UserExperienceAnalyticsDevicePerformance[] $val The userExperienceAnalyticsDevicePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDevicePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsDevicePerformance"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsDeviceScores
    * User experience analytics device scores
     *
     * @return array|null The userExperienceAnalyticsDeviceScores
     */
    public function getUserExperienceAnalyticsDeviceScores()
    {
        if (array_key_exists("userExperienceAnalyticsDeviceScores", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsDeviceScores"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsDeviceScores
    * User experience analytics device scores
    *
    * @param UserExperienceAnalyticsDeviceScores[] $val The userExperienceAnalyticsDeviceScores
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceScores($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceScores"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsDeviceStartupHistory
    * User experience analytics device Startup History
     *
     * @return array|null The userExperienceAnalyticsDeviceStartupHistory
     */
    public function getUserExperienceAnalyticsDeviceStartupHistory()
    {
        if (array_key_exists("userExperienceAnalyticsDeviceStartupHistory", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsDeviceStartupHistory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsDeviceStartupHistory
    * User experience analytics device Startup History
    *
    * @param UserExperienceAnalyticsDeviceStartupHistory[] $val The userExperienceAnalyticsDeviceStartupHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupHistory"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsDeviceStartupProcesses
    * User experience analytics device Startup Processes
     *
     * @return array|null The userExperienceAnalyticsDeviceStartupProcesses
     */
    public function getUserExperienceAnalyticsDeviceStartupProcesses()
    {
        if (array_key_exists("userExperienceAnalyticsDeviceStartupProcesses", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsDeviceStartupProcesses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsDeviceStartupProcesses
    * User experience analytics device Startup Processes
    *
    * @param UserExperienceAnalyticsDeviceStartupProcess[] $val The userExperienceAnalyticsDeviceStartupProcesses
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupProcesses($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupProcesses"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance
    * User experience analytics device Startup Process Performance
     *
     * @return array|null The userExperienceAnalyticsDeviceStartupProcessPerformance
     */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance()
    {
        if (array_key_exists("userExperienceAnalyticsDeviceStartupProcessPerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsDeviceStartupProcessPerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsDeviceStartupProcessPerformance
    * User experience analytics device Startup Process Performance
    *
    * @param UserExperienceAnalyticsDeviceStartupProcessPerformance[] $val The userExperienceAnalyticsDeviceStartupProcessPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupProcessPerformance"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsMetricHistory
    * User experience analytics metric history
     *
     * @return array|null The userExperienceAnalyticsMetricHistory
     */
    public function getUserExperienceAnalyticsMetricHistory()
    {
        if (array_key_exists("userExperienceAnalyticsMetricHistory", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsMetricHistory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsMetricHistory
    * User experience analytics metric history
    *
    * @param UserExperienceAnalyticsMetricHistory[] $val The userExperienceAnalyticsMetricHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsMetricHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsMetricHistory"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsModelScores
    * User experience analytics model scores
     *
     * @return array|null The userExperienceAnalyticsModelScores
     */
    public function getUserExperienceAnalyticsModelScores()
    {
        if (array_key_exists("userExperienceAnalyticsModelScores", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsModelScores"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsModelScores
    * User experience analytics model scores
    *
    * @param UserExperienceAnalyticsModelScores[] $val The userExperienceAnalyticsModelScores
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsModelScores($val)
    {
        $this->_propDict["userExperienceAnalyticsModelScores"] = $val;
        return $this;
    }

    /**
    * Gets the userExperienceAnalyticsOverview
    * User experience analytics overview
    *
    * @return UserExperienceAnalyticsOverview|null The userExperienceAnalyticsOverview
    */
    public function getUserExperienceAnalyticsOverview()
    {
        if (array_key_exists("userExperienceAnalyticsOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userExperienceAnalyticsOverview"], "\Microsoft\Graph\Model\UserExperienceAnalyticsOverview") || is_null($this->_propDict["userExperienceAnalyticsOverview"])) {
                return $this->_propDict["userExperienceAnalyticsOverview"];
            } else {
                $this->_propDict["userExperienceAnalyticsOverview"] = new UserExperienceAnalyticsOverview($this->_propDict["userExperienceAnalyticsOverview"]);
                return $this->_propDict["userExperienceAnalyticsOverview"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperienceAnalyticsOverview
    * User experience analytics overview
    *
    * @param UserExperienceAnalyticsOverview $val The userExperienceAnalyticsOverview
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsOverview($val)
    {
        $this->_propDict["userExperienceAnalyticsOverview"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsScoreHistory
    * User experience analytics device Startup Score History
     *
     * @return array|null The userExperienceAnalyticsScoreHistory
     */
    public function getUserExperienceAnalyticsScoreHistory()
    {
        if (array_key_exists("userExperienceAnalyticsScoreHistory", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsScoreHistory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsScoreHistory
    * User experience analytics device Startup Score History
    *
    * @param UserExperienceAnalyticsScoreHistory[] $val The userExperienceAnalyticsScoreHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsScoreHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsScoreHistory"] = $val;
        return $this;
    }

    /**
    * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    * User experience analytics work from anywhere hardware readiness metrics.
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null The userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric()
    {
        if (array_key_exists("userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric", $this->_propDict)) {
            if (is_a($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"], "\Microsoft\Graph\Model\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric") || is_null($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"])) {
                return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"];
            } else {
                $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"] = new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"]);
                return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"];
            }
        }
        return null;
    }

    /**
    * Sets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    * User experience analytics work from anywhere hardware readiness metrics.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $val The userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($val)
    {
        $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics
    * User experience analytics work from anywhere metrics.
     *
     * @return array|null The userExperienceAnalyticsWorkFromAnywhereMetrics
     */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics()
    {
        if (array_key_exists("userExperienceAnalyticsWorkFromAnywhereMetrics", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereMetrics"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsWorkFromAnywhereMetrics
    * User experience analytics work from anywhere metrics.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereMetric[] $val The userExperienceAnalyticsWorkFromAnywhereMetrics
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics($val)
    {
        $this->_propDict["userExperienceAnalyticsWorkFromAnywhereMetrics"] = $val;
        return $this;
    }


     /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereModelPerformance
    * The user experience analytics work from anywhere model performance
     *
     * @return array|null The userExperienceAnalyticsWorkFromAnywhereModelPerformance
     */
    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance()
    {
        if (array_key_exists("userExperienceAnalyticsWorkFromAnywhereModelPerformance", $this->_propDict)) {
           return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereModelPerformance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userExperienceAnalyticsWorkFromAnywhereModelPerformance
    * The user experience analytics work from anywhere model performance
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance[] $val The userExperienceAnalyticsWorkFromAnywhereModelPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereModelPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsWorkFromAnywhereModelPerformance"] = $val;
        return $this;
    }


     /**
     * Gets the windowsMalwareInformation
    * The list of affected malware in the tenant.
     *
     * @return array|null The windowsMalwareInformation
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
    * @param WindowsMalwareInformation[] $val The windowsMalwareInformation
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareInformation($val)
    {
        $this->_propDict["windowsMalwareInformation"] = $val;
        return $this;
    }


     /**
     * Gets the importedWindowsAutopilotDeviceIdentities
    * Collection of imported Windows autopilot devices.
     *
     * @return array|null The importedWindowsAutopilotDeviceIdentities
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
    * @param ImportedWindowsAutopilotDeviceIdentity[] $val The importedWindowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedWindowsAutopilotDeviceIdentities($val)
    {
        $this->_propDict["importedWindowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }


     /**
     * Gets the windowsAutopilotDeviceIdentities
    * The Windows autopilot device identities contained collection.
     *
     * @return array|null The windowsAutopilotDeviceIdentities
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
    * @param WindowsAutopilotDeviceIdentity[] $val The windowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeviceIdentities($val)
    {
        $this->_propDict["windowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }


     /**
     * Gets the notificationMessageTemplates
    * The Notification Message Templates.
     *
     * @return array|null The notificationMessageTemplates
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
    * @param NotificationMessageTemplate[] $val The notificationMessageTemplates
    *
    * @return DeviceManagement
    */
    public function setNotificationMessageTemplates($val)
    {
        $this->_propDict["notificationMessageTemplates"] = $val;
        return $this;
    }


     /**
     * Gets the resourceOperations
    * The Resource Operations.
     *
     * @return array|null The resourceOperations
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
    * @param ResourceOperation[] $val The resourceOperations
    *
    * @return DeviceManagement
    */
    public function setResourceOperations($val)
    {
        $this->_propDict["resourceOperations"] = $val;
        return $this;
    }


     /**
     * Gets the roleAssignments
    * The Role Assignments.
     *
     * @return array|null The roleAssignments
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
    * @param DeviceAndAppManagementRoleAssignment[] $val The roleAssignments
    *
    * @return DeviceManagement
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }


     /**
     * Gets the roleDefinitions
    * The Role Definitions.
     *
     * @return array|null The roleDefinitions
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
    * @param RoleDefinition[] $val The roleDefinitions
    *
    * @return DeviceManagement
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the remoteAssistancePartners
    * The remote assist partners.
     *
     * @return array|null The remoteAssistancePartners
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
    * @param RemoteAssistancePartner[] $val The remoteAssistancePartners
    *
    * @return DeviceManagement
    */
    public function setRemoteAssistancePartners($val)
    {
        $this->_propDict["remoteAssistancePartners"] = $val;
        return $this;
    }

    /**
    * Gets the reports
    * Reports singleton
    *
    * @return DeviceManagementReports|null The reports
    */
    public function getReports()
    {
        if (array_key_exists("reports", $this->_propDict)) {
            if (is_a($this->_propDict["reports"], "\Microsoft\Graph\Model\DeviceManagementReports") || is_null($this->_propDict["reports"])) {
                return $this->_propDict["reports"];
            } else {
                $this->_propDict["reports"] = new DeviceManagementReports($this->_propDict["reports"]);
                return $this->_propDict["reports"];
            }
        }
        return null;
    }

    /**
    * Sets the reports
    * Reports singleton
    *
    * @param DeviceManagementReports $val The reports
    *
    * @return DeviceManagement
    */
    public function setReports($val)
    {
        $this->_propDict["reports"] = $val;
        return $this;
    }


     /**
     * Gets the telecomExpenseManagementPartners
    * The telecom expense management partners.
     *
     * @return array|null The telecomExpenseManagementPartners
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
    * @param TelecomExpenseManagementPartner[] $val The telecomExpenseManagementPartners
    *
    * @return DeviceManagement
    */
    public function setTelecomExpenseManagementPartners($val)
    {
        $this->_propDict["telecomExpenseManagementPartners"] = $val;
        return $this;
    }


     /**
     * Gets the troubleshootingEvents
    * The list of troubleshooting events for the tenant.
     *
     * @return array|null The troubleshootingEvents
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
    * @param DeviceManagementTroubleshootingEvent[] $val The troubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setTroubleshootingEvents($val)
    {
        $this->_propDict["troubleshootingEvents"] = $val;
        return $this;
    }


     /**
     * Gets the windowsInformationProtectionAppLearningSummaries
    * The windows information protection app learning summaries.
     *
     * @return array|null The windowsInformationProtectionAppLearningSummaries
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
    * @param WindowsInformationProtectionAppLearningSummary[] $val The windowsInformationProtectionAppLearningSummaries
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
     * @return array|null The windowsInformationProtectionNetworkLearningSummaries
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
    * @param WindowsInformationProtectionNetworkLearningSummary[] $val The windowsInformationProtectionNetworkLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries($val)
    {
        $this->_propDict["windowsInformationProtectionNetworkLearningSummaries"] = $val;
        return $this;
    }

}

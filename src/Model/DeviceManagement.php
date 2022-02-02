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
    * Intune Account ID for given tenant
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
    * Intune Account ID for given tenant
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
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Microsoft\Graph\Model\DeviceManagementSettings")) {
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
        if (array_key_exists("intuneBrand", $this->_propDict) && !is_null($this->_propDict["intuneBrand"])) {
            if (is_a($this->_propDict["intuneBrand"], "\Microsoft\Graph\Model\IntuneBrand")) {
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
    * Gets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @return DeviceManagementSubscriptionState|null The subscriptionState
    */
    public function getSubscriptionState()
    {
        if (array_key_exists("subscriptionState", $this->_propDict) && !is_null($this->_propDict["subscriptionState"])) {
            if (is_a($this->_propDict["subscriptionState"], "\Microsoft\Graph\Model\DeviceManagementSubscriptionState")) {
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
     * Gets the termsAndConditions
    * The terms and conditions associated with device management of the company.
     *
     * @return TermsAndConditions[]|null The termsAndConditions
     */
    public function getTermsAndConditions()
    {
        if (array_key_exists('termsAndConditions', $this->_propDict) && !is_null($this->_propDict['termsAndConditions'])) {
            $termsAndConditions = [];
            if (count($this->_propDict['termsAndConditions']) > 0 && is_a($this->_propDict['termsAndConditions'][0], 'TermsAndConditions')) {
                return $this->_propDict['termsAndConditions'];
            }
            foreach ($this->_propDict['termsAndConditions'] as $singleValue) {
                $termsAndConditions []= new TermsAndConditions($singleValue);
            }
            $this->_propDict['termsAndConditions'] = $termsAndConditions;
            return $this->_propDict['termsAndConditions'];
        }
        return null;
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
     * Gets the deviceCompliancePolicies
    * The device compliance policies.
     *
     * @return DeviceCompliancePolicy[]|null The deviceCompliancePolicies
     */
    public function getDeviceCompliancePolicies()
    {
        if (array_key_exists('deviceCompliancePolicies', $this->_propDict) && !is_null($this->_propDict['deviceCompliancePolicies'])) {
            $deviceCompliancePolicies = [];
            if (count($this->_propDict['deviceCompliancePolicies']) > 0 && is_a($this->_propDict['deviceCompliancePolicies'][0], 'DeviceCompliancePolicy')) {
                return $this->_propDict['deviceCompliancePolicies'];
            }
            foreach ($this->_propDict['deviceCompliancePolicies'] as $singleValue) {
                $deviceCompliancePolicies []= new DeviceCompliancePolicy($singleValue);
            }
            $this->_propDict['deviceCompliancePolicies'] = $deviceCompliancePolicies;
            return $this->_propDict['deviceCompliancePolicies'];
        }
        return null;
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
        if (array_key_exists("deviceCompliancePolicyDeviceStateSummary", $this->_propDict) && !is_null($this->_propDict["deviceCompliancePolicyDeviceStateSummary"])) {
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "\Microsoft\Graph\Model\DeviceCompliancePolicyDeviceStateSummary")) {
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
     * @return DeviceCompliancePolicySettingStateSummary[]|null The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists('deviceCompliancePolicySettingStateSummaries', $this->_propDict) && !is_null($this->_propDict['deviceCompliancePolicySettingStateSummaries'])) {
            $deviceCompliancePolicySettingStateSummaries = [];
            if (count($this->_propDict['deviceCompliancePolicySettingStateSummaries']) > 0 && is_a($this->_propDict['deviceCompliancePolicySettingStateSummaries'][0], 'DeviceCompliancePolicySettingStateSummary')) {
                return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
            }
            foreach ($this->_propDict['deviceCompliancePolicySettingStateSummaries'] as $singleValue) {
                $deviceCompliancePolicySettingStateSummaries []= new DeviceCompliancePolicySettingStateSummary($singleValue);
            }
            $this->_propDict['deviceCompliancePolicySettingStateSummaries'] = $deviceCompliancePolicySettingStateSummaries;
            return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
        }
        return null;
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
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict) && !is_null($this->_propDict["deviceConfigurationDeviceStateSummaries"])) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "\Microsoft\Graph\Model\DeviceConfigurationDeviceStateSummary")) {
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
     * @return DeviceConfiguration[]|null The deviceConfigurations
     */
    public function getDeviceConfigurations()
    {
        if (array_key_exists('deviceConfigurations', $this->_propDict) && !is_null($this->_propDict['deviceConfigurations'])) {
            $deviceConfigurations = [];
            if (count($this->_propDict['deviceConfigurations']) > 0 && is_a($this->_propDict['deviceConfigurations'][0], 'DeviceConfiguration')) {
                return $this->_propDict['deviceConfigurations'];
            }
            foreach ($this->_propDict['deviceConfigurations'] as $singleValue) {
                $deviceConfigurations []= new DeviceConfiguration($singleValue);
            }
            $this->_propDict['deviceConfigurations'] = $deviceConfigurations;
            return $this->_propDict['deviceConfigurations'];
        }
        return null;
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
     * @return IosUpdateDeviceStatus[]|null The iosUpdateStatuses
     */
    public function getIosUpdateStatuses()
    {
        if (array_key_exists('iosUpdateStatuses', $this->_propDict) && !is_null($this->_propDict['iosUpdateStatuses'])) {
            $iosUpdateStatuses = [];
            if (count($this->_propDict['iosUpdateStatuses']) > 0 && is_a($this->_propDict['iosUpdateStatuses'][0], 'IosUpdateDeviceStatus')) {
                return $this->_propDict['iosUpdateStatuses'];
            }
            foreach ($this->_propDict['iosUpdateStatuses'] as $singleValue) {
                $iosUpdateStatuses []= new IosUpdateDeviceStatus($singleValue);
            }
            $this->_propDict['iosUpdateStatuses'] = $iosUpdateStatuses;
            return $this->_propDict['iosUpdateStatuses'];
        }
        return null;
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
        if (array_key_exists("softwareUpdateStatusSummary", $this->_propDict) && !is_null($this->_propDict["softwareUpdateStatusSummary"])) {
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "\Microsoft\Graph\Model\SoftwareUpdateStatusSummary")) {
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
     * @return ComplianceManagementPartner[]|null The complianceManagementPartners
     */
    public function getComplianceManagementPartners()
    {
        if (array_key_exists('complianceManagementPartners', $this->_propDict) && !is_null($this->_propDict['complianceManagementPartners'])) {
            $complianceManagementPartners = [];
            if (count($this->_propDict['complianceManagementPartners']) > 0 && is_a($this->_propDict['complianceManagementPartners'][0], 'ComplianceManagementPartner')) {
                return $this->_propDict['complianceManagementPartners'];
            }
            foreach ($this->_propDict['complianceManagementPartners'] as $singleValue) {
                $complianceManagementPartners []= new ComplianceManagementPartner($singleValue);
            }
            $this->_propDict['complianceManagementPartners'] = $complianceManagementPartners;
            return $this->_propDict['complianceManagementPartners'];
        }
        return null;
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
        if (array_key_exists("conditionalAccessSettings", $this->_propDict) && !is_null($this->_propDict["conditionalAccessSettings"])) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "\Microsoft\Graph\Model\OnPremisesConditionalAccessSettings")) {
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
     * @return DeviceCategory[]|null The deviceCategories
     */
    public function getDeviceCategories()
    {
        if (array_key_exists('deviceCategories', $this->_propDict) && !is_null($this->_propDict['deviceCategories'])) {
            $deviceCategories = [];
            if (count($this->_propDict['deviceCategories']) > 0 && is_a($this->_propDict['deviceCategories'][0], 'DeviceCategory')) {
                return $this->_propDict['deviceCategories'];
            }
            foreach ($this->_propDict['deviceCategories'] as $singleValue) {
                $deviceCategories []= new DeviceCategory($singleValue);
            }
            $this->_propDict['deviceCategories'] = $deviceCategories;
            return $this->_propDict['deviceCategories'];
        }
        return null;
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
     * @return DeviceEnrollmentConfiguration[]|null The deviceEnrollmentConfigurations
     */
    public function getDeviceEnrollmentConfigurations()
    {
        if (array_key_exists('deviceEnrollmentConfigurations', $this->_propDict) && !is_null($this->_propDict['deviceEnrollmentConfigurations'])) {
            $deviceEnrollmentConfigurations = [];
            if (count($this->_propDict['deviceEnrollmentConfigurations']) > 0 && is_a($this->_propDict['deviceEnrollmentConfigurations'][0], 'DeviceEnrollmentConfiguration')) {
                return $this->_propDict['deviceEnrollmentConfigurations'];
            }
            foreach ($this->_propDict['deviceEnrollmentConfigurations'] as $singleValue) {
                $deviceEnrollmentConfigurations []= new DeviceEnrollmentConfiguration($singleValue);
            }
            $this->_propDict['deviceEnrollmentConfigurations'] = $deviceEnrollmentConfigurations;
            return $this->_propDict['deviceEnrollmentConfigurations'];
        }
        return null;
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
     * @return DeviceManagementPartner[]|null The deviceManagementPartners
     */
    public function getDeviceManagementPartners()
    {
        if (array_key_exists('deviceManagementPartners', $this->_propDict) && !is_null($this->_propDict['deviceManagementPartners'])) {
            $deviceManagementPartners = [];
            if (count($this->_propDict['deviceManagementPartners']) > 0 && is_a($this->_propDict['deviceManagementPartners'][0], 'DeviceManagementPartner')) {
                return $this->_propDict['deviceManagementPartners'];
            }
            foreach ($this->_propDict['deviceManagementPartners'] as $singleValue) {
                $deviceManagementPartners []= new DeviceManagementPartner($singleValue);
            }
            $this->_propDict['deviceManagementPartners'] = $deviceManagementPartners;
            return $this->_propDict['deviceManagementPartners'];
        }
        return null;
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
     * @return DeviceManagementExchangeConnector[]|null The exchangeConnectors
     */
    public function getExchangeConnectors()
    {
        if (array_key_exists('exchangeConnectors', $this->_propDict) && !is_null($this->_propDict['exchangeConnectors'])) {
            $exchangeConnectors = [];
            if (count($this->_propDict['exchangeConnectors']) > 0 && is_a($this->_propDict['exchangeConnectors'][0], 'DeviceManagementExchangeConnector')) {
                return $this->_propDict['exchangeConnectors'];
            }
            foreach ($this->_propDict['exchangeConnectors'] as $singleValue) {
                $exchangeConnectors []= new DeviceManagementExchangeConnector($singleValue);
            }
            $this->_propDict['exchangeConnectors'] = $exchangeConnectors;
            return $this->_propDict['exchangeConnectors'];
        }
        return null;
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
     * @return MobileThreatDefenseConnector[]|null The mobileThreatDefenseConnectors
     */
    public function getMobileThreatDefenseConnectors()
    {
        if (array_key_exists('mobileThreatDefenseConnectors', $this->_propDict) && !is_null($this->_propDict['mobileThreatDefenseConnectors'])) {
            $mobileThreatDefenseConnectors = [];
            if (count($this->_propDict['mobileThreatDefenseConnectors']) > 0 && is_a($this->_propDict['mobileThreatDefenseConnectors'][0], 'MobileThreatDefenseConnector')) {
                return $this->_propDict['mobileThreatDefenseConnectors'];
            }
            foreach ($this->_propDict['mobileThreatDefenseConnectors'] as $singleValue) {
                $mobileThreatDefenseConnectors []= new MobileThreatDefenseConnector($singleValue);
            }
            $this->_propDict['mobileThreatDefenseConnectors'] = $mobileThreatDefenseConnectors;
            return $this->_propDict['mobileThreatDefenseConnectors'];
        }
        return null;
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
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict) && !is_null($this->_propDict["applePushNotificationCertificate"])) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "\Microsoft\Graph\Model\ApplePushNotificationCertificate")) {
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
     * @return DetectedApp[]|null The detectedApps
     */
    public function getDetectedApps()
    {
        if (array_key_exists('detectedApps', $this->_propDict) && !is_null($this->_propDict['detectedApps'])) {
            $detectedApps = [];
            if (count($this->_propDict['detectedApps']) > 0 && is_a($this->_propDict['detectedApps'][0], 'DetectedApp')) {
                return $this->_propDict['detectedApps'];
            }
            foreach ($this->_propDict['detectedApps'] as $singleValue) {
                $detectedApps []= new DetectedApp($singleValue);
            }
            $this->_propDict['detectedApps'] = $detectedApps;
            return $this->_propDict['detectedApps'];
        }
        return null;
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
        if (array_key_exists("managedDeviceOverview", $this->_propDict) && !is_null($this->_propDict["managedDeviceOverview"])) {
            if (is_a($this->_propDict["managedDeviceOverview"], "\Microsoft\Graph\Model\ManagedDeviceOverview")) {
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
     * @return ManagedDevice[]|null The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists('managedDevices', $this->_propDict) && !is_null($this->_propDict['managedDevices'])) {
            $managedDevices = [];
            if (count($this->_propDict['managedDevices']) > 0 && is_a($this->_propDict['managedDevices'][0], 'ManagedDevice')) {
                return $this->_propDict['managedDevices'];
            }
            foreach ($this->_propDict['managedDevices'] as $singleValue) {
                $managedDevices []= new ManagedDevice($singleValue);
            }
            $this->_propDict['managedDevices'] = $managedDevices;
            return $this->_propDict['managedDevices'];
        }
        return null;
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
     * Gets the importedWindowsAutopilotDeviceIdentities
    * Collection of imported Windows autopilot devices.
     *
     * @return ImportedWindowsAutopilotDeviceIdentity[]|null The importedWindowsAutopilotDeviceIdentities
     */
    public function getImportedWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists('importedWindowsAutopilotDeviceIdentities', $this->_propDict) && !is_null($this->_propDict['importedWindowsAutopilotDeviceIdentities'])) {
            $importedWindowsAutopilotDeviceIdentities = [];
            if (count($this->_propDict['importedWindowsAutopilotDeviceIdentities']) > 0 && is_a($this->_propDict['importedWindowsAutopilotDeviceIdentities'][0], 'ImportedWindowsAutopilotDeviceIdentity')) {
                return $this->_propDict['importedWindowsAutopilotDeviceIdentities'];
            }
            foreach ($this->_propDict['importedWindowsAutopilotDeviceIdentities'] as $singleValue) {
                $importedWindowsAutopilotDeviceIdentities []= new ImportedWindowsAutopilotDeviceIdentity($singleValue);
            }
            $this->_propDict['importedWindowsAutopilotDeviceIdentities'] = $importedWindowsAutopilotDeviceIdentities;
            return $this->_propDict['importedWindowsAutopilotDeviceIdentities'];
        }
        return null;
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
     * @return WindowsAutopilotDeviceIdentity[]|null The windowsAutopilotDeviceIdentities
     */
    public function getWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists('windowsAutopilotDeviceIdentities', $this->_propDict) && !is_null($this->_propDict['windowsAutopilotDeviceIdentities'])) {
            $windowsAutopilotDeviceIdentities = [];
            if (count($this->_propDict['windowsAutopilotDeviceIdentities']) > 0 && is_a($this->_propDict['windowsAutopilotDeviceIdentities'][0], 'WindowsAutopilotDeviceIdentity')) {
                return $this->_propDict['windowsAutopilotDeviceIdentities'];
            }
            foreach ($this->_propDict['windowsAutopilotDeviceIdentities'] as $singleValue) {
                $windowsAutopilotDeviceIdentities []= new WindowsAutopilotDeviceIdentity($singleValue);
            }
            $this->_propDict['windowsAutopilotDeviceIdentities'] = $windowsAutopilotDeviceIdentities;
            return $this->_propDict['windowsAutopilotDeviceIdentities'];
        }
        return null;
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
     * @return NotificationMessageTemplate[]|null The notificationMessageTemplates
     */
    public function getNotificationMessageTemplates()
    {
        if (array_key_exists('notificationMessageTemplates', $this->_propDict) && !is_null($this->_propDict['notificationMessageTemplates'])) {
            $notificationMessageTemplates = [];
            if (count($this->_propDict['notificationMessageTemplates']) > 0 && is_a($this->_propDict['notificationMessageTemplates'][0], 'NotificationMessageTemplate')) {
                return $this->_propDict['notificationMessageTemplates'];
            }
            foreach ($this->_propDict['notificationMessageTemplates'] as $singleValue) {
                $notificationMessageTemplates []= new NotificationMessageTemplate($singleValue);
            }
            $this->_propDict['notificationMessageTemplates'] = $notificationMessageTemplates;
            return $this->_propDict['notificationMessageTemplates'];
        }
        return null;
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
     * @return ResourceOperation[]|null The resourceOperations
     */
    public function getResourceOperations()
    {
        if (array_key_exists('resourceOperations', $this->_propDict) && !is_null($this->_propDict['resourceOperations'])) {
            $resourceOperations = [];
            if (count($this->_propDict['resourceOperations']) > 0 && is_a($this->_propDict['resourceOperations'][0], 'ResourceOperation')) {
                return $this->_propDict['resourceOperations'];
            }
            foreach ($this->_propDict['resourceOperations'] as $singleValue) {
                $resourceOperations []= new ResourceOperation($singleValue);
            }
            $this->_propDict['resourceOperations'] = $resourceOperations;
            return $this->_propDict['resourceOperations'];
        }
        return null;
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
     * @return DeviceAndAppManagementRoleAssignment[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
            $roleAssignments = [];
            if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'DeviceAndAppManagementRoleAssignment')) {
                return $this->_propDict['roleAssignments'];
            }
            foreach ($this->_propDict['roleAssignments'] as $singleValue) {
                $roleAssignments []= new DeviceAndAppManagementRoleAssignment($singleValue);
            }
            $this->_propDict['roleAssignments'] = $roleAssignments;
            return $this->_propDict['roleAssignments'];
        }
        return null;
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
     * @return RoleDefinition[]|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists('roleDefinitions', $this->_propDict) && !is_null($this->_propDict['roleDefinitions'])) {
            $roleDefinitions = [];
            if (count($this->_propDict['roleDefinitions']) > 0 && is_a($this->_propDict['roleDefinitions'][0], 'RoleDefinition')) {
                return $this->_propDict['roleDefinitions'];
            }
            foreach ($this->_propDict['roleDefinitions'] as $singleValue) {
                $roleDefinitions []= new RoleDefinition($singleValue);
            }
            $this->_propDict['roleDefinitions'] = $roleDefinitions;
            return $this->_propDict['roleDefinitions'];
        }
        return null;
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
     * @return RemoteAssistancePartner[]|null The remoteAssistancePartners
     */
    public function getRemoteAssistancePartners()
    {
        if (array_key_exists('remoteAssistancePartners', $this->_propDict) && !is_null($this->_propDict['remoteAssistancePartners'])) {
            $remoteAssistancePartners = [];
            if (count($this->_propDict['remoteAssistancePartners']) > 0 && is_a($this->_propDict['remoteAssistancePartners'][0], 'RemoteAssistancePartner')) {
                return $this->_propDict['remoteAssistancePartners'];
            }
            foreach ($this->_propDict['remoteAssistancePartners'] as $singleValue) {
                $remoteAssistancePartners []= new RemoteAssistancePartner($singleValue);
            }
            $this->_propDict['remoteAssistancePartners'] = $remoteAssistancePartners;
            return $this->_propDict['remoteAssistancePartners'];
        }
        return null;
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
        if (array_key_exists("reports", $this->_propDict) && !is_null($this->_propDict["reports"])) {
            if (is_a($this->_propDict["reports"], "\Microsoft\Graph\Model\DeviceManagementReports")) {
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
     * @return TelecomExpenseManagementPartner[]|null The telecomExpenseManagementPartners
     */
    public function getTelecomExpenseManagementPartners()
    {
        if (array_key_exists('telecomExpenseManagementPartners', $this->_propDict) && !is_null($this->_propDict['telecomExpenseManagementPartners'])) {
            $telecomExpenseManagementPartners = [];
            if (count($this->_propDict['telecomExpenseManagementPartners']) > 0 && is_a($this->_propDict['telecomExpenseManagementPartners'][0], 'TelecomExpenseManagementPartner')) {
                return $this->_propDict['telecomExpenseManagementPartners'];
            }
            foreach ($this->_propDict['telecomExpenseManagementPartners'] as $singleValue) {
                $telecomExpenseManagementPartners []= new TelecomExpenseManagementPartner($singleValue);
            }
            $this->_propDict['telecomExpenseManagementPartners'] = $telecomExpenseManagementPartners;
            return $this->_propDict['telecomExpenseManagementPartners'];
        }
        return null;
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
     * @return DeviceManagementTroubleshootingEvent[]|null The troubleshootingEvents
     */
    public function getTroubleshootingEvents()
    {
        if (array_key_exists('troubleshootingEvents', $this->_propDict) && !is_null($this->_propDict['troubleshootingEvents'])) {
            $troubleshootingEvents = [];
            if (count($this->_propDict['troubleshootingEvents']) > 0 && is_a($this->_propDict['troubleshootingEvents'][0], 'DeviceManagementTroubleshootingEvent')) {
                return $this->_propDict['troubleshootingEvents'];
            }
            foreach ($this->_propDict['troubleshootingEvents'] as $singleValue) {
                $troubleshootingEvents []= new DeviceManagementTroubleshootingEvent($singleValue);
            }
            $this->_propDict['troubleshootingEvents'] = $troubleshootingEvents;
            return $this->_propDict['troubleshootingEvents'];
        }
        return null;
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
     * @return WindowsInformationProtectionAppLearningSummary[]|null The windowsInformationProtectionAppLearningSummaries
     */
    public function getWindowsInformationProtectionAppLearningSummaries()
    {
        if (array_key_exists('windowsInformationProtectionAppLearningSummaries', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionAppLearningSummaries'])) {
            $windowsInformationProtectionAppLearningSummaries = [];
            if (count($this->_propDict['windowsInformationProtectionAppLearningSummaries']) > 0 && is_a($this->_propDict['windowsInformationProtectionAppLearningSummaries'][0], 'WindowsInformationProtectionAppLearningSummary')) {
                return $this->_propDict['windowsInformationProtectionAppLearningSummaries'];
            }
            foreach ($this->_propDict['windowsInformationProtectionAppLearningSummaries'] as $singleValue) {
                $windowsInformationProtectionAppLearningSummaries []= new WindowsInformationProtectionAppLearningSummary($singleValue);
            }
            $this->_propDict['windowsInformationProtectionAppLearningSummaries'] = $windowsInformationProtectionAppLearningSummaries;
            return $this->_propDict['windowsInformationProtectionAppLearningSummaries'];
        }
        return null;
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
     * @return WindowsInformationProtectionNetworkLearningSummary[]|null The windowsInformationProtectionNetworkLearningSummaries
     */
    public function getWindowsInformationProtectionNetworkLearningSummaries()
    {
        if (array_key_exists('windowsInformationProtectionNetworkLearningSummaries', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'])) {
            $windowsInformationProtectionNetworkLearningSummaries = [];
            if (count($this->_propDict['windowsInformationProtectionNetworkLearningSummaries']) > 0 && is_a($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'][0], 'WindowsInformationProtectionNetworkLearningSummary')) {
                return $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'];
            }
            foreach ($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'] as $singleValue) {
                $windowsInformationProtectionNetworkLearningSummaries []= new WindowsInformationProtectionNetworkLearningSummary($singleValue);
            }
            $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'] = $windowsInformationProtectionNetworkLearningSummaries;
            return $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'];
        }
        return null;
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

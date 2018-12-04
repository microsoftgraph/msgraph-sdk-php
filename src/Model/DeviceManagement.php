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
namespace Microsoft\Graph\Model;

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
            if (is_a($this->_propDict["subscriptionState"], "Microsoft\Graph\Model\DeviceManagementSubscriptionState")) {
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
    * Gets the settings
    *
    * @return DeviceManagementSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Model\DeviceManagementSettings")) {
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
    * Gets the intuneBrand
    *
    * @return IntuneBrand The intuneBrand
    */
    public function getIntuneBrand()
    {
        if (array_key_exists("intuneBrand", $this->_propDict)) {
            if (is_a($this->_propDict["intuneBrand"], "Microsoft\Graph\Model\IntuneBrand")) {
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
    * Gets the applePushNotificationCertificate
    *
    * @return ApplePushNotificationCertificate The applePushNotificationCertificate
    */
    public function getApplePushNotificationCertificate()
    {
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "Microsoft\Graph\Model\ApplePushNotificationCertificate")) {
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
    * Gets the managedDeviceOverview
    *
    * @return ManagedDeviceOverview The managedDeviceOverview
    */
    public function getManagedDeviceOverview()
    {
        if (array_key_exists("managedDeviceOverview", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOverview"], "Microsoft\Graph\Model\ManagedDeviceOverview")) {
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
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "Microsoft\Graph\Model\SoftwareUpdateStatusSummary")) {
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
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "Microsoft\Graph\Model\DeviceCompliancePolicyDeviceStateSummary")) {
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
    * Gets the deviceConfigurationDeviceStateSummaries
    *
    * @return DeviceConfigurationDeviceStateSummary The deviceConfigurationDeviceStateSummaries
    */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "Microsoft\Graph\Model\DeviceConfigurationDeviceStateSummary")) {
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
    * Gets the conditionalAccessSettings
    *
    * @return OnPremisesConditionalAccessSettings The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "Microsoft\Graph\Model\OnPremisesConditionalAccessSettings")) {
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
    
}
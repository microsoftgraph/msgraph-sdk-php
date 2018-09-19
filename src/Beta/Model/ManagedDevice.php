<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDevice File
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
* ManagedDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedDevice extends Entity
{
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return ManagedDevice
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    *
    * @param string $val The deviceName
    *
    * @return ManagedDevice
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the hardwareInformation
    *
    * @return HardwareInformation The hardwareInformation
    */
    public function getHardwareInformation()
    {
        if (array_key_exists("hardwareInformation", $this->_propDict)) {
            if (is_a($this->_propDict["hardwareInformation"], "Microsoft\Graph\Beta\Model\HardwareInformation")) {
                return $this->_propDict["hardwareInformation"];
            } else {
                $this->_propDict["hardwareInformation"] = new HardwareInformation($this->_propDict["hardwareInformation"]);
                return $this->_propDict["hardwareInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hardwareInformation
    *
    * @param HardwareInformation $val The hardwareInformation
    *
    * @return ManagedDevice
    */
    public function setHardwareInformation($val)
    {
        $this->_propDict["hardwareInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerType
    *
    * @return OwnerType The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            if (is_a($this->_propDict["ownerType"], "Microsoft\Graph\Beta\Model\OwnerType")) {
                return $this->_propDict["ownerType"];
            } else {
                $this->_propDict["ownerType"] = new OwnerType($this->_propDict["ownerType"]);
                return $this->_propDict["ownerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ownerType
    *
    * @param OwnerType $val The ownerType
    *
    * @return ManagedDevice
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceOwnerType
    *
    * @return ManagedDeviceOwnerType The managedDeviceOwnerType
    */
    public function getManagedDeviceOwnerType()
    {
        if (array_key_exists("managedDeviceOwnerType", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOwnerType"], "Microsoft\Graph\Beta\Model\ManagedDeviceOwnerType")) {
                return $this->_propDict["managedDeviceOwnerType"];
            } else {
                $this->_propDict["managedDeviceOwnerType"] = new ManagedDeviceOwnerType($this->_propDict["managedDeviceOwnerType"]);
                return $this->_propDict["managedDeviceOwnerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceOwnerType
    *
    * @param ManagedDeviceOwnerType $val The managedDeviceOwnerType
    *
    * @return ManagedDevice
    */
    public function setManagedDeviceOwnerType($val)
    {
        $this->_propDict["managedDeviceOwnerType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceActionResults
     *
     * @return array The deviceActionResults
     */
    public function getDeviceActionResults()
    {
        if (array_key_exists("deviceActionResults", $this->_propDict)) {
           return $this->_propDict["deviceActionResults"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceActionResults
    *
    * @param DeviceActionResult $val The deviceActionResults
    *
    * @return ManagedDevice
    */
    public function setDeviceActionResults($val)
    {
		$this->_propDict["deviceActionResults"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementState
    *
    * @return ManagementState The managementState
    */
    public function getManagementState()
    {
        if (array_key_exists("managementState", $this->_propDict)) {
            if (is_a($this->_propDict["managementState"], "Microsoft\Graph\Beta\Model\ManagementState")) {
                return $this->_propDict["managementState"];
            } else {
                $this->_propDict["managementState"] = new ManagementState($this->_propDict["managementState"]);
                return $this->_propDict["managementState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementState
    *
    * @param ManagementState $val The managementState
    *
    * @return ManagedDevice
    */
    public function setManagementState($val)
    {
        $this->_propDict["managementState"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrolledDateTime
    *
    * @return \DateTime The enrolledDateTime
    */
    public function getEnrolledDateTime()
    {
        if (array_key_exists("enrolledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["enrolledDateTime"], "\DateTime")) {
                return $this->_propDict["enrolledDateTime"];
            } else {
                $this->_propDict["enrolledDateTime"] = new \DateTime($this->_propDict["enrolledDateTime"]);
                return $this->_propDict["enrolledDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrolledDateTime
    *
    * @param \DateTime $val The enrolledDateTime
    *
    * @return ManagedDevice
    */
    public function setEnrolledDateTime($val)
    {
        $this->_propDict["enrolledDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return ManagedDevice
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the chassisType
    *
    * @return ChassisType The chassisType
    */
    public function getChassisType()
    {
        if (array_key_exists("chassisType", $this->_propDict)) {
            if (is_a($this->_propDict["chassisType"], "Microsoft\Graph\Beta\Model\ChassisType")) {
                return $this->_propDict["chassisType"];
            } else {
                $this->_propDict["chassisType"] = new ChassisType($this->_propDict["chassisType"]);
                return $this->_propDict["chassisType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the chassisType
    *
    * @param ChassisType $val The chassisType
    *
    * @return ManagedDevice
    */
    public function setChassisType($val)
    {
        $this->_propDict["chassisType"] = $val;
        return $this;
    }
    
    /**
    * Gets the operatingSystem
    *
    * @return string The operatingSystem
    */
    public function getOperatingSystem()
    {
        if (array_key_exists("operatingSystem", $this->_propDict)) {
            return $this->_propDict["operatingSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the operatingSystem
    *
    * @param string $val The operatingSystem
    *
    * @return ManagedDevice
    */
    public function setOperatingSystem($val)
    {
        $this->_propDict["operatingSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    *
    * @return DeviceType The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceType"], "Microsoft\Graph\Beta\Model\DeviceType")) {
                return $this->_propDict["deviceType"];
            } else {
                $this->_propDict["deviceType"] = new DeviceType($this->_propDict["deviceType"]);
                return $this->_propDict["deviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceType
    *
    * @param DeviceType $val The deviceType
    *
    * @return ManagedDevice
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the complianceState
    *
    * @return ComplianceState The complianceState
    */
    public function getComplianceState()
    {
        if (array_key_exists("complianceState", $this->_propDict)) {
            if (is_a($this->_propDict["complianceState"], "Microsoft\Graph\Beta\Model\ComplianceState")) {
                return $this->_propDict["complianceState"];
            } else {
                $this->_propDict["complianceState"] = new ComplianceState($this->_propDict["complianceState"]);
                return $this->_propDict["complianceState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceState
    *
    * @param ComplianceState $val The complianceState
    *
    * @return ManagedDevice
    */
    public function setComplianceState($val)
    {
        $this->_propDict["complianceState"] = $val;
        return $this;
    }
    
    /**
    * Gets the jailBroken
    *
    * @return string The jailBroken
    */
    public function getJailBroken()
    {
        if (array_key_exists("jailBroken", $this->_propDict)) {
            return $this->_propDict["jailBroken"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the jailBroken
    *
    * @param string $val The jailBroken
    *
    * @return ManagedDevice
    */
    public function setJailBroken($val)
    {
        $this->_propDict["jailBroken"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementAgent
    *
    * @return ManagementAgentType The managementAgent
    */
    public function getManagementAgent()
    {
        if (array_key_exists("managementAgent", $this->_propDict)) {
            if (is_a($this->_propDict["managementAgent"], "Microsoft\Graph\Beta\Model\ManagementAgentType")) {
                return $this->_propDict["managementAgent"];
            } else {
                $this->_propDict["managementAgent"] = new ManagementAgentType($this->_propDict["managementAgent"]);
                return $this->_propDict["managementAgent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementAgent
    *
    * @param ManagementAgentType $val The managementAgent
    *
    * @return ManagedDevice
    */
    public function setManagementAgent($val)
    {
        $this->_propDict["managementAgent"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    *
    * @param string $val The osVersion
    *
    * @return ManagedDevice
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the easActivated
    *
    * @return bool The easActivated
    */
    public function getEasActivated()
    {
        if (array_key_exists("easActivated", $this->_propDict)) {
            return $this->_propDict["easActivated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the easActivated
    *
    * @param bool $val The easActivated
    *
    * @return ManagedDevice
    */
    public function setEasActivated($val)
    {
        $this->_propDict["easActivated"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the easDeviceId
    *
    * @return string The easDeviceId
    */
    public function getEasDeviceId()
    {
        if (array_key_exists("easDeviceId", $this->_propDict)) {
            return $this->_propDict["easDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the easDeviceId
    *
    * @param string $val The easDeviceId
    *
    * @return ManagedDevice
    */
    public function setEasDeviceId($val)
    {
        $this->_propDict["easDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the easActivationDateTime
    *
    * @return \DateTime The easActivationDateTime
    */
    public function getEasActivationDateTime()
    {
        if (array_key_exists("easActivationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["easActivationDateTime"], "\DateTime")) {
                return $this->_propDict["easActivationDateTime"];
            } else {
                $this->_propDict["easActivationDateTime"] = new \DateTime($this->_propDict["easActivationDateTime"]);
                return $this->_propDict["easActivationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the easActivationDateTime
    *
    * @param \DateTime $val The easActivationDateTime
    *
    * @return ManagedDevice
    */
    public function setEasActivationDateTime($val)
    {
        $this->_propDict["easActivationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the aadRegistered
    *
    * @return bool The aadRegistered
    */
    public function getAadRegistered()
    {
        if (array_key_exists("aadRegistered", $this->_propDict)) {
            return $this->_propDict["aadRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aadRegistered
    *
    * @param bool $val The aadRegistered
    *
    * @return ManagedDevice
    */
    public function setAadRegistered($val)
    {
        $this->_propDict["aadRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the azureADRegistered
    *
    * @return bool The azureADRegistered
    */
    public function getAzureADRegistered()
    {
        if (array_key_exists("azureADRegistered", $this->_propDict)) {
            return $this->_propDict["azureADRegistered"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureADRegistered
    *
    * @param bool $val The azureADRegistered
    *
    * @return ManagedDevice
    */
    public function setAzureADRegistered($val)
    {
        $this->_propDict["azureADRegistered"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceEnrollmentType
    *
    * @return DeviceEnrollmentType The deviceEnrollmentType
    */
    public function getDeviceEnrollmentType()
    {
        if (array_key_exists("deviceEnrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceEnrollmentType"], "Microsoft\Graph\Beta\Model\DeviceEnrollmentType")) {
                return $this->_propDict["deviceEnrollmentType"];
            } else {
                $this->_propDict["deviceEnrollmentType"] = new DeviceEnrollmentType($this->_propDict["deviceEnrollmentType"]);
                return $this->_propDict["deviceEnrollmentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceEnrollmentType
    *
    * @param DeviceEnrollmentType $val The deviceEnrollmentType
    *
    * @return ManagedDevice
    */
    public function setDeviceEnrollmentType($val)
    {
        $this->_propDict["deviceEnrollmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the lostModeState
    *
    * @return LostModeState The lostModeState
    */
    public function getLostModeState()
    {
        if (array_key_exists("lostModeState", $this->_propDict)) {
            if (is_a($this->_propDict["lostModeState"], "Microsoft\Graph\Beta\Model\LostModeState")) {
                return $this->_propDict["lostModeState"];
            } else {
                $this->_propDict["lostModeState"] = new LostModeState($this->_propDict["lostModeState"]);
                return $this->_propDict["lostModeState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lostModeState
    *
    * @param LostModeState $val The lostModeState
    *
    * @return ManagedDevice
    */
    public function setLostModeState($val)
    {
        $this->_propDict["lostModeState"] = $val;
        return $this;
    }
    
    /**
    * Gets the activationLockBypassCode
    *
    * @return string The activationLockBypassCode
    */
    public function getActivationLockBypassCode()
    {
        if (array_key_exists("activationLockBypassCode", $this->_propDict)) {
            return $this->_propDict["activationLockBypassCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationLockBypassCode
    *
    * @param string $val The activationLockBypassCode
    *
    * @return ManagedDevice
    */
    public function setActivationLockBypassCode($val)
    {
        $this->_propDict["activationLockBypassCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddress
    *
    * @return string The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailAddress
    *
    * @param string $val The emailAddress
    *
    * @return ManagedDevice
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureActiveDirectoryDeviceId
    *
    * @return string The azureActiveDirectoryDeviceId
    */
    public function getAzureActiveDirectoryDeviceId()
    {
        if (array_key_exists("azureActiveDirectoryDeviceId", $this->_propDict)) {
            return $this->_propDict["azureActiveDirectoryDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureActiveDirectoryDeviceId
    *
    * @param string $val The azureActiveDirectoryDeviceId
    *
    * @return ManagedDevice
    */
    public function setAzureActiveDirectoryDeviceId($val)
    {
        $this->_propDict["azureActiveDirectoryDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureADDeviceId
    *
    * @return string The azureADDeviceId
    */
    public function getAzureADDeviceId()
    {
        if (array_key_exists("azureADDeviceId", $this->_propDict)) {
            return $this->_propDict["azureADDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureADDeviceId
    *
    * @param string $val The azureADDeviceId
    *
    * @return ManagedDevice
    */
    public function setAzureADDeviceId($val)
    {
        $this->_propDict["azureADDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceRegistrationState
    *
    * @return DeviceRegistrationState The deviceRegistrationState
    */
    public function getDeviceRegistrationState()
    {
        if (array_key_exists("deviceRegistrationState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceRegistrationState"], "Microsoft\Graph\Beta\Model\DeviceRegistrationState")) {
                return $this->_propDict["deviceRegistrationState"];
            } else {
                $this->_propDict["deviceRegistrationState"] = new DeviceRegistrationState($this->_propDict["deviceRegistrationState"]);
                return $this->_propDict["deviceRegistrationState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceRegistrationState
    *
    * @param DeviceRegistrationState $val The deviceRegistrationState
    *
    * @return ManagedDevice
    */
    public function setDeviceRegistrationState($val)
    {
        $this->_propDict["deviceRegistrationState"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCategoryDisplayName
    *
    * @return string The deviceCategoryDisplayName
    */
    public function getDeviceCategoryDisplayName()
    {
        if (array_key_exists("deviceCategoryDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceCategoryDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCategoryDisplayName
    *
    * @param string $val The deviceCategoryDisplayName
    *
    * @return ManagedDevice
    */
    public function setDeviceCategoryDisplayName($val)
    {
        $this->_propDict["deviceCategoryDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSupervised
    *
    * @return bool The isSupervised
    */
    public function getIsSupervised()
    {
        if (array_key_exists("isSupervised", $this->_propDict)) {
            return $this->_propDict["isSupervised"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSupervised
    *
    * @param bool $val The isSupervised
    *
    * @return ManagedDevice
    */
    public function setIsSupervised($val)
    {
        $this->_propDict["isSupervised"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the exchangeLastSuccessfulSyncDateTime
    *
    * @return \DateTime The exchangeLastSuccessfulSyncDateTime
    */
    public function getExchangeLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("exchangeLastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["exchangeLastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["exchangeLastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["exchangeLastSuccessfulSyncDateTime"]);
                return $this->_propDict["exchangeLastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeLastSuccessfulSyncDateTime
    *
    * @param \DateTime $val The exchangeLastSuccessfulSyncDateTime
    *
    * @return ManagedDevice
    */
    public function setExchangeLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["exchangeLastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeAccessState
    *
    * @return DeviceManagementExchangeAccessState The exchangeAccessState
    */
    public function getExchangeAccessState()
    {
        if (array_key_exists("exchangeAccessState", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeAccessState"], "Microsoft\Graph\Beta\Model\DeviceManagementExchangeAccessState")) {
                return $this->_propDict["exchangeAccessState"];
            } else {
                $this->_propDict["exchangeAccessState"] = new DeviceManagementExchangeAccessState($this->_propDict["exchangeAccessState"]);
                return $this->_propDict["exchangeAccessState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeAccessState
    *
    * @param DeviceManagementExchangeAccessState $val The exchangeAccessState
    *
    * @return ManagedDevice
    */
    public function setExchangeAccessState($val)
    {
        $this->_propDict["exchangeAccessState"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeAccessStateReason
    *
    * @return DeviceManagementExchangeAccessStateReason The exchangeAccessStateReason
    */
    public function getExchangeAccessStateReason()
    {
        if (array_key_exists("exchangeAccessStateReason", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeAccessStateReason"], "Microsoft\Graph\Beta\Model\DeviceManagementExchangeAccessStateReason")) {
                return $this->_propDict["exchangeAccessStateReason"];
            } else {
                $this->_propDict["exchangeAccessStateReason"] = new DeviceManagementExchangeAccessStateReason($this->_propDict["exchangeAccessStateReason"]);
                return $this->_propDict["exchangeAccessStateReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeAccessStateReason
    *
    * @param DeviceManagementExchangeAccessStateReason $val The exchangeAccessStateReason
    *
    * @return ManagedDevice
    */
    public function setExchangeAccessStateReason($val)
    {
        $this->_propDict["exchangeAccessStateReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the remoteAssistanceSessionUrl
    *
    * @return string The remoteAssistanceSessionUrl
    */
    public function getRemoteAssistanceSessionUrl()
    {
        if (array_key_exists("remoteAssistanceSessionUrl", $this->_propDict)) {
            return $this->_propDict["remoteAssistanceSessionUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remoteAssistanceSessionUrl
    *
    * @param string $val The remoteAssistanceSessionUrl
    *
    * @return ManagedDevice
    */
    public function setRemoteAssistanceSessionUrl($val)
    {
        $this->_propDict["remoteAssistanceSessionUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the remoteAssistanceSessionErrorDetails
    *
    * @return string The remoteAssistanceSessionErrorDetails
    */
    public function getRemoteAssistanceSessionErrorDetails()
    {
        if (array_key_exists("remoteAssistanceSessionErrorDetails", $this->_propDict)) {
            return $this->_propDict["remoteAssistanceSessionErrorDetails"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remoteAssistanceSessionErrorDetails
    *
    * @param string $val The remoteAssistanceSessionErrorDetails
    *
    * @return ManagedDevice
    */
    public function setRemoteAssistanceSessionErrorDetails($val)
    {
        $this->_propDict["remoteAssistanceSessionErrorDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEncrypted
    *
    * @return bool The isEncrypted
    */
    public function getIsEncrypted()
    {
        if (array_key_exists("isEncrypted", $this->_propDict)) {
            return $this->_propDict["isEncrypted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEncrypted
    *
    * @param bool $val The isEncrypted
    *
    * @return ManagedDevice
    */
    public function setIsEncrypted($val)
    {
        $this->_propDict["isEncrypted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return ManagedDevice
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    *
    * @param string $val The model
    *
    * @return ManagedDevice
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    *
    * @param string $val The manufacturer
    *
    * @return ManagedDevice
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the imei
    *
    * @return string The imei
    */
    public function getImei()
    {
        if (array_key_exists("imei", $this->_propDict)) {
            return $this->_propDict["imei"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imei
    *
    * @param string $val The imei
    *
    * @return ManagedDevice
    */
    public function setImei($val)
    {
        $this->_propDict["imei"] = $val;
        return $this;
    }
    
    /**
    * Gets the complianceGracePeriodExpirationDateTime
    *
    * @return \DateTime The complianceGracePeriodExpirationDateTime
    */
    public function getComplianceGracePeriodExpirationDateTime()
    {
        if (array_key_exists("complianceGracePeriodExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceGracePeriodExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            } else {
                $this->_propDict["complianceGracePeriodExpirationDateTime"] = new \DateTime($this->_propDict["complianceGracePeriodExpirationDateTime"]);
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceGracePeriodExpirationDateTime
    *
    * @param \DateTime $val The complianceGracePeriodExpirationDateTime
    *
    * @return ManagedDevice
    */
    public function setComplianceGracePeriodExpirationDateTime($val)
    {
        $this->_propDict["complianceGracePeriodExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    *
    * @param string $val The serialNumber
    *
    * @return ManagedDevice
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the phoneNumber
    *
    * @return string The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phoneNumber
    *
    * @param string $val The phoneNumber
    *
    * @return ManagedDevice
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidSecurityPatchLevel
    *
    * @return string The androidSecurityPatchLevel
    */
    public function getAndroidSecurityPatchLevel()
    {
        if (array_key_exists("androidSecurityPatchLevel", $this->_propDict)) {
            return $this->_propDict["androidSecurityPatchLevel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidSecurityPatchLevel
    *
    * @param string $val The androidSecurityPatchLevel
    *
    * @return ManagedDevice
    */
    public function setAndroidSecurityPatchLevel($val)
    {
        $this->_propDict["androidSecurityPatchLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    *
    * @param string $val The userDisplayName
    *
    * @return ManagedDevice
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationManagerClientEnabledFeatures
    *
    * @return ConfigurationManagerClientEnabledFeatures The configurationManagerClientEnabledFeatures
    */
    public function getConfigurationManagerClientEnabledFeatures()
    {
        if (array_key_exists("configurationManagerClientEnabledFeatures", $this->_propDict)) {
            if (is_a($this->_propDict["configurationManagerClientEnabledFeatures"], "Microsoft\Graph\Beta\Model\ConfigurationManagerClientEnabledFeatures")) {
                return $this->_propDict["configurationManagerClientEnabledFeatures"];
            } else {
                $this->_propDict["configurationManagerClientEnabledFeatures"] = new ConfigurationManagerClientEnabledFeatures($this->_propDict["configurationManagerClientEnabledFeatures"]);
                return $this->_propDict["configurationManagerClientEnabledFeatures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationManagerClientEnabledFeatures
    *
    * @param ConfigurationManagerClientEnabledFeatures $val The configurationManagerClientEnabledFeatures
    *
    * @return ManagedDevice
    */
    public function setConfigurationManagerClientEnabledFeatures($val)
    {
        $this->_propDict["configurationManagerClientEnabledFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the wiFiMacAddress
    *
    * @return string The wiFiMacAddress
    */
    public function getWiFiMacAddress()
    {
        if (array_key_exists("wiFiMacAddress", $this->_propDict)) {
            return $this->_propDict["wiFiMacAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wiFiMacAddress
    *
    * @param string $val The wiFiMacAddress
    *
    * @return ManagedDevice
    */
    public function setWiFiMacAddress($val)
    {
        $this->_propDict["wiFiMacAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceHealthAttestationState
    *
    * @return DeviceHealthAttestationState The deviceHealthAttestationState
    */
    public function getDeviceHealthAttestationState()
    {
        if (array_key_exists("deviceHealthAttestationState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceHealthAttestationState"], "Microsoft\Graph\Beta\Model\DeviceHealthAttestationState")) {
                return $this->_propDict["deviceHealthAttestationState"];
            } else {
                $this->_propDict["deviceHealthAttestationState"] = new DeviceHealthAttestationState($this->_propDict["deviceHealthAttestationState"]);
                return $this->_propDict["deviceHealthAttestationState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceHealthAttestationState
    *
    * @param DeviceHealthAttestationState $val The deviceHealthAttestationState
    *
    * @return ManagedDevice
    */
    public function setDeviceHealthAttestationState($val)
    {
        $this->_propDict["deviceHealthAttestationState"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriberCarrier
    *
    * @return string The subscriberCarrier
    */
    public function getSubscriberCarrier()
    {
        if (array_key_exists("subscriberCarrier", $this->_propDict)) {
            return $this->_propDict["subscriberCarrier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subscriberCarrier
    *
    * @param string $val The subscriberCarrier
    *
    * @return ManagedDevice
    */
    public function setSubscriberCarrier($val)
    {
        $this->_propDict["subscriberCarrier"] = $val;
        return $this;
    }
    
    /**
    * Gets the meid
    *
    * @return string The meid
    */
    public function getMeid()
    {
        if (array_key_exists("meid", $this->_propDict)) {
            return $this->_propDict["meid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meid
    *
    * @param string $val The meid
    *
    * @return ManagedDevice
    */
    public function setMeid($val)
    {
        $this->_propDict["meid"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalStorageSpaceInBytes
    *
    * @return int The totalStorageSpaceInBytes
    */
    public function getTotalStorageSpaceInBytes()
    {
        if (array_key_exists("totalStorageSpaceInBytes", $this->_propDict)) {
            return $this->_propDict["totalStorageSpaceInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalStorageSpaceInBytes
    *
    * @param int $val The totalStorageSpaceInBytes
    *
    * @return ManagedDevice
    */
    public function setTotalStorageSpaceInBytes($val)
    {
        $this->_propDict["totalStorageSpaceInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the freeStorageSpaceInBytes
    *
    * @return int The freeStorageSpaceInBytes
    */
    public function getFreeStorageSpaceInBytes()
    {
        if (array_key_exists("freeStorageSpaceInBytes", $this->_propDict)) {
            return $this->_propDict["freeStorageSpaceInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the freeStorageSpaceInBytes
    *
    * @param int $val The freeStorageSpaceInBytes
    *
    * @return ManagedDevice
    */
    public function setFreeStorageSpaceInBytes($val)
    {
        $this->_propDict["freeStorageSpaceInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the managedDeviceName
    *
    * @return string The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceName
    *
    * @param string $val The managedDeviceName
    *
    * @return ManagedDevice
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the partnerReportedThreatState
    *
    * @return ManagedDevicePartnerReportedHealthState The partnerReportedThreatState
    */
    public function getPartnerReportedThreatState()
    {
        if (array_key_exists("partnerReportedThreatState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerReportedThreatState"], "Microsoft\Graph\Beta\Model\ManagedDevicePartnerReportedHealthState")) {
                return $this->_propDict["partnerReportedThreatState"];
            } else {
                $this->_propDict["partnerReportedThreatState"] = new ManagedDevicePartnerReportedHealthState($this->_propDict["partnerReportedThreatState"]);
                return $this->_propDict["partnerReportedThreatState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerReportedThreatState
    *
    * @param ManagedDevicePartnerReportedHealthState $val The partnerReportedThreatState
    *
    * @return ManagedDevice
    */
    public function setPartnerReportedThreatState($val)
    {
        $this->_propDict["partnerReportedThreatState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the usersLoggedOn
     *
     * @return array The usersLoggedOn
     */
    public function getUsersLoggedOn()
    {
        if (array_key_exists("usersLoggedOn", $this->_propDict)) {
           return $this->_propDict["usersLoggedOn"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the usersLoggedOn
    *
    * @param LoggedOnUser $val The usersLoggedOn
    *
    * @return ManagedDevice
    */
    public function setUsersLoggedOn($val)
    {
		$this->_propDict["usersLoggedOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the preferMdmOverGroupPolicyAppliedDateTime
    *
    * @return \DateTime The preferMdmOverGroupPolicyAppliedDateTime
    */
    public function getPreferMdmOverGroupPolicyAppliedDateTime()
    {
        if (array_key_exists("preferMdmOverGroupPolicyAppliedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"], "\DateTime")) {
                return $this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"];
            } else {
                $this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"] = new \DateTime($this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"]);
                return $this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the preferMdmOverGroupPolicyAppliedDateTime
    *
    * @param \DateTime $val The preferMdmOverGroupPolicyAppliedDateTime
    *
    * @return ManagedDevice
    */
    public function setPreferMdmOverGroupPolicyAppliedDateTime($val)
    {
        $this->_propDict["preferMdmOverGroupPolicyAppliedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the autopilotEnrolled
    *
    * @return bool The autopilotEnrolled
    */
    public function getAutopilotEnrolled()
    {
        if (array_key_exists("autopilotEnrolled", $this->_propDict)) {
            return $this->_propDict["autopilotEnrolled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autopilotEnrolled
    *
    * @param bool $val The autopilotEnrolled
    *
    * @return ManagedDevice
    */
    public function setAutopilotEnrolled($val)
    {
        $this->_propDict["autopilotEnrolled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requireUserEnrollmentApproval
    *
    * @return bool The requireUserEnrollmentApproval
    */
    public function getRequireUserEnrollmentApproval()
    {
        if (array_key_exists("requireUserEnrollmentApproval", $this->_propDict)) {
            return $this->_propDict["requireUserEnrollmentApproval"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireUserEnrollmentApproval
    *
    * @param bool $val The requireUserEnrollmentApproval
    *
    * @return ManagedDevice
    */
    public function setRequireUserEnrollmentApproval($val)
    {
        $this->_propDict["requireUserEnrollmentApproval"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the managementCertificateExpirationDate
    *
    * @return \DateTime The managementCertificateExpirationDate
    */
    public function getManagementCertificateExpirationDate()
    {
        if (array_key_exists("managementCertificateExpirationDate", $this->_propDict)) {
            if (is_a($this->_propDict["managementCertificateExpirationDate"], "\DateTime")) {
                return $this->_propDict["managementCertificateExpirationDate"];
            } else {
                $this->_propDict["managementCertificateExpirationDate"] = new \DateTime($this->_propDict["managementCertificateExpirationDate"]);
                return $this->_propDict["managementCertificateExpirationDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementCertificateExpirationDate
    *
    * @param \DateTime $val The managementCertificateExpirationDate
    *
    * @return ManagedDevice
    */
    public function setManagementCertificateExpirationDate($val)
    {
        $this->_propDict["managementCertificateExpirationDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the iccid
    *
    * @return string The iccid
    */
    public function getIccid()
    {
        if (array_key_exists("iccid", $this->_propDict)) {
            return $this->_propDict["iccid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iccid
    *
    * @param string $val The iccid
    *
    * @return ManagedDevice
    */
    public function setIccid($val)
    {
        $this->_propDict["iccid"] = $val;
        return $this;
    }
    
    /**
    * Gets the udid
    *
    * @return string The udid
    */
    public function getUdid()
    {
        if (array_key_exists("udid", $this->_propDict)) {
            return $this->_propDict["udid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the udid
    *
    * @param string $val The udid
    *
    * @return ManagedDevice
    */
    public function setUdid($val)
    {
        $this->_propDict["udid"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    *
    * @param string $val The roleScopeTagIds
    *
    * @return ManagedDevice
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsActiveMalwareCount
    *
    * @return int The windowsActiveMalwareCount
    */
    public function getWindowsActiveMalwareCount()
    {
        if (array_key_exists("windowsActiveMalwareCount", $this->_propDict)) {
            return $this->_propDict["windowsActiveMalwareCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsActiveMalwareCount
    *
    * @param int $val The windowsActiveMalwareCount
    *
    * @return ManagedDevice
    */
    public function setWindowsActiveMalwareCount($val)
    {
        $this->_propDict["windowsActiveMalwareCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the windowsRemediatedMalwareCount
    *
    * @return int The windowsRemediatedMalwareCount
    */
    public function getWindowsRemediatedMalwareCount()
    {
        if (array_key_exists("windowsRemediatedMalwareCount", $this->_propDict)) {
            return $this->_propDict["windowsRemediatedMalwareCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsRemediatedMalwareCount
    *
    * @param int $val The windowsRemediatedMalwareCount
    *
    * @return ManagedDevice
    */
    public function setWindowsRemediatedMalwareCount($val)
    {
        $this->_propDict["windowsRemediatedMalwareCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notes
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    *
    * @param string $val The notes
    *
    * @return ManagedDevice
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the configurationManagerClientHealthState
    *
    * @return ConfigurationManagerClientHealthState The configurationManagerClientHealthState
    */
    public function getConfigurationManagerClientHealthState()
    {
        if (array_key_exists("configurationManagerClientHealthState", $this->_propDict)) {
            if (is_a($this->_propDict["configurationManagerClientHealthState"], "Microsoft\Graph\Beta\Model\ConfigurationManagerClientHealthState")) {
                return $this->_propDict["configurationManagerClientHealthState"];
            } else {
                $this->_propDict["configurationManagerClientHealthState"] = new ConfigurationManagerClientHealthState($this->_propDict["configurationManagerClientHealthState"]);
                return $this->_propDict["configurationManagerClientHealthState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationManagerClientHealthState
    *
    * @param ConfigurationManagerClientHealthState $val The configurationManagerClientHealthState
    *
    * @return ManagedDevice
    */
    public function setConfigurationManagerClientHealthState($val)
    {
        $this->_propDict["configurationManagerClientHealthState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationStates
     *
     * @return array The deviceConfigurationStates
     */
    public function getDeviceConfigurationStates()
    {
        if (array_key_exists("deviceConfigurationStates", $this->_propDict)) {
           return $this->_propDict["deviceConfigurationStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceConfigurationStates
    *
    * @param DeviceConfigurationState $val The deviceConfigurationStates
    *
    * @return ManagedDevice
    */
    public function setDeviceConfigurationStates($val)
    {
		$this->_propDict["deviceConfigurationStates"] = $val;
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
    * @return ManagedDevice
    */
    public function setDetectedApps($val)
    {
		$this->_propDict["detectedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCategory
    *
    * @return DeviceCategory The deviceCategory
    */
    public function getDeviceCategory()
    {
        if (array_key_exists("deviceCategory", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCategory"], "Microsoft\Graph\Beta\Model\DeviceCategory")) {
                return $this->_propDict["deviceCategory"];
            } else {
                $this->_propDict["deviceCategory"] = new DeviceCategory($this->_propDict["deviceCategory"]);
                return $this->_propDict["deviceCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCategory
    *
    * @param DeviceCategory $val The deviceCategory
    *
    * @return ManagedDevice
    */
    public function setDeviceCategory($val)
    {
        $this->_propDict["deviceCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsProtectionState
    *
    * @return WindowsProtectionState The windowsProtectionState
    */
    public function getWindowsProtectionState()
    {
        if (array_key_exists("windowsProtectionState", $this->_propDict)) {
            if (is_a($this->_propDict["windowsProtectionState"], "Microsoft\Graph\Beta\Model\WindowsProtectionState")) {
                return $this->_propDict["windowsProtectionState"];
            } else {
                $this->_propDict["windowsProtectionState"] = new WindowsProtectionState($this->_propDict["windowsProtectionState"]);
                return $this->_propDict["windowsProtectionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsProtectionState
    *
    * @param WindowsProtectionState $val The windowsProtectionState
    *
    * @return ManagedDevice
    */
    public function setWindowsProtectionState($val)
    {
        $this->_propDict["windowsProtectionState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicyStates
     *
     * @return array The deviceCompliancePolicyStates
     */
    public function getDeviceCompliancePolicyStates()
    {
        if (array_key_exists("deviceCompliancePolicyStates", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicyStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicyStates
    *
    * @param DeviceCompliancePolicyState $val The deviceCompliancePolicyStates
    *
    * @return ManagedDevice
    */
    public function setDeviceCompliancePolicyStates($val)
    {
		$this->_propDict["deviceCompliancePolicyStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceMobileAppConfigurationStates
     *
     * @return array The managedDeviceMobileAppConfigurationStates
     */
    public function getManagedDeviceMobileAppConfigurationStates()
    {
        if (array_key_exists("managedDeviceMobileAppConfigurationStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceMobileAppConfigurationStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceMobileAppConfigurationStates
    *
    * @param ManagedDeviceMobileAppConfigurationState $val The managedDeviceMobileAppConfigurationStates
    *
    * @return ManagedDevice
    */
    public function setManagedDeviceMobileAppConfigurationStates($val)
    {
		$this->_propDict["managedDeviceMobileAppConfigurationStates"] = $val;
        return $this;
    }
    
}
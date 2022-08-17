<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDevice File
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
* ManagedDevice class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDevice extends Entity
{
    /**
    * Gets the activationLockBypassCode
    * Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
    *
    * @return string|null The activationLockBypassCode
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
    * Code that allows the Activation Lock on a device to be bypassed. This property is read-only.
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
    * Gets the androidSecurityPatchLevel
    * Android security patch level. This property is read-only.
    *
    * @return string|null The androidSecurityPatchLevel
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
    * Android security patch level. This property is read-only.
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
    * Gets the azureADDeviceId
    * The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
    *
    * @return string|null The azureADDeviceId
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
    * The unique identifier for the Azure Active Directory device. Read only. This property is read-only.
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
    * Gets the azureADRegistered
    * Whether the device is Azure Active Directory registered. This property is read-only.
    *
    * @return bool|null The azureADRegistered
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
    * Whether the device is Azure Active Directory registered. This property is read-only.
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
    * Gets the complianceGracePeriodExpirationDateTime
    * The DateTime when device compliance grace period expires. This property is read-only.
    *
    * @return \DateTime|null The complianceGracePeriodExpirationDateTime
    */
    public function getComplianceGracePeriodExpirationDateTime()
    {
        if (array_key_exists("complianceGracePeriodExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceGracePeriodExpirationDateTime"], "\DateTime") || is_null($this->_propDict["complianceGracePeriodExpirationDateTime"])) {
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
    * The DateTime when device compliance grace period expires. This property is read-only.
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
    * Gets the complianceState
    * Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager.
    *
    * @return ComplianceState|null The complianceState
    */
    public function getComplianceState()
    {
        if (array_key_exists("complianceState", $this->_propDict)) {
            if (is_a($this->_propDict["complianceState"], "\Microsoft\Graph\Model\ComplianceState") || is_null($this->_propDict["complianceState"])) {
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
    * Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager.
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
    * Gets the configurationManagerClientEnabledFeatures
    * ConfigrMgr client enabled features. This property is read-only.
    *
    * @return ConfigurationManagerClientEnabledFeatures|null The configurationManagerClientEnabledFeatures
    */
    public function getConfigurationManagerClientEnabledFeatures()
    {
        if (array_key_exists("configurationManagerClientEnabledFeatures", $this->_propDict)) {
            if (is_a($this->_propDict["configurationManagerClientEnabledFeatures"], "\Microsoft\Graph\Model\ConfigurationManagerClientEnabledFeatures") || is_null($this->_propDict["configurationManagerClientEnabledFeatures"])) {
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
    * ConfigrMgr client enabled features. This property is read-only.
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
     * Gets the deviceActionResults
    * List of ComplexType deviceActionResult objects. This property is read-only.
     *
     * @return array|null The deviceActionResults
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
    * List of ComplexType deviceActionResult objects. This property is read-only.
    *
    * @param DeviceActionResult[] $val The deviceActionResults
    *
    * @return ManagedDevice
    */
    public function setDeviceActionResults($val)
    {
        $this->_propDict["deviceActionResults"] = $val;
        return $this;
    }

    /**
    * Gets the deviceCategoryDisplayName
    * Device category display name. This property is read-only.
    *
    * @return string|null The deviceCategoryDisplayName
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
    * Device category display name. This property is read-only.
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
    * Gets the deviceEnrollmentType
    * Enrollment type of the device. This property is read-only. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount.
    *
    * @return DeviceEnrollmentType|null The deviceEnrollmentType
    */
    public function getDeviceEnrollmentType()
    {
        if (array_key_exists("deviceEnrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceEnrollmentType"], "\Microsoft\Graph\Model\DeviceEnrollmentType") || is_null($this->_propDict["deviceEnrollmentType"])) {
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
    * Enrollment type of the device. This property is read-only. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth, appleUserEnrollment, appleUserEnrollmentWithServiceAccount.
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
    * Gets the deviceHealthAttestationState
    * The device health attestation state. This property is read-only.
    *
    * @return DeviceHealthAttestationState|null The deviceHealthAttestationState
    */
    public function getDeviceHealthAttestationState()
    {
        if (array_key_exists("deviceHealthAttestationState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceHealthAttestationState"], "\Microsoft\Graph\Model\DeviceHealthAttestationState") || is_null($this->_propDict["deviceHealthAttestationState"])) {
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
    * The device health attestation state. This property is read-only.
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
    * Gets the deviceName
    * Name of the device. This property is read-only.
    *
    * @return string|null The deviceName
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
    * Name of the device. This property is read-only.
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
    * Gets the deviceRegistrationState
    * Device registration state. This property is read-only. Possible values are: notRegistered, registered, revoked, keyConflict, approvalPending, certificateReset, notRegisteredPendingEnrollment, unknown.
    *
    * @return DeviceRegistrationState|null The deviceRegistrationState
    */
    public function getDeviceRegistrationState()
    {
        if (array_key_exists("deviceRegistrationState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceRegistrationState"], "\Microsoft\Graph\Model\DeviceRegistrationState") || is_null($this->_propDict["deviceRegistrationState"])) {
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
    * Device registration state. This property is read-only. Possible values are: notRegistered, registered, revoked, keyConflict, approvalPending, certificateReset, notRegisteredPendingEnrollment, unknown.
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
    * Gets the easActivated
    * Whether the device is Exchange ActiveSync activated. This property is read-only.
    *
    * @return bool|null The easActivated
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
    * Whether the device is Exchange ActiveSync activated. This property is read-only.
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
    * Gets the easActivationDateTime
    * Exchange ActivationSync activation time of the device. This property is read-only.
    *
    * @return \DateTime|null The easActivationDateTime
    */
    public function getEasActivationDateTime()
    {
        if (array_key_exists("easActivationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["easActivationDateTime"], "\DateTime") || is_null($this->_propDict["easActivationDateTime"])) {
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
    * Exchange ActivationSync activation time of the device. This property is read-only.
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
    * Gets the easDeviceId
    * Exchange ActiveSync Id of the device. This property is read-only.
    *
    * @return string|null The easDeviceId
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
    * Exchange ActiveSync Id of the device. This property is read-only.
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
    * Gets the emailAddress
    * Email(s) for the user associated with the device. This property is read-only.
    *
    * @return string|null The emailAddress
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
    * Email(s) for the user associated with the device. This property is read-only.
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
    * Gets the enrolledDateTime
    * Enrollment time of the device. This property is read-only.
    *
    * @return \DateTime|null The enrolledDateTime
    */
    public function getEnrolledDateTime()
    {
        if (array_key_exists("enrolledDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["enrolledDateTime"], "\DateTime") || is_null($this->_propDict["enrolledDateTime"])) {
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
    * Enrollment time of the device. This property is read-only.
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
    * Gets the ethernetMacAddress
    * Ethernet MAC. This property is read-only.
    *
    * @return string|null The ethernetMacAddress
    */
    public function getEthernetMacAddress()
    {
        if (array_key_exists("ethernetMacAddress", $this->_propDict)) {
            return $this->_propDict["ethernetMacAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ethernetMacAddress
    * Ethernet MAC. This property is read-only.
    *
    * @param string $val The ethernetMacAddress
    *
    * @return ManagedDevice
    */
    public function setEthernetMacAddress($val)
    {
        $this->_propDict["ethernetMacAddress"] = $val;
        return $this;
    }

    /**
    * Gets the exchangeAccessState
    * The Access State of the device in Exchange. This property is read-only. Possible values are: none, unknown, allowed, blocked, quarantined.
    *
    * @return DeviceManagementExchangeAccessState|null The exchangeAccessState
    */
    public function getExchangeAccessState()
    {
        if (array_key_exists("exchangeAccessState", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeAccessState"], "\Microsoft\Graph\Model\DeviceManagementExchangeAccessState") || is_null($this->_propDict["exchangeAccessState"])) {
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
    * The Access State of the device in Exchange. This property is read-only. Possible values are: none, unknown, allowed, blocked, quarantined.
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
    * The reason for the device's access state in Exchange. This property is read-only. Possible values are: none, unknown, exchangeGlobalRule, exchangeIndividualRule, exchangeDeviceRule, exchangeUpgrade, exchangeMailboxPolicy, other, compliant, notCompliant, notEnrolled, unknownLocation, mfaRequired, azureADBlockDueToAccessPolicy, compromisedPassword, deviceNotKnownWithManagedApp.
    *
    * @return DeviceManagementExchangeAccessStateReason|null The exchangeAccessStateReason
    */
    public function getExchangeAccessStateReason()
    {
        if (array_key_exists("exchangeAccessStateReason", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeAccessStateReason"], "\Microsoft\Graph\Model\DeviceManagementExchangeAccessStateReason") || is_null($this->_propDict["exchangeAccessStateReason"])) {
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
    * The reason for the device's access state in Exchange. This property is read-only. Possible values are: none, unknown, exchangeGlobalRule, exchangeIndividualRule, exchangeDeviceRule, exchangeUpgrade, exchangeMailboxPolicy, other, compliant, notCompliant, notEnrolled, unknownLocation, mfaRequired, azureADBlockDueToAccessPolicy, compromisedPassword, deviceNotKnownWithManagedApp.
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
    * Gets the exchangeLastSuccessfulSyncDateTime
    * Last time the device contacted Exchange. This property is read-only.
    *
    * @return \DateTime|null The exchangeLastSuccessfulSyncDateTime
    */
    public function getExchangeLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("exchangeLastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLastSuccessfulSyncDateTime"], "\DateTime") || is_null($this->_propDict["exchangeLastSuccessfulSyncDateTime"])) {
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
    * Last time the device contacted Exchange. This property is read-only.
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
    * Gets the freeStorageSpaceInBytes
    * Free Storage in Bytes. This property is read-only.
    *
    * @return int|null The freeStorageSpaceInBytes
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
    * Free Storage in Bytes. This property is read-only.
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
    * Gets the iccid
    * Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
    *
    * @return string|null The iccid
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
    * Integrated Circuit Card Identifier, it is A SIM card's unique identification number. This property is read-only.
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
    * Gets the imei
    * IMEI. This property is read-only.
    *
    * @return string|null The imei
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
    * IMEI. This property is read-only.
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
    * Gets the isEncrypted
    * Device encryption status. This property is read-only.
    *
    * @return bool|null The isEncrypted
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
    * Device encryption status. This property is read-only.
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
    * Gets the isSupervised
    * Device supervised status. This property is read-only.
    *
    * @return bool|null The isSupervised
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
    * Device supervised status. This property is read-only.
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
    * Gets the jailBroken
    * whether the device is jail broken or rooted. This property is read-only.
    *
    * @return string|null The jailBroken
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
    * whether the device is jail broken or rooted. This property is read-only.
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
    * Gets the lastSyncDateTime
    * The date and time that the device last completed a successful sync with Intune. This property is read-only.
    *
    * @return \DateTime|null The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime") || is_null($this->_propDict["lastSyncDateTime"])) {
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
    * The date and time that the device last completed a successful sync with Intune. This property is read-only.
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
    * Gets the managedDeviceName
    * Automatically generated name to identify a device. Can be overwritten to a user friendly name.
    *
    * @return string|null The managedDeviceName
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
    * Automatically generated name to identify a device. Can be overwritten to a user friendly name.
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
    * Gets the managedDeviceOwnerType
    * Ownership of the device. Can be 'company' or 'personal'. Possible values are: unknown, company, personal.
    *
    * @return ManagedDeviceOwnerType|null The managedDeviceOwnerType
    */
    public function getManagedDeviceOwnerType()
    {
        if (array_key_exists("managedDeviceOwnerType", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOwnerType"], "\Microsoft\Graph\Model\ManagedDeviceOwnerType") || is_null($this->_propDict["managedDeviceOwnerType"])) {
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
    * Ownership of the device. Can be 'company' or 'personal'. Possible values are: unknown, company, personal.
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
    * Gets the managementAgent
    * Management channel of the device. Intune, EAS, etc. This property is read-only. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController.
    *
    * @return ManagementAgentType|null The managementAgent
    */
    public function getManagementAgent()
    {
        if (array_key_exists("managementAgent", $this->_propDict)) {
            if (is_a($this->_propDict["managementAgent"], "\Microsoft\Graph\Model\ManagementAgentType") || is_null($this->_propDict["managementAgent"])) {
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
    * Management channel of the device. Intune, EAS, etc. This property is read-only. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController.
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
    * Gets the manufacturer
    * Manufacturer of the device. This property is read-only.
    *
    * @return string|null The manufacturer
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
    * Manufacturer of the device. This property is read-only.
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
    * Gets the meid
    * MEID. This property is read-only.
    *
    * @return string|null The meid
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
    * MEID. This property is read-only.
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
    * Gets the model
    * Model of the device. This property is read-only.
    *
    * @return string|null The model
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
    * Model of the device. This property is read-only.
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
    * Gets the notes
    * Notes on the device created by IT Admin
    *
    * @return string|null The notes
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
    * Notes on the device created by IT Admin
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
    * Gets the operatingSystem
    * Operating system of the device. Windows, iOS, etc. This property is read-only.
    *
    * @return string|null The operatingSystem
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
    * Operating system of the device. Windows, iOS, etc. This property is read-only.
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
    * Gets the osVersion
    * Operating system version of the device. This property is read-only.
    *
    * @return string|null The osVersion
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
    * Operating system version of the device. This property is read-only.
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
    * Gets the partnerReportedThreatState
    * Indicates the threat state of a device when a Mobile Threat Defense partner is in use by the account and device. Read Only. This property is read-only. Possible values are: unknown, activated, deactivated, secured, lowSeverity, mediumSeverity, highSeverity, unresponsive, compromised, misconfigured.
    *
    * @return ManagedDevicePartnerReportedHealthState|null The partnerReportedThreatState
    */
    public function getPartnerReportedThreatState()
    {
        if (array_key_exists("partnerReportedThreatState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerReportedThreatState"], "\Microsoft\Graph\Model\ManagedDevicePartnerReportedHealthState") || is_null($this->_propDict["partnerReportedThreatState"])) {
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
    * Indicates the threat state of a device when a Mobile Threat Defense partner is in use by the account and device. Read Only. This property is read-only. Possible values are: unknown, activated, deactivated, secured, lowSeverity, mediumSeverity, highSeverity, unresponsive, compromised, misconfigured.
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
    * Gets the phoneNumber
    * Phone number of the device. This property is read-only.
    *
    * @return string|null The phoneNumber
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
    * Phone number of the device. This property is read-only.
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
    * Gets the physicalMemoryInBytes
    * Total Memory in Bytes. This property is read-only.
    *
    * @return int|null The physicalMemoryInBytes
    */
    public function getPhysicalMemoryInBytes()
    {
        if (array_key_exists("physicalMemoryInBytes", $this->_propDict)) {
            return $this->_propDict["physicalMemoryInBytes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the physicalMemoryInBytes
    * Total Memory in Bytes. This property is read-only.
    *
    * @param int $val The physicalMemoryInBytes
    *
    * @return ManagedDevice
    */
    public function setPhysicalMemoryInBytes($val)
    {
        $this->_propDict["physicalMemoryInBytes"] = intval($val);
        return $this;
    }

    /**
    * Gets the remoteAssistanceSessionErrorDetails
    * An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
    *
    * @return string|null The remoteAssistanceSessionErrorDetails
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
    * An error string that identifies issues when creating Remote Assistance session objects. This property is read-only.
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
    * Gets the remoteAssistanceSessionUrl
    * Url that allows a Remote Assistance session to be established with the device. This property is read-only.
    *
    * @return string|null The remoteAssistanceSessionUrl
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
    * Url that allows a Remote Assistance session to be established with the device. This property is read-only.
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
    * Gets the serialNumber
    * SerialNumber. This property is read-only.
    *
    * @return string|null The serialNumber
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
    * SerialNumber. This property is read-only.
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
    * Gets the subscriberCarrier
    * Subscriber Carrier. This property is read-only.
    *
    * @return string|null The subscriberCarrier
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
    * Subscriber Carrier. This property is read-only.
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
    * Gets the totalStorageSpaceInBytes
    * Total Storage in Bytes. This property is read-only.
    *
    * @return int|null The totalStorageSpaceInBytes
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
    * Total Storage in Bytes. This property is read-only.
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
    * Gets the udid
    * Unique Device Identifier for iOS and macOS devices. This property is read-only.
    *
    * @return string|null The udid
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
    * Unique Device Identifier for iOS and macOS devices. This property is read-only.
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
    * Gets the userDisplayName
    * User display name. This property is read-only.
    *
    * @return string|null The userDisplayName
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
    * User display name. This property is read-only.
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
    * Gets the userId
    * Unique Identifier for the user associated with the device. This property is read-only.
    *
    * @return string|null The userId
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
    * Unique Identifier for the user associated with the device. This property is read-only.
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
    * Gets the userPrincipalName
    * Device user principal name. This property is read-only.
    *
    * @return string|null The userPrincipalName
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
    * Device user principal name. This property is read-only.
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
    * Gets the wiFiMacAddress
    * Wi-Fi MAC. This property is read-only.
    *
    * @return string|null The wiFiMacAddress
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
    * Wi-Fi MAC. This property is read-only.
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
     * Gets the deviceCompliancePolicyStates
    * Device compliance policy states for this device.
     *
     * @return array|null The deviceCompliancePolicyStates
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
    * Device compliance policy states for this device.
    *
    * @param DeviceCompliancePolicyState[] $val The deviceCompliancePolicyStates
    *
    * @return ManagedDevice
    */
    public function setDeviceCompliancePolicyStates($val)
    {
        $this->_propDict["deviceCompliancePolicyStates"] = $val;
        return $this;
    }


     /**
     * Gets the deviceConfigurationStates
    * Device configuration states for this device.
     *
     * @return array|null The deviceConfigurationStates
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
    * Device configuration states for this device.
    *
    * @param DeviceConfigurationState[] $val The deviceConfigurationStates
    *
    * @return ManagedDevice
    */
    public function setDeviceConfigurationStates($val)
    {
        $this->_propDict["deviceConfigurationStates"] = $val;
        return $this;
    }

    /**
    * Gets the deviceCategory
    * Device category
    *
    * @return DeviceCategory|null The deviceCategory
    */
    public function getDeviceCategory()
    {
        if (array_key_exists("deviceCategory", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCategory"], "\Microsoft\Graph\Model\DeviceCategory") || is_null($this->_propDict["deviceCategory"])) {
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
    * Device category
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

}

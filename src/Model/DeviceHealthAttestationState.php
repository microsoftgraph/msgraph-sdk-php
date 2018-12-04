<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthAttestationState File
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
* DeviceHealthAttestationState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceHealthAttestationState extends Entity
{
    /**
    * Gets the lastUpdateDateTime
    *
    * @return string The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            return $this->_propDict["lastUpdateDateTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastUpdateDateTime
    *
    * @param string $val The value of the lastUpdateDateTime
    *
    * @return DeviceHealthAttestationState
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }
    /**
    * Gets the contentNamespaceUrl
    *
    * @return string The contentNamespaceUrl
    */
    public function getContentNamespaceUrl()
    {
        if (array_key_exists("contentNamespaceUrl", $this->_propDict)) {
            return $this->_propDict["contentNamespaceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentNamespaceUrl
    *
    * @param string $val The value of the contentNamespaceUrl
    *
    * @return DeviceHealthAttestationState
    */
    public function setContentNamespaceUrl($val)
    {
        $this->_propDict["contentNamespaceUrl"] = $val;
        return $this;
    }
    /**
    * Gets the deviceHealthAttestationStatus
    *
    * @return string The deviceHealthAttestationStatus
    */
    public function getDeviceHealthAttestationStatus()
    {
        if (array_key_exists("deviceHealthAttestationStatus", $this->_propDict)) {
            return $this->_propDict["deviceHealthAttestationStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceHealthAttestationStatus
    *
    * @param string $val The value of the deviceHealthAttestationStatus
    *
    * @return DeviceHealthAttestationState
    */
    public function setDeviceHealthAttestationStatus($val)
    {
        $this->_propDict["deviceHealthAttestationStatus"] = $val;
        return $this;
    }
    /**
    * Gets the contentVersion
    *
    * @return string The contentVersion
    */
    public function getContentVersion()
    {
        if (array_key_exists("contentVersion", $this->_propDict)) {
            return $this->_propDict["contentVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentVersion
    *
    * @param string $val The value of the contentVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setContentVersion($val)
    {
        $this->_propDict["contentVersion"] = $val;
        return $this;
    }

    /**
    * Gets the issuedDateTime
    *
    * @return \DateTime The issuedDateTime
    */
    public function getIssuedDateTime()
    {
        if (array_key_exists("issuedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["issuedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["issuedDateTime"];
            } else {
                $this->_propDict["issuedDateTime"] = new \DateTime($this->_propDict["issuedDateTime"]);
                return $this->_propDict["issuedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the issuedDateTime
    *
    * @param \DateTime $val The value to assign to the issuedDateTime
    *
    * @return DeviceHealthAttestationState The DeviceHealthAttestationState
    */
    public function setIssuedDateTime($val)
    {
        $this->_propDict["issuedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the attestationIdentityKey
    *
    * @return string The attestationIdentityKey
    */
    public function getAttestationIdentityKey()
    {
        if (array_key_exists("attestationIdentityKey", $this->_propDict)) {
            return $this->_propDict["attestationIdentityKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attestationIdentityKey
    *
    * @param string $val The value of the attestationIdentityKey
    *
    * @return DeviceHealthAttestationState
    */
    public function setAttestationIdentityKey($val)
    {
        $this->_propDict["attestationIdentityKey"] = $val;
        return $this;
    }
    /**
    * Gets the resetCount
    *
    * @return int The resetCount
    */
    public function getResetCount()
    {
        if (array_key_exists("resetCount", $this->_propDict)) {
            return $this->_propDict["resetCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resetCount
    *
    * @param int $val The value of the resetCount
    *
    * @return DeviceHealthAttestationState
    */
    public function setResetCount($val)
    {
        $this->_propDict["resetCount"] = $val;
        return $this;
    }
    /**
    * Gets the restartCount
    *
    * @return int The restartCount
    */
    public function getRestartCount()
    {
        if (array_key_exists("restartCount", $this->_propDict)) {
            return $this->_propDict["restartCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the restartCount
    *
    * @param int $val The value of the restartCount
    *
    * @return DeviceHealthAttestationState
    */
    public function setRestartCount($val)
    {
        $this->_propDict["restartCount"] = $val;
        return $this;
    }
    /**
    * Gets the dataExcutionPolicy
    *
    * @return string The dataExcutionPolicy
    */
    public function getDataExcutionPolicy()
    {
        if (array_key_exists("dataExcutionPolicy", $this->_propDict)) {
            return $this->_propDict["dataExcutionPolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataExcutionPolicy
    *
    * @param string $val The value of the dataExcutionPolicy
    *
    * @return DeviceHealthAttestationState
    */
    public function setDataExcutionPolicy($val)
    {
        $this->_propDict["dataExcutionPolicy"] = $val;
        return $this;
    }
    /**
    * Gets the bitLockerStatus
    *
    * @return string The bitLockerStatus
    */
    public function getBitLockerStatus()
    {
        if (array_key_exists("bitLockerStatus", $this->_propDict)) {
            return $this->_propDict["bitLockerStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bitLockerStatus
    *
    * @param string $val The value of the bitLockerStatus
    *
    * @return DeviceHealthAttestationState
    */
    public function setBitLockerStatus($val)
    {
        $this->_propDict["bitLockerStatus"] = $val;
        return $this;
    }
    /**
    * Gets the bootManagerVersion
    *
    * @return string The bootManagerVersion
    */
    public function getBootManagerVersion()
    {
        if (array_key_exists("bootManagerVersion", $this->_propDict)) {
            return $this->_propDict["bootManagerVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootManagerVersion
    *
    * @param string $val The value of the bootManagerVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setBootManagerVersion($val)
    {
        $this->_propDict["bootManagerVersion"] = $val;
        return $this;
    }
    /**
    * Gets the codeIntegrityCheckVersion
    *
    * @return string The codeIntegrityCheckVersion
    */
    public function getCodeIntegrityCheckVersion()
    {
        if (array_key_exists("codeIntegrityCheckVersion", $this->_propDict)) {
            return $this->_propDict["codeIntegrityCheckVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeIntegrityCheckVersion
    *
    * @param string $val The value of the codeIntegrityCheckVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setCodeIntegrityCheckVersion($val)
    {
        $this->_propDict["codeIntegrityCheckVersion"] = $val;
        return $this;
    }
    /**
    * Gets the secureBoot
    *
    * @return string The secureBoot
    */
    public function getSecureBoot()
    {
        if (array_key_exists("secureBoot", $this->_propDict)) {
            return $this->_propDict["secureBoot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureBoot
    *
    * @param string $val The value of the secureBoot
    *
    * @return DeviceHealthAttestationState
    */
    public function setSecureBoot($val)
    {
        $this->_propDict["secureBoot"] = $val;
        return $this;
    }
    /**
    * Gets the bootDebugging
    *
    * @return string The bootDebugging
    */
    public function getBootDebugging()
    {
        if (array_key_exists("bootDebugging", $this->_propDict)) {
            return $this->_propDict["bootDebugging"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootDebugging
    *
    * @param string $val The value of the bootDebugging
    *
    * @return DeviceHealthAttestationState
    */
    public function setBootDebugging($val)
    {
        $this->_propDict["bootDebugging"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemKernelDebugging
    *
    * @return string The operatingSystemKernelDebugging
    */
    public function getOperatingSystemKernelDebugging()
    {
        if (array_key_exists("operatingSystemKernelDebugging", $this->_propDict)) {
            return $this->_propDict["operatingSystemKernelDebugging"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemKernelDebugging
    *
    * @param string $val The value of the operatingSystemKernelDebugging
    *
    * @return DeviceHealthAttestationState
    */
    public function setOperatingSystemKernelDebugging($val)
    {
        $this->_propDict["operatingSystemKernelDebugging"] = $val;
        return $this;
    }
    /**
    * Gets the codeIntegrity
    *
    * @return string The codeIntegrity
    */
    public function getCodeIntegrity()
    {
        if (array_key_exists("codeIntegrity", $this->_propDict)) {
            return $this->_propDict["codeIntegrity"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeIntegrity
    *
    * @param string $val The value of the codeIntegrity
    *
    * @return DeviceHealthAttestationState
    */
    public function setCodeIntegrity($val)
    {
        $this->_propDict["codeIntegrity"] = $val;
        return $this;
    }
    /**
    * Gets the testSigning
    *
    * @return string The testSigning
    */
    public function getTestSigning()
    {
        if (array_key_exists("testSigning", $this->_propDict)) {
            return $this->_propDict["testSigning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the testSigning
    *
    * @param string $val The value of the testSigning
    *
    * @return DeviceHealthAttestationState
    */
    public function setTestSigning($val)
    {
        $this->_propDict["testSigning"] = $val;
        return $this;
    }
    /**
    * Gets the safeMode
    *
    * @return string The safeMode
    */
    public function getSafeMode()
    {
        if (array_key_exists("safeMode", $this->_propDict)) {
            return $this->_propDict["safeMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the safeMode
    *
    * @param string $val The value of the safeMode
    *
    * @return DeviceHealthAttestationState
    */
    public function setSafeMode($val)
    {
        $this->_propDict["safeMode"] = $val;
        return $this;
    }
    /**
    * Gets the windowsPE
    *
    * @return string The windowsPE
    */
    public function getWindowsPE()
    {
        if (array_key_exists("windowsPE", $this->_propDict)) {
            return $this->_propDict["windowsPE"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsPE
    *
    * @param string $val The value of the windowsPE
    *
    * @return DeviceHealthAttestationState
    */
    public function setWindowsPE($val)
    {
        $this->_propDict["windowsPE"] = $val;
        return $this;
    }
    /**
    * Gets the earlyLaunchAntiMalwareDriverProtection
    *
    * @return string The earlyLaunchAntiMalwareDriverProtection
    */
    public function getEarlyLaunchAntiMalwareDriverProtection()
    {
        if (array_key_exists("earlyLaunchAntiMalwareDriverProtection", $this->_propDict)) {
            return $this->_propDict["earlyLaunchAntiMalwareDriverProtection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the earlyLaunchAntiMalwareDriverProtection
    *
    * @param string $val The value of the earlyLaunchAntiMalwareDriverProtection
    *
    * @return DeviceHealthAttestationState
    */
    public function setEarlyLaunchAntiMalwareDriverProtection($val)
    {
        $this->_propDict["earlyLaunchAntiMalwareDriverProtection"] = $val;
        return $this;
    }
    /**
    * Gets the virtualSecureMode
    *
    * @return string The virtualSecureMode
    */
    public function getVirtualSecureMode()
    {
        if (array_key_exists("virtualSecureMode", $this->_propDict)) {
            return $this->_propDict["virtualSecureMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the virtualSecureMode
    *
    * @param string $val The value of the virtualSecureMode
    *
    * @return DeviceHealthAttestationState
    */
    public function setVirtualSecureMode($val)
    {
        $this->_propDict["virtualSecureMode"] = $val;
        return $this;
    }
    /**
    * Gets the pcrHashAlgorithm
    *
    * @return string The pcrHashAlgorithm
    */
    public function getPcrHashAlgorithm()
    {
        if (array_key_exists("pcrHashAlgorithm", $this->_propDict)) {
            return $this->_propDict["pcrHashAlgorithm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pcrHashAlgorithm
    *
    * @param string $val The value of the pcrHashAlgorithm
    *
    * @return DeviceHealthAttestationState
    */
    public function setPcrHashAlgorithm($val)
    {
        $this->_propDict["pcrHashAlgorithm"] = $val;
        return $this;
    }
    /**
    * Gets the bootAppSecurityVersion
    *
    * @return string The bootAppSecurityVersion
    */
    public function getBootAppSecurityVersion()
    {
        if (array_key_exists("bootAppSecurityVersion", $this->_propDict)) {
            return $this->_propDict["bootAppSecurityVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootAppSecurityVersion
    *
    * @param string $val The value of the bootAppSecurityVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setBootAppSecurityVersion($val)
    {
        $this->_propDict["bootAppSecurityVersion"] = $val;
        return $this;
    }
    /**
    * Gets the bootManagerSecurityVersion
    *
    * @return string The bootManagerSecurityVersion
    */
    public function getBootManagerSecurityVersion()
    {
        if (array_key_exists("bootManagerSecurityVersion", $this->_propDict)) {
            return $this->_propDict["bootManagerSecurityVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootManagerSecurityVersion
    *
    * @param string $val The value of the bootManagerSecurityVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setBootManagerSecurityVersion($val)
    {
        $this->_propDict["bootManagerSecurityVersion"] = $val;
        return $this;
    }
    /**
    * Gets the tpmVersion
    *
    * @return string The tpmVersion
    */
    public function getTpmVersion()
    {
        if (array_key_exists("tpmVersion", $this->_propDict)) {
            return $this->_propDict["tpmVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tpmVersion
    *
    * @param string $val The value of the tpmVersion
    *
    * @return DeviceHealthAttestationState
    */
    public function setTpmVersion($val)
    {
        $this->_propDict["tpmVersion"] = $val;
        return $this;
    }
    /**
    * Gets the pcr0
    *
    * @return string The pcr0
    */
    public function getPcr0()
    {
        if (array_key_exists("pcr0", $this->_propDict)) {
            return $this->_propDict["pcr0"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pcr0
    *
    * @param string $val The value of the pcr0
    *
    * @return DeviceHealthAttestationState
    */
    public function setPcr0($val)
    {
        $this->_propDict["pcr0"] = $val;
        return $this;
    }
    /**
    * Gets the secureBootConfigurationPolicyFingerPrint
    *
    * @return string The secureBootConfigurationPolicyFingerPrint
    */
    public function getSecureBootConfigurationPolicyFingerPrint()
    {
        if (array_key_exists("secureBootConfigurationPolicyFingerPrint", $this->_propDict)) {
            return $this->_propDict["secureBootConfigurationPolicyFingerPrint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureBootConfigurationPolicyFingerPrint
    *
    * @param string $val The value of the secureBootConfigurationPolicyFingerPrint
    *
    * @return DeviceHealthAttestationState
    */
    public function setSecureBootConfigurationPolicyFingerPrint($val)
    {
        $this->_propDict["secureBootConfigurationPolicyFingerPrint"] = $val;
        return $this;
    }
    /**
    * Gets the codeIntegrityPolicy
    *
    * @return string The codeIntegrityPolicy
    */
    public function getCodeIntegrityPolicy()
    {
        if (array_key_exists("codeIntegrityPolicy", $this->_propDict)) {
            return $this->_propDict["codeIntegrityPolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeIntegrityPolicy
    *
    * @param string $val The value of the codeIntegrityPolicy
    *
    * @return DeviceHealthAttestationState
    */
    public function setCodeIntegrityPolicy($val)
    {
        $this->_propDict["codeIntegrityPolicy"] = $val;
        return $this;
    }
    /**
    * Gets the bootRevisionListInfo
    *
    * @return string The bootRevisionListInfo
    */
    public function getBootRevisionListInfo()
    {
        if (array_key_exists("bootRevisionListInfo", $this->_propDict)) {
            return $this->_propDict["bootRevisionListInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bootRevisionListInfo
    *
    * @param string $val The value of the bootRevisionListInfo
    *
    * @return DeviceHealthAttestationState
    */
    public function setBootRevisionListInfo($val)
    {
        $this->_propDict["bootRevisionListInfo"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemRevListInfo
    *
    * @return string The operatingSystemRevListInfo
    */
    public function getOperatingSystemRevListInfo()
    {
        if (array_key_exists("operatingSystemRevListInfo", $this->_propDict)) {
            return $this->_propDict["operatingSystemRevListInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemRevListInfo
    *
    * @param string $val The value of the operatingSystemRevListInfo
    *
    * @return DeviceHealthAttestationState
    */
    public function setOperatingSystemRevListInfo($val)
    {
        $this->_propDict["operatingSystemRevListInfo"] = $val;
        return $this;
    }
    /**
    * Gets the healthStatusMismatchInfo
    *
    * @return string The healthStatusMismatchInfo
    */
    public function getHealthStatusMismatchInfo()
    {
        if (array_key_exists("healthStatusMismatchInfo", $this->_propDict)) {
            return $this->_propDict["healthStatusMismatchInfo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthStatusMismatchInfo
    *
    * @param string $val The value of the healthStatusMismatchInfo
    *
    * @return DeviceHealthAttestationState
    */
    public function setHealthStatusMismatchInfo($val)
    {
        $this->_propDict["healthStatusMismatchInfo"] = $val;
        return $this;
    }
    /**
    * Gets the healthAttestationSupportedStatus
    *
    * @return string The healthAttestationSupportedStatus
    */
    public function getHealthAttestationSupportedStatus()
    {
        if (array_key_exists("healthAttestationSupportedStatus", $this->_propDict)) {
            return $this->_propDict["healthAttestationSupportedStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the healthAttestationSupportedStatus
    *
    * @param string $val The value of the healthAttestationSupportedStatus
    *
    * @return DeviceHealthAttestationState
    */
    public function setHealthAttestationSupportedStatus($val)
    {
        $this->_propDict["healthAttestationSupportedStatus"] = $val;
        return $this;
    }
}

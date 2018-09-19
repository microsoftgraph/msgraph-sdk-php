<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceCertificateState File
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
* ManagedDeviceCertificateState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedDeviceCertificateState extends Entity
{
    /**
    * Gets the devicePlatform
    *
    * @return DevicePlatformType The devicePlatform
    */
    public function getDevicePlatform()
    {
        if (array_key_exists("devicePlatform", $this->_propDict)) {
            if (is_a($this->_propDict["devicePlatform"], "Microsoft\Graph\Beta\Model\DevicePlatformType")) {
                return $this->_propDict["devicePlatform"];
            } else {
                $this->_propDict["devicePlatform"] = new DevicePlatformType($this->_propDict["devicePlatform"]);
                return $this->_propDict["devicePlatform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the devicePlatform
    *
    * @param DevicePlatformType $val The devicePlatform
    *
    * @return ManagedDeviceCertificateState
    */
    public function setDevicePlatform($val)
    {
        $this->_propDict["devicePlatform"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateKeyUsage
    *
    * @return KeyUsages The certificateKeyUsage
    */
    public function getCertificateKeyUsage()
    {
        if (array_key_exists("certificateKeyUsage", $this->_propDict)) {
            if (is_a($this->_propDict["certificateKeyUsage"], "Microsoft\Graph\Beta\Model\KeyUsages")) {
                return $this->_propDict["certificateKeyUsage"];
            } else {
                $this->_propDict["certificateKeyUsage"] = new KeyUsages($this->_propDict["certificateKeyUsage"]);
                return $this->_propDict["certificateKeyUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateKeyUsage
    *
    * @param KeyUsages $val The certificateKeyUsage
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateKeyUsage($val)
    {
        $this->_propDict["certificateKeyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodUnits
    *
    * @return CertificateValidityPeriodScale The certificateValidityPeriodUnits
    */
    public function getCertificateValidityPeriodUnits()
    {
        if (array_key_exists("certificateValidityPeriodUnits", $this->_propDict)) {
            if (is_a($this->_propDict["certificateValidityPeriodUnits"], "Microsoft\Graph\Beta\Model\CertificateValidityPeriodScale")) {
                return $this->_propDict["certificateValidityPeriodUnits"];
            } else {
                $this->_propDict["certificateValidityPeriodUnits"] = new CertificateValidityPeriodScale($this->_propDict["certificateValidityPeriodUnits"]);
                return $this->_propDict["certificateValidityPeriodUnits"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateValidityPeriodUnits
    *
    * @param CertificateValidityPeriodScale $val The certificateValidityPeriodUnits
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateValidityPeriodUnits($val)
    {
        $this->_propDict["certificateValidityPeriodUnits"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateIssuanceState
    *
    * @return CertificateIssuanceStates The certificateIssuanceState
    */
    public function getCertificateIssuanceState()
    {
        if (array_key_exists("certificateIssuanceState", $this->_propDict)) {
            if (is_a($this->_propDict["certificateIssuanceState"], "Microsoft\Graph\Beta\Model\CertificateIssuanceStates")) {
                return $this->_propDict["certificateIssuanceState"];
            } else {
                $this->_propDict["certificateIssuanceState"] = new CertificateIssuanceStates($this->_propDict["certificateIssuanceState"]);
                return $this->_propDict["certificateIssuanceState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateIssuanceState
    *
    * @param CertificateIssuanceStates $val The certificateIssuanceState
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateIssuanceState($val)
    {
        $this->_propDict["certificateIssuanceState"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateKeyStorageProvider
    *
    * @return KeyStorageProviderOption The certificateKeyStorageProvider
    */
    public function getCertificateKeyStorageProvider()
    {
        if (array_key_exists("certificateKeyStorageProvider", $this->_propDict)) {
            if (is_a($this->_propDict["certificateKeyStorageProvider"], "Microsoft\Graph\Beta\Model\KeyStorageProviderOption")) {
                return $this->_propDict["certificateKeyStorageProvider"];
            } else {
                $this->_propDict["certificateKeyStorageProvider"] = new KeyStorageProviderOption($this->_propDict["certificateKeyStorageProvider"]);
                return $this->_propDict["certificateKeyStorageProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateKeyStorageProvider
    *
    * @param KeyStorageProviderOption $val The certificateKeyStorageProvider
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateKeyStorageProvider($val)
    {
        $this->_propDict["certificateKeyStorageProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSubjectNameFormat
    *
    * @return SubjectNameFormat The certificateSubjectNameFormat
    */
    public function getCertificateSubjectNameFormat()
    {
        if (array_key_exists("certificateSubjectNameFormat", $this->_propDict)) {
            if (is_a($this->_propDict["certificateSubjectNameFormat"], "Microsoft\Graph\Beta\Model\SubjectNameFormat")) {
                return $this->_propDict["certificateSubjectNameFormat"];
            } else {
                $this->_propDict["certificateSubjectNameFormat"] = new SubjectNameFormat($this->_propDict["certificateSubjectNameFormat"]);
                return $this->_propDict["certificateSubjectNameFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateSubjectNameFormat
    *
    * @param SubjectNameFormat $val The certificateSubjectNameFormat
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateSubjectNameFormat($val)
    {
        $this->_propDict["certificateSubjectNameFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSubjectAlternativeNameFormat
    *
    * @return SubjectAlternativeNameType The certificateSubjectAlternativeNameFormat
    */
    public function getCertificateSubjectAlternativeNameFormat()
    {
        if (array_key_exists("certificateSubjectAlternativeNameFormat", $this->_propDict)) {
            if (is_a($this->_propDict["certificateSubjectAlternativeNameFormat"], "Microsoft\Graph\Beta\Model\SubjectAlternativeNameType")) {
                return $this->_propDict["certificateSubjectAlternativeNameFormat"];
            } else {
                $this->_propDict["certificateSubjectAlternativeNameFormat"] = new SubjectAlternativeNameType($this->_propDict["certificateSubjectAlternativeNameFormat"]);
                return $this->_propDict["certificateSubjectAlternativeNameFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateSubjectAlternativeNameFormat
    *
    * @param SubjectAlternativeNameType $val The certificateSubjectAlternativeNameFormat
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateSubjectAlternativeNameFormat($val)
    {
        $this->_propDict["certificateSubjectAlternativeNameFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateRevokeStatus
    *
    * @return CertificateRevocationStatus The certificateRevokeStatus
    */
    public function getCertificateRevokeStatus()
    {
        if (array_key_exists("certificateRevokeStatus", $this->_propDict)) {
            if (is_a($this->_propDict["certificateRevokeStatus"], "Microsoft\Graph\Beta\Model\CertificateRevocationStatus")) {
                return $this->_propDict["certificateRevokeStatus"];
            } else {
                $this->_propDict["certificateRevokeStatus"] = new CertificateRevocationStatus($this->_propDict["certificateRevokeStatus"]);
                return $this->_propDict["certificateRevokeStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateRevokeStatus
    *
    * @param CertificateRevocationStatus $val The certificateRevokeStatus
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateRevokeStatus($val)
    {
        $this->_propDict["certificateRevokeStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateProfileDisplayName
    *
    * @return string The certificateProfileDisplayName
    */
    public function getCertificateProfileDisplayName()
    {
        if (array_key_exists("certificateProfileDisplayName", $this->_propDict)) {
            return $this->_propDict["certificateProfileDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateProfileDisplayName
    *
    * @param string $val The certificateProfileDisplayName
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateProfileDisplayName($val)
    {
        $this->_propDict["certificateProfileDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    *
    * @return string The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDisplayName
    *
    * @param string $val The deviceDisplayName
    *
    * @return ManagedDeviceCertificateState
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
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
    * @return ManagedDeviceCertificateState
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateExpirationDateTime
    *
    * @return \DateTime The certificateExpirationDateTime
    */
    public function getCertificateExpirationDateTime()
    {
        if (array_key_exists("certificateExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["certificateExpirationDateTime"];
            } else {
                $this->_propDict["certificateExpirationDateTime"] = new \DateTime($this->_propDict["certificateExpirationDateTime"]);
                return $this->_propDict["certificateExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateExpirationDateTime
    *
    * @param \DateTime $val The certificateExpirationDateTime
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateExpirationDateTime($val)
    {
        $this->_propDict["certificateExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateLastIssuanceStateChangedDateTime
    *
    * @return \DateTime The certificateLastIssuanceStateChangedDateTime
    */
    public function getCertificateLastIssuanceStateChangedDateTime()
    {
        if (array_key_exists("certificateLastIssuanceStateChangedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateLastIssuanceStateChangedDateTime"], "\DateTime")) {
                return $this->_propDict["certificateLastIssuanceStateChangedDateTime"];
            } else {
                $this->_propDict["certificateLastIssuanceStateChangedDateTime"] = new \DateTime($this->_propDict["certificateLastIssuanceStateChangedDateTime"]);
                return $this->_propDict["certificateLastIssuanceStateChangedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateLastIssuanceStateChangedDateTime
    *
    * @param \DateTime $val The certificateLastIssuanceStateChangedDateTime
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateLastIssuanceStateChangedDateTime($val)
    {
        $this->_propDict["certificateLastIssuanceStateChangedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastCertificateStateChangeDateTime
    *
    * @return \DateTime The lastCertificateStateChangeDateTime
    */
    public function getLastCertificateStateChangeDateTime()
    {
        if (array_key_exists("lastCertificateStateChangeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastCertificateStateChangeDateTime"], "\DateTime")) {
                return $this->_propDict["lastCertificateStateChangeDateTime"];
            } else {
                $this->_propDict["lastCertificateStateChangeDateTime"] = new \DateTime($this->_propDict["lastCertificateStateChangeDateTime"]);
                return $this->_propDict["lastCertificateStateChangeDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastCertificateStateChangeDateTime
    *
    * @param \DateTime $val The lastCertificateStateChangeDateTime
    *
    * @return ManagedDeviceCertificateState
    */
    public function setLastCertificateStateChangeDateTime($val)
    {
        $this->_propDict["lastCertificateStateChangeDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateIssuer
    *
    * @return string The certificateIssuer
    */
    public function getCertificateIssuer()
    {
        if (array_key_exists("certificateIssuer", $this->_propDict)) {
            return $this->_propDict["certificateIssuer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateIssuer
    *
    * @param string $val The certificateIssuer
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateIssuer($val)
    {
        $this->_propDict["certificateIssuer"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateThumbprint
    *
    * @return string The certificateThumbprint
    */
    public function getCertificateThumbprint()
    {
        if (array_key_exists("certificateThumbprint", $this->_propDict)) {
            return $this->_propDict["certificateThumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateThumbprint
    *
    * @param string $val The certificateThumbprint
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateThumbprint($val)
    {
        $this->_propDict["certificateThumbprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSerialNumber
    *
    * @return string The certificateSerialNumber
    */
    public function getCertificateSerialNumber()
    {
        if (array_key_exists("certificateSerialNumber", $this->_propDict)) {
            return $this->_propDict["certificateSerialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateSerialNumber
    *
    * @param string $val The certificateSerialNumber
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateSerialNumber($val)
    {
        $this->_propDict["certificateSerialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateKeyLength
    *
    * @return int The certificateKeyLength
    */
    public function getCertificateKeyLength()
    {
        if (array_key_exists("certificateKeyLength", $this->_propDict)) {
            return $this->_propDict["certificateKeyLength"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateKeyLength
    *
    * @param int $val The certificateKeyLength
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateKeyLength($val)
    {
        $this->_propDict["certificateKeyLength"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the certificateEnhancedKeyUsage
    *
    * @return string The certificateEnhancedKeyUsage
    */
    public function getCertificateEnhancedKeyUsage()
    {
        if (array_key_exists("certificateEnhancedKeyUsage", $this->_propDict)) {
            return $this->_propDict["certificateEnhancedKeyUsage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateEnhancedKeyUsage
    *
    * @param string $val The certificateEnhancedKeyUsage
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateEnhancedKeyUsage($val)
    {
        $this->_propDict["certificateEnhancedKeyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriod
    *
    * @return int The certificateValidityPeriod
    */
    public function getCertificateValidityPeriod()
    {
        if (array_key_exists("certificateValidityPeriod", $this->_propDict)) {
            return $this->_propDict["certificateValidityPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateValidityPeriod
    *
    * @param int $val The certificateValidityPeriod
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateValidityPeriod($val)
    {
        $this->_propDict["certificateValidityPeriod"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the certificateSubjectNameFormatString
    *
    * @return string The certificateSubjectNameFormatString
    */
    public function getCertificateSubjectNameFormatString()
    {
        if (array_key_exists("certificateSubjectNameFormatString", $this->_propDict)) {
            return $this->_propDict["certificateSubjectNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateSubjectNameFormatString
    *
    * @param string $val The certificateSubjectNameFormatString
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateSubjectNameFormatString($val)
    {
        $this->_propDict["certificateSubjectNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateSubjectAlternativeNameFormatString
    *
    * @return string The certificateSubjectAlternativeNameFormatString
    */
    public function getCertificateSubjectAlternativeNameFormatString()
    {
        if (array_key_exists("certificateSubjectAlternativeNameFormatString", $this->_propDict)) {
            return $this->_propDict["certificateSubjectAlternativeNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateSubjectAlternativeNameFormatString
    *
    * @param string $val The certificateSubjectAlternativeNameFormatString
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["certificateSubjectAlternativeNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateIssuanceDateTime
    *
    * @return \DateTime The certificateIssuanceDateTime
    */
    public function getCertificateIssuanceDateTime()
    {
        if (array_key_exists("certificateIssuanceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["certificateIssuanceDateTime"], "\DateTime")) {
                return $this->_propDict["certificateIssuanceDateTime"];
            } else {
                $this->_propDict["certificateIssuanceDateTime"] = new \DateTime($this->_propDict["certificateIssuanceDateTime"]);
                return $this->_propDict["certificateIssuanceDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateIssuanceDateTime
    *
    * @param \DateTime $val The certificateIssuanceDateTime
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateIssuanceDateTime($val)
    {
        $this->_propDict["certificateIssuanceDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateErrorCode
    *
    * @return int The certificateErrorCode
    */
    public function getCertificateErrorCode()
    {
        if (array_key_exists("certificateErrorCode", $this->_propDict)) {
            return $this->_propDict["certificateErrorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateErrorCode
    *
    * @param int $val The certificateErrorCode
    *
    * @return ManagedDeviceCertificateState
    */
    public function setCertificateErrorCode($val)
    {
        $this->_propDict["certificateErrorCode"] = intval($val);
        return $this;
    }
    
}
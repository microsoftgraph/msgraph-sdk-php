<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerCertificateProfileBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AndroidDeviceOwnerCertificateProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerCertificateProfileBase extends DeviceConfiguration
{
    /**
    * Gets the certificateValidityPeriodScale
    * Scale for the Certificate Validity Period.
    *
    * @return CertificateValidityPeriodScale The certificateValidityPeriodScale
    */
    public function getCertificateValidityPeriodScale()
    {
        if (array_key_exists("certificateValidityPeriodScale", $this->_propDict)) {
            if (is_a($this->_propDict["certificateValidityPeriodScale"], "Beta\Microsoft\Graph\Model\CertificateValidityPeriodScale")) {
                return $this->_propDict["certificateValidityPeriodScale"];
            } else {
                $this->_propDict["certificateValidityPeriodScale"] = new CertificateValidityPeriodScale($this->_propDict["certificateValidityPeriodScale"]);
                return $this->_propDict["certificateValidityPeriodScale"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateValidityPeriodScale
    * Scale for the Certificate Validity Period.
    *
    * @param CertificateValidityPeriodScale $val The certificateValidityPeriodScale
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setCertificateValidityPeriodScale($val)
    {
        $this->_propDict["certificateValidityPeriodScale"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodValue
    * Value for the Certificate Validity Period.
    *
    * @return int The certificateValidityPeriodValue
    */
    public function getCertificateValidityPeriodValue()
    {
        if (array_key_exists("certificateValidityPeriodValue", $this->_propDict)) {
            return $this->_propDict["certificateValidityPeriodValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateValidityPeriodValue
    * Value for the Certificate Validity Period.
    *
    * @param int $val The certificateValidityPeriodValue
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setCertificateValidityPeriodValue($val)
    {
        $this->_propDict["certificateValidityPeriodValue"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *
     * @return array The extendedKeyUsages
     */
    public function getExtendedKeyUsages()
    {
        if (array_key_exists("extendedKeyUsages", $this->_propDict)) {
           return $this->_propDict["extendedKeyUsages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
    *
    * @param ExtendedKeyUsage $val The extendedKeyUsages
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setExtendedKeyUsages($val)
    {
		$this->_propDict["extendedKeyUsages"] = $val;
        return $this;
    }
    
    /**
    * Gets the renewalThresholdPercentage
    * Certificate renewal threshold percentage. Valid values 1 to 99
    *
    * @return int The renewalThresholdPercentage
    */
    public function getRenewalThresholdPercentage()
    {
        if (array_key_exists("renewalThresholdPercentage", $this->_propDict)) {
            return $this->_propDict["renewalThresholdPercentage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the renewalThresholdPercentage
    * Certificate renewal threshold percentage. Valid values 1 to 99
    *
    * @param int $val The renewalThresholdPercentage
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setRenewalThresholdPercentage($val)
    {
        $this->_propDict["renewalThresholdPercentage"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameType
    * Certificate Subject Alternative Name Type.
    *
    * @return SubjectAlternativeNameType The subjectAlternativeNameType
    */
    public function getSubjectAlternativeNameType()
    {
        if (array_key_exists("subjectAlternativeNameType", $this->_propDict)) {
            if (is_a($this->_propDict["subjectAlternativeNameType"], "Beta\Microsoft\Graph\Model\SubjectAlternativeNameType")) {
                return $this->_propDict["subjectAlternativeNameType"];
            } else {
                $this->_propDict["subjectAlternativeNameType"] = new SubjectAlternativeNameType($this->_propDict["subjectAlternativeNameType"]);
                return $this->_propDict["subjectAlternativeNameType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subjectAlternativeNameType
    * Certificate Subject Alternative Name Type.
    *
    * @param SubjectAlternativeNameType $val The subjectAlternativeNameType
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setSubjectAlternativeNameType($val)
    {
        $this->_propDict["subjectAlternativeNameType"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectNameFormat
    * Certificate Subject Name Format.
    *
    * @return SubjectNameFormat The subjectNameFormat
    */
    public function getSubjectNameFormat()
    {
        if (array_key_exists("subjectNameFormat", $this->_propDict)) {
            if (is_a($this->_propDict["subjectNameFormat"], "Beta\Microsoft\Graph\Model\SubjectNameFormat")) {
                return $this->_propDict["subjectNameFormat"];
            } else {
                $this->_propDict["subjectNameFormat"] = new SubjectNameFormat($this->_propDict["subjectNameFormat"]);
                return $this->_propDict["subjectNameFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subjectNameFormat
    * Certificate Subject Name Format.
    *
    * @param SubjectNameFormat $val The subjectNameFormat
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setSubjectNameFormat($val)
    {
        $this->_propDict["subjectNameFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootCertificate
    * Trusted Root Certificate.
    *
    * @return AndroidDeviceOwnerTrustedRootCertificate The rootCertificate
    */
    public function getRootCertificate()
    {
        if (array_key_exists("rootCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificate"], "Beta\Microsoft\Graph\Model\AndroidDeviceOwnerTrustedRootCertificate")) {
                return $this->_propDict["rootCertificate"];
            } else {
                $this->_propDict["rootCertificate"] = new AndroidDeviceOwnerTrustedRootCertificate($this->_propDict["rootCertificate"]);
                return $this->_propDict["rootCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootCertificate
    * Trusted Root Certificate.
    *
    * @param AndroidDeviceOwnerTrustedRootCertificate $val The rootCertificate
    *
    * @return AndroidDeviceOwnerCertificateProfileBase
    */
    public function setRootCertificate($val)
    {
        $this->_propDict["rootCertificate"] = $val;
        return $this;
    }
    
}
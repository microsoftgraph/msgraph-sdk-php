<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSCertificateProfileBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* MacOSCertificateProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MacOSCertificateProfileBase extends DeviceConfiguration
{
    /**
    * Gets the renewalThresholdPercentage
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
    *
    * @param int $val The renewalThresholdPercentage
    *
    * @return MacOSCertificateProfileBase
    */
    public function setRenewalThresholdPercentage($val)
    {
        $this->_propDict["renewalThresholdPercentage"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the subjectNameFormat
    *
    * @return AppleSubjectNameFormat The subjectNameFormat
    */
    public function getSubjectNameFormat()
    {
        if (array_key_exists("subjectNameFormat", $this->_propDict)) {
            if (is_a($this->_propDict["subjectNameFormat"], "Microsoft\Graph\Beta\Model\AppleSubjectNameFormat")) {
                return $this->_propDict["subjectNameFormat"];
            } else {
                $this->_propDict["subjectNameFormat"] = new AppleSubjectNameFormat($this->_propDict["subjectNameFormat"]);
                return $this->_propDict["subjectNameFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subjectNameFormat
    *
    * @param AppleSubjectNameFormat $val The subjectNameFormat
    *
    * @return MacOSCertificateProfileBase
    */
    public function setSubjectNameFormat($val)
    {
        $this->_propDict["subjectNameFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameType
    *
    * @return SubjectAlternativeNameType The subjectAlternativeNameType
    */
    public function getSubjectAlternativeNameType()
    {
        if (array_key_exists("subjectAlternativeNameType", $this->_propDict)) {
            if (is_a($this->_propDict["subjectAlternativeNameType"], "Microsoft\Graph\Beta\Model\SubjectAlternativeNameType")) {
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
    *
    * @param SubjectAlternativeNameType $val The subjectAlternativeNameType
    *
    * @return MacOSCertificateProfileBase
    */
    public function setSubjectAlternativeNameType($val)
    {
        $this->_propDict["subjectAlternativeNameType"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodValue
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
    *
    * @param int $val The certificateValidityPeriodValue
    *
    * @return MacOSCertificateProfileBase
    */
    public function setCertificateValidityPeriodValue($val)
    {
        $this->_propDict["certificateValidityPeriodValue"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the certificateValidityPeriodScale
    *
    * @return CertificateValidityPeriodScale The certificateValidityPeriodScale
    */
    public function getCertificateValidityPeriodScale()
    {
        if (array_key_exists("certificateValidityPeriodScale", $this->_propDict)) {
            if (is_a($this->_propDict["certificateValidityPeriodScale"], "Microsoft\Graph\Beta\Model\CertificateValidityPeriodScale")) {
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
    *
    * @param CertificateValidityPeriodScale $val The certificateValidityPeriodScale
    *
    * @return MacOSCertificateProfileBase
    */
    public function setCertificateValidityPeriodScale($val)
    {
        $this->_propDict["certificateValidityPeriodScale"] = $val;
        return $this;
    }
    
}
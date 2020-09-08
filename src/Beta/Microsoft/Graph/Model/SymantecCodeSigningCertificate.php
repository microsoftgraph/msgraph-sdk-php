<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SymantecCodeSigningCertificate File
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
* SymantecCodeSigningCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SymantecCodeSigningCertificate extends Entity
{
    /**
    * Gets the content
    * The Windows Symantec Code-Signing Certificate in the raw data format.
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    * The Windows Symantec Code-Signing Certificate in the raw data format.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The content
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * The Cert Expiration Date.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * The Cert Expiration Date.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuer
    * The Issuer value for the cert.
    *
    * @return string The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issuer
    * The Issuer value for the cert.
    *
    * @param string $val The issuer
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuerName
    * The Issuer Name for the cert.
    *
    * @return string The issuerName
    */
    public function getIssuerName()
    {
        if (array_key_exists("issuerName", $this->_propDict)) {
            return $this->_propDict["issuerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the issuerName
    * The Issuer Name for the cert.
    *
    * @param string $val The issuerName
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setIssuerName($val)
    {
        $this->_propDict["issuerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the password
    * The Password required for .pfx file.
    *
    * @return string The password
    */
    public function getPassword()
    {
        if (array_key_exists("password", $this->_propDict)) {
            return $this->_propDict["password"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the password
    * The Password required for .pfx file.
    *
    * @param string $val The password
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setPassword($val)
    {
        $this->_propDict["password"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The Cert Status Provisioned or not Provisioned.
    *
    * @return CertificateStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\CertificateStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CertificateStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The Cert Status Provisioned or not Provisioned.
    *
    * @param CertificateStatus $val The status
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    * The Subject value for the cert.
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    * The Subject value for the cert.
    *
    * @param string $val The subject
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectName
    * The Subject Name for the cert.
    *
    * @return string The subjectName
    */
    public function getSubjectName()
    {
        if (array_key_exists("subjectName", $this->_propDict)) {
            return $this->_propDict["subjectName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectName
    * The Subject Name for the cert.
    *
    * @param string $val The subjectName
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setSubjectName($val)
    {
        $this->_propDict["subjectName"] = $val;
        return $this;
    }
    
    /**
    * Gets the uploadDateTime
    * The Type of the CodeSigning Cert as Symantec Cert.
    *
    * @return \DateTime The uploadDateTime
    */
    public function getUploadDateTime()
    {
        if (array_key_exists("uploadDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["uploadDateTime"], "\DateTime")) {
                return $this->_propDict["uploadDateTime"];
            } else {
                $this->_propDict["uploadDateTime"] = new \DateTime($this->_propDict["uploadDateTime"]);
                return $this->_propDict["uploadDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the uploadDateTime
    * The Type of the CodeSigning Cert as Symantec Cert.
    *
    * @param \DateTime $val The uploadDateTime
    *
    * @return SymantecCodeSigningCertificate
    */
    public function setUploadDateTime($val)
    {
        $this->_propDict["uploadDateTime"] = $val;
        return $this;
    }
    
}
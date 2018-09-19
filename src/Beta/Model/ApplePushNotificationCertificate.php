<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplePushNotificationCertificate File
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
* ApplePushNotificationCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ApplePushNotificationCertificate extends Entity
{
    /**
    * Gets the appleIdentifier
    *
    * @return string The appleIdentifier
    */
    public function getAppleIdentifier()
    {
        if (array_key_exists("appleIdentifier", $this->_propDict)) {
            return $this->_propDict["appleIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdentifier
    *
    * @param string $val The appleIdentifier
    *
    * @return ApplePushNotificationCertificate
    */
    public function setAppleIdentifier($val)
    {
        $this->_propDict["appleIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the topicIdentifier
    *
    * @return string The topicIdentifier
    */
    public function getTopicIdentifier()
    {
        if (array_key_exists("topicIdentifier", $this->_propDict)) {
            return $this->_propDict["topicIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the topicIdentifier
    *
    * @param string $val The topicIdentifier
    *
    * @return ApplePushNotificationCertificate
    */
    public function setTopicIdentifier($val)
    {
        $this->_propDict["topicIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ApplePushNotificationCertificate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
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
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return ApplePushNotificationCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateUploadStatus
    *
    * @return string The certificateUploadStatus
    */
    public function getCertificateUploadStatus()
    {
        if (array_key_exists("certificateUploadStatus", $this->_propDict)) {
            return $this->_propDict["certificateUploadStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateUploadStatus
    *
    * @param string $val The certificateUploadStatus
    *
    * @return ApplePushNotificationCertificate
    */
    public function setCertificateUploadStatus($val)
    {
        $this->_propDict["certificateUploadStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificateUploadFailureReason
    *
    * @return string The certificateUploadFailureReason
    */
    public function getCertificateUploadFailureReason()
    {
        if (array_key_exists("certificateUploadFailureReason", $this->_propDict)) {
            return $this->_propDict["certificateUploadFailureReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateUploadFailureReason
    *
    * @param string $val The certificateUploadFailureReason
    *
    * @return ApplePushNotificationCertificate
    */
    public function setCertificateUploadFailureReason($val)
    {
        $this->_propDict["certificateUploadFailureReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificate
    *
    * @return string The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            return $this->_propDict["certificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificate
    *
    * @param string $val The certificate
    *
    * @return ApplePushNotificationCertificate
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
        return $this;
    }
    
}
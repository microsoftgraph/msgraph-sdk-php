<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceCertificateState File
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
* ManagedDeviceCertificateState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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
    * Gets the serverUrl
    *
    * @return string The serverUrl
    */
    public function getServerUrl()
    {
        if (array_key_exists("serverUrl", $this->_propDict)) {
            return $this->_propDict["serverUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serverUrl
    *
    * @param string $val The serverUrl
    *
    * @return ManagedDeviceCertificateState
    */
    public function setServerUrl($val)
    {
        $this->_propDict["serverUrl"] = $val;
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
    * Gets the enhancedKeyUsage
    *
    * @return string The enhancedKeyUsage
    */
    public function getEnhancedKeyUsage()
    {
        if (array_key_exists("enhancedKeyUsage", $this->_propDict)) {
            return $this->_propDict["enhancedKeyUsage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enhancedKeyUsage
    *
    * @param string $val The enhancedKeyUsage
    *
    * @return ManagedDeviceCertificateState
    */
    public function setEnhancedKeyUsage($val)
    {
        $this->_propDict["enhancedKeyUsage"] = $val;
        return $this;
    }
    
}
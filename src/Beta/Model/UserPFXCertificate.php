<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPFXCertificate File
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
* UserPFXCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserPFXCertificate extends Entity
{
    /**
    * Gets the thumbprint
    *
    * @return string The thumbprint
    */
    public function getThumbprint()
    {
        if (array_key_exists("thumbprint", $this->_propDict)) {
            return $this->_propDict["thumbprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbprint
    *
    * @param string $val The thumbprint
    *
    * @return UserPFXCertificate
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the intendedPurpose
    *
    * @return UserPfxIntendedPurpose The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict)) {
            if (is_a($this->_propDict["intendedPurpose"], "Microsoft\Graph\Beta\Model\UserPfxIntendedPurpose")) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new UserPfxIntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intendedPurpose
    *
    * @param UserPfxIntendedPurpose $val The intendedPurpose
    *
    * @return UserPFXCertificate
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
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
    * @return UserPFXCertificate
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return UserPFXCertificate
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
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
    * @return UserPFXCertificate
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerName
    *
    * @return string The providerName
    */
    public function getProviderName()
    {
        if (array_key_exists("providerName", $this->_propDict)) {
            return $this->_propDict["providerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the providerName
    *
    * @param string $val The providerName
    *
    * @return UserPFXCertificate
    */
    public function setProviderName($val)
    {
        $this->_propDict["providerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyName
    *
    * @return string The keyName
    */
    public function getKeyName()
    {
        if (array_key_exists("keyName", $this->_propDict)) {
            return $this->_propDict["keyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keyName
    *
    * @param string $val The keyName
    *
    * @return UserPFXCertificate
    */
    public function setKeyName($val)
    {
        $this->_propDict["keyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the paddingScheme
    *
    * @return UserPfxPaddingScheme The paddingScheme
    */
    public function getPaddingScheme()
    {
        if (array_key_exists("paddingScheme", $this->_propDict)) {
            if (is_a($this->_propDict["paddingScheme"], "Microsoft\Graph\Beta\Model\UserPfxPaddingScheme")) {
                return $this->_propDict["paddingScheme"];
            } else {
                $this->_propDict["paddingScheme"] = new UserPfxPaddingScheme($this->_propDict["paddingScheme"]);
                return $this->_propDict["paddingScheme"];
            }
        }
        return null;
    }
    
    /**
    * Sets the paddingScheme
    *
    * @param UserPfxPaddingScheme $val The paddingScheme
    *
    * @return UserPFXCertificate
    */
    public function setPaddingScheme($val)
    {
        $this->_propDict["paddingScheme"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptedPfxBlob
    *
    * @return \GuzzleHttp\Psr7\Stream The encryptedPfxBlob
    */
    public function getEncryptedPfxBlob()
    {
        if (array_key_exists("encryptedPfxBlob", $this->_propDict)) {
            if (is_a($this->_propDict["encryptedPfxBlob"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["encryptedPfxBlob"];
            } else {
                $this->_propDict["encryptedPfxBlob"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["encryptedPfxBlob"]);
                return $this->_propDict["encryptedPfxBlob"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptedPfxBlob
    *
    * @param \GuzzleHttp\Psr7\Stream $val The encryptedPfxBlob
    *
    * @return UserPFXCertificate
    */
    public function setEncryptedPfxBlob($val)
    {
        $this->_propDict["encryptedPfxBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptedPfxPassword
    *
    * @return string The encryptedPfxPassword
    */
    public function getEncryptedPfxPassword()
    {
        if (array_key_exists("encryptedPfxPassword", $this->_propDict)) {
            return $this->_propDict["encryptedPfxPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the encryptedPfxPassword
    *
    * @param string $val The encryptedPfxPassword
    *
    * @return UserPFXCertificate
    */
    public function setEncryptedPfxPassword($val)
    {
        $this->_propDict["encryptedPfxPassword"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserPFXCertificate
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return UserPFXCertificate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
}
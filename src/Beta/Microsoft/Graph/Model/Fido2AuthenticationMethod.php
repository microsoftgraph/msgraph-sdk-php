<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Fido2AuthenticationMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Fido2AuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Fido2AuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the aaGuid
    *
    * @return string The aaGuid
    */
    public function getAaGuid()
    {
        if (array_key_exists("aaGuid", $this->_propDict)) {
            return $this->_propDict["aaGuid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the aaGuid
    *
    * @param string $val The aaGuid
    *
    * @return Fido2AuthenticationMethod
    */
    public function setAaGuid($val)
    {
        $this->_propDict["aaGuid"] = $val;
        return $this;
    }
    
    /**
    * Gets the attestationCertificates
    *
    * @return string The attestationCertificates
    */
    public function getAttestationCertificates()
    {
        if (array_key_exists("attestationCertificates", $this->_propDict)) {
            return $this->_propDict["attestationCertificates"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the attestationCertificates
    *
    * @param string $val The attestationCertificates
    *
    * @return Fido2AuthenticationMethod
    */
    public function setAttestationCertificates($val)
    {
        $this->_propDict["attestationCertificates"] = $val;
        return $this;
    }
    
    /**
    * Gets the attestationLevel
    *
    * @return AttestationLevel The attestationLevel
    */
    public function getAttestationLevel()
    {
        if (array_key_exists("attestationLevel", $this->_propDict)) {
            if (is_a($this->_propDict["attestationLevel"], "Beta\Microsoft\Graph\Model\AttestationLevel")) {
                return $this->_propDict["attestationLevel"];
            } else {
                $this->_propDict["attestationLevel"] = new AttestationLevel($this->_propDict["attestationLevel"]);
                return $this->_propDict["attestationLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the attestationLevel
    *
    * @param AttestationLevel $val The attestationLevel
    *
    * @return Fido2AuthenticationMethod
    */
    public function setAttestationLevel($val)
    {
        $this->_propDict["attestationLevel"] = $val;
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
    * @return Fido2AuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationDateTime
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationDateTime
    *
    * @param \DateTime $val The creationDateTime
    *
    * @return Fido2AuthenticationMethod
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Fido2AuthenticationMethod
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
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
    * @return Fido2AuthenticationMethod
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
}
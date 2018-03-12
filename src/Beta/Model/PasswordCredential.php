<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordCredential File
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
* PasswordCredential class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PasswordCredential extends Entity
{

    /**
    * Gets the customKeyIdentifier
    *
    * @return \GuzzleHttp\Psr7\Stream The customKeyIdentifier
    */
    public function getCustomKeyIdentifier()
    {
        if (array_key_exists("customKeyIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["customKeyIdentifier"], "Microsoft\Graph\Beta\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["customKeyIdentifier"];
            } else {
                $this->_propDict["customKeyIdentifier"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["customKeyIdentifier"]);
                return $this->_propDict["customKeyIdentifier"];
            }
        }
        return null;
    }

    /**
    * Sets the customKeyIdentifier
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the customKeyIdentifier
    *
    * @return PasswordCredential The PasswordCredential
    */
    public function setCustomKeyIdentifier($val)
    {
        $this->_propDict["customKeyIdentifier"] = $val;
         return $this;
    }

    /**
    * Gets the endDateTime
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The value to assign to the endDateTime
    *
    * @return PasswordCredential The PasswordCredential
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the keyId
    *
    * @return string The keyId
    */
    public function getKeyId()
    {
        if (array_key_exists("keyId", $this->_propDict)) {
            return $this->_propDict["keyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the keyId
    *
    * @param string $val The value of the keyId
    *
    * @return PasswordCredential
    */
    public function setKeyId($val)
    {
        $this->_propDict["keyId"] = $val;
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
            if (is_a($this->_propDict["startDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
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
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return PasswordCredential The PasswordCredential
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the secretText
    *
    * @return string The secretText
    */
    public function getSecretText()
    {
        if (array_key_exists("secretText", $this->_propDict)) {
            return $this->_propDict["secretText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secretText
    *
    * @param string $val The value of the secretText
    *
    * @return PasswordCredential
    */
    public function setSecretText($val)
    {
        $this->_propDict["secretText"] = $val;
        return $this;
    }
    /**
    * Gets the hint
    *
    * @return string The hint
    */
    public function getHint()
    {
        if (array_key_exists("hint", $this->_propDict)) {
            return $this->_propDict["hint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hint
    *
    * @param string $val The value of the hint
    *
    * @return PasswordCredential
    */
    public function setHint($val)
    {
        $this->_propDict["hint"] = $val;
        return $this;
    }
}

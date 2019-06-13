<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KeyCredential File
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
* KeyCredential class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class KeyCredential extends Entity
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
    * @return KeyCredential The KeyCredential
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
    * @return KeyCredential The KeyCredential
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
    * @return KeyCredential
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
    * @return KeyCredential The KeyCredential
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The value of the type
    *
    * @return KeyCredential
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the usage
    *
    * @return string The usage
    */
    public function getUsage()
    {
        if (array_key_exists("usage", $this->_propDict)) {
            return $this->_propDict["usage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usage
    *
    * @param string $val The value of the usage
    *
    * @return KeyCredential
    */
    public function setUsage($val)
    {
        $this->_propDict["usage"] = $val;
        return $this;
    }

    /**
    * Gets the key
    *
    * @return \GuzzleHttp\Psr7\Stream The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "Microsoft\Graph\Beta\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the key
    *
    * @return KeyCredential The KeyCredential
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return KeyCredential
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailObservable File
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
* EmailObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailObservable extends Entity
{
    /**
    * Gets the encoding
    *
    * @return string The encoding
    */
    public function getEncoding()
    {
        if (array_key_exists("encoding", $this->_propDict)) {
            return $this->_propDict["encoding"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encoding
    *
    * @param string $val The value of the encoding
    *
    * @return EmailObservable
    */
    public function setEncoding($val)
    {
        $this->_propDict["encoding"] = $val;
        return $this;
    }
    /**
    * Gets the language
    *
    * @return string The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    *
    * @param string $val The value of the language
    *
    * @return EmailObservable
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the recipient
    *
    * @return string The recipient
    */
    public function getRecipient()
    {
        if (array_key_exists("recipient", $this->_propDict)) {
            return $this->_propDict["recipient"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipient
    *
    * @param string $val The value of the recipient
    *
    * @return EmailObservable
    */
    public function setRecipient($val)
    {
        $this->_propDict["recipient"] = $val;
        return $this;
    }
    /**
    * Gets the senderAddress
    *
    * @return string The senderAddress
    */
    public function getSenderAddress()
    {
        if (array_key_exists("senderAddress", $this->_propDict)) {
            return $this->_propDict["senderAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderAddress
    *
    * @param string $val The value of the senderAddress
    *
    * @return EmailObservable
    */
    public function setSenderAddress($val)
    {
        $this->_propDict["senderAddress"] = $val;
        return $this;
    }
    /**
    * Gets the senderName
    *
    * @return string The senderName
    */
    public function getSenderName()
    {
        if (array_key_exists("senderName", $this->_propDict)) {
            return $this->_propDict["senderName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderName
    *
    * @param string $val The value of the senderName
    *
    * @return EmailObservable
    */
    public function setSenderName($val)
    {
        $this->_propDict["senderName"] = $val;
        return $this;
    }
    /**
    * Gets the sourceDomain
    *
    * @return string The sourceDomain
    */
    public function getSourceDomain()
    {
        if (array_key_exists("sourceDomain", $this->_propDict)) {
            return $this->_propDict["sourceDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceDomain
    *
    * @param string $val The value of the sourceDomain
    *
    * @return EmailObservable
    */
    public function setSourceDomain($val)
    {
        $this->_propDict["sourceDomain"] = $val;
        return $this;
    }
    /**
    * Gets the sourceIPAddress
    *
    * @return string The sourceIPAddress
    */
    public function getSourceIPAddress()
    {
        if (array_key_exists("sourceIPAddress", $this->_propDict)) {
            return $this->_propDict["sourceIPAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIPAddress
    *
    * @param string $val The value of the sourceIPAddress
    *
    * @return EmailObservable
    */
    public function setSourceIPAddress($val)
    {
        $this->_propDict["sourceIPAddress"] = $val;
        return $this;
    }
    /**
    * Gets the subject
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
    *
    * @param string $val The value of the subject
    *
    * @return EmailObservable
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    /**
    * Gets the xmailer
    *
    * @return string The xmailer
    */
    public function getXmailer()
    {
        if (array_key_exists("xmailer", $this->_propDict)) {
            return $this->_propDict["xmailer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the xmailer
    *
    * @param string $val The value of the xmailer
    *
    * @return EmailObservable
    */
    public function setXmailer($val)
    {
        $this->_propDict["xmailer"] = $val;
        return $this;
    }
}

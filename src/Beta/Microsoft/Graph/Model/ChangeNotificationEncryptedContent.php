<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChangeNotificationEncryptedContent File
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
* ChangeNotificationEncryptedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChangeNotificationEncryptedContent extends Entity
{
    /**
    * Gets the data
    *
    * @return string The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            return $this->_propDict["data"];
        } else {
            return null;
        }
    }

    /**
    * Sets the data
    *
    * @param string $val The value of the data
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
        return $this;
    }
    /**
    * Gets the dataKey
    *
    * @return string The dataKey
    */
    public function getDataKey()
    {
        if (array_key_exists("dataKey", $this->_propDict)) {
            return $this->_propDict["dataKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataKey
    *
    * @param string $val The value of the dataKey
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setDataKey($val)
    {
        $this->_propDict["dataKey"] = $val;
        return $this;
    }
    /**
    * Gets the dataSignature
    *
    * @return string The dataSignature
    */
    public function getDataSignature()
    {
        if (array_key_exists("dataSignature", $this->_propDict)) {
            return $this->_propDict["dataSignature"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataSignature
    *
    * @param string $val The value of the dataSignature
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setDataSignature($val)
    {
        $this->_propDict["dataSignature"] = $val;
        return $this;
    }
    /**
    * Gets the encryptionCertificateId
    *
    * @return string The encryptionCertificateId
    */
    public function getEncryptionCertificateId()
    {
        if (array_key_exists("encryptionCertificateId", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificateId
    *
    * @param string $val The value of the encryptionCertificateId
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setEncryptionCertificateId($val)
    {
        $this->_propDict["encryptionCertificateId"] = $val;
        return $this;
    }
    /**
    * Gets the encryptionCertificateThumbprint
    *
    * @return string The encryptionCertificateThumbprint
    */
    public function getEncryptionCertificateThumbprint()
    {
        if (array_key_exists("encryptionCertificateThumbprint", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateThumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificateThumbprint
    *
    * @param string $val The value of the encryptionCertificateThumbprint
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setEncryptionCertificateThumbprint($val)
    {
        $this->_propDict["encryptionCertificateThumbprint"] = $val;
        return $this;
    }
}

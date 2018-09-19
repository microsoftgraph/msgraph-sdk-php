<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateObservable File
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
* CertificateObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CertificateObservable extends Entity
{
    /**
    * Gets the issuer
    *
    * @return int The issuer
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
    *
    * @param int $val The value of the issuer
    *
    * @return CertificateObservable
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    /**
    * Gets the publicKey
    *
    * @return string The publicKey
    */
    public function getPublicKey()
    {
        if (array_key_exists("publicKey", $this->_propDict)) {
            return $this->_propDict["publicKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publicKey
    *
    * @param string $val The value of the publicKey
    *
    * @return CertificateObservable
    */
    public function setPublicKey($val)
    {
        $this->_propDict["publicKey"] = $val;
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
    * @return CertificateObservable
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
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
    * @param string $val The value of the thumbprint
    *
    * @return CertificateObservable
    */
    public function setThumbprint($val)
    {
        $this->_propDict["thumbprint"] = $val;
        return $this;
    }
}

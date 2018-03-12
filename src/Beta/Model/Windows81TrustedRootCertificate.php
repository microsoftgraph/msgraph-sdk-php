<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81TrustedRootCertificate File
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
* Windows81TrustedRootCertificate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows81TrustedRootCertificate extends DeviceConfiguration
{
    /**
    * Gets the trustedRootCertificate
    *
    * @return \GuzzleHttp\Psr7\Stream The trustedRootCertificate
    */
    public function getTrustedRootCertificate()
    {
        if (array_key_exists("trustedRootCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["trustedRootCertificate"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["trustedRootCertificate"];
            } else {
                $this->_propDict["trustedRootCertificate"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["trustedRootCertificate"]);
                return $this->_propDict["trustedRootCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the trustedRootCertificate
    *
    * @param \GuzzleHttp\Psr7\Stream $val The trustedRootCertificate
    *
    * @return Windows81TrustedRootCertificate
    */
    public function setTrustedRootCertificate($val)
    {
        $this->_propDict["trustedRootCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the certFileName
    *
    * @return string The certFileName
    */
    public function getCertFileName()
    {
        if (array_key_exists("certFileName", $this->_propDict)) {
            return $this->_propDict["certFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certFileName
    *
    * @param string $val The certFileName
    *
    * @return Windows81TrustedRootCertificate
    */
    public function setCertFileName($val)
    {
        $this->_propDict["certFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the destinationStore
    *
    * @return CertificateDestinationStore The destinationStore
    */
    public function getDestinationStore()
    {
        if (array_key_exists("destinationStore", $this->_propDict)) {
            if (is_a($this->_propDict["destinationStore"], "Microsoft\Graph\Model\CertificateDestinationStore")) {
                return $this->_propDict["destinationStore"];
            } else {
                $this->_propDict["destinationStore"] = new CertificateDestinationStore($this->_propDict["destinationStore"]);
                return $this->_propDict["destinationStore"];
            }
        }
        return null;
    }
    
    /**
    * Sets the destinationStore
    *
    * @param CertificateDestinationStore $val The destinationStore
    *
    * @return Windows81TrustedRootCertificate
    */
    public function setDestinationStore($val)
    {
        $this->_propDict["destinationStore"] = $val;
        return $this;
    }
    
}
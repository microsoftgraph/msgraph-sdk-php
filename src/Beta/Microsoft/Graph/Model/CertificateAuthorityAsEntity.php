<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateAuthorityAsEntity File
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
* CertificateAuthorityAsEntity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateAuthorityAsEntity extends Entity
{
    /**
    * Gets the certificate
    * The trusted certificate.
    *
    * @return \GuzzleHttp\Psr7\Stream|null The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            if (is_a($this->_propDict["certificate"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["certificate"])) {
                return $this->_propDict["certificate"];
            } else {
                $this->_propDict["certificate"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["certificate"]);
                return $this->_propDict["certificate"];
            }
        }
        return null;
    }

    /**
    * Sets the certificate
    * The trusted certificate.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The certificate
    *
    * @return CertificateAuthorityAsEntity
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
        return $this;
    }

    /**
    * Gets the isRootAuthority
    * Indicates if the certificate is a root authority. In a certificateBasedApplicationConfiguration object, at least one object in the trustedCertificateAuthorities collection must be a root authority.
    *
    * @return bool|null The isRootAuthority
    */
    public function getIsRootAuthority()
    {
        if (array_key_exists("isRootAuthority", $this->_propDict)) {
            return $this->_propDict["isRootAuthority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRootAuthority
    * Indicates if the certificate is a root authority. In a certificateBasedApplicationConfiguration object, at least one object in the trustedCertificateAuthorities collection must be a root authority.
    *
    * @param bool $val The isRootAuthority
    *
    * @return CertificateAuthorityAsEntity
    */
    public function setIsRootAuthority($val)
    {
        $this->_propDict["isRootAuthority"] = boolval($val);
        return $this;
    }

    /**
    * Gets the issuer
    * The issuer of the trusted certificate.
    *
    * @return string|null The issuer
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
    * The issuer of the trusted certificate.
    *
    * @param string $val The issuer
    *
    * @return CertificateAuthorityAsEntity
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }

    /**
    * Gets the issuerSubjectKeyIdentifier
    * The subject key identifier of the trusted certificate.
    *
    * @return string|null The issuerSubjectKeyIdentifier
    */
    public function getIssuerSubjectKeyIdentifier()
    {
        if (array_key_exists("issuerSubjectKeyIdentifier", $this->_propDict)) {
            return $this->_propDict["issuerSubjectKeyIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerSubjectKeyIdentifier
    * The subject key identifier of the trusted certificate.
    *
    * @param string $val The issuerSubjectKeyIdentifier
    *
    * @return CertificateAuthorityAsEntity
    */
    public function setIssuerSubjectKeyIdentifier($val)
    {
        $this->_propDict["issuerSubjectKeyIdentifier"] = $val;
        return $this;
    }

}

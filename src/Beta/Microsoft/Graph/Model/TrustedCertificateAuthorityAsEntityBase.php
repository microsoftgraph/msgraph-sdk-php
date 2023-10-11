<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustedCertificateAuthorityAsEntityBase File
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
* TrustedCertificateAuthorityAsEntityBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustedCertificateAuthorityAsEntityBase extends DirectoryObject
{

     /**
     * Gets the trustedCertificateAuthorities
    * Collection of trusted certificate authorities.
     *
     * @return array|null The trustedCertificateAuthorities
     */
    public function getTrustedCertificateAuthorities()
    {
        if (array_key_exists("trustedCertificateAuthorities", $this->_propDict)) {
           return $this->_propDict["trustedCertificateAuthorities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trustedCertificateAuthorities
    * Collection of trusted certificate authorities.
    *
    * @param CertificateAuthorityAsEntity[] $val The trustedCertificateAuthorities
    *
    * @return TrustedCertificateAuthorityAsEntityBase
    */
    public function setTrustedCertificateAuthorities($val)
    {
        $this->_propDict["trustedCertificateAuthorities"] = $val;
        return $this;
    }

}

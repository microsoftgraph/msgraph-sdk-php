<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateAuthorityPath File
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
* CertificateAuthorityPath class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateAuthorityPath extends Entity
{

     /**
     * Gets the certificateBasedApplicationConfigurations
     *
     * @return array|null The certificateBasedApplicationConfigurations
     */
    public function getCertificateBasedApplicationConfigurations()
    {
        if (array_key_exists("certificateBasedApplicationConfigurations", $this->_propDict)) {
           return $this->_propDict["certificateBasedApplicationConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateBasedApplicationConfigurations
    *
    * @param CertificateBasedApplicationConfiguration[] $val The certificateBasedApplicationConfigurations
    *
    * @return CertificateAuthorityPath
    */
    public function setCertificateBasedApplicationConfigurations($val)
    {
        $this->_propDict["certificateBasedApplicationConfigurations"] = $val;
        return $this;
    }

}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* X509CertificateIssuerHintsConfiguration File
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
* X509CertificateIssuerHintsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class X509CertificateIssuerHintsConfiguration extends Entity
{

    /**
    * Gets the state
    *
    * @return X509CertificateIssuerHintsState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\X509CertificateIssuerHintsState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new X509CertificateIssuerHintsState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param X509CertificateIssuerHintsState $val The value to assign to the state
    *
    * @return X509CertificateIssuerHintsConfiguration The X509CertificateIssuerHintsConfiguration
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerVpnConfiguration File
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
* AndroidDeviceOwnerVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerVpnConfiguration extends VpnConfiguration
{
    /**
    * Gets the connectionType
    * Connection type.
    *
    * @return AndroidVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "Microsoft\Graph\Beta\Model\AndroidVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AndroidVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type.
    *
    * @param AndroidVpnConnectionType $val The connectionType
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return AndroidDeviceOwnerCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidDeviceOwnerCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param AndroidDeviceOwnerCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
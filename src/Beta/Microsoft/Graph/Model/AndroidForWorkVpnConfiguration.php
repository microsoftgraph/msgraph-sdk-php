<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkVpnConfiguration File
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
* AndroidForWorkVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the authenticationMethod
    * Authentication method.
    *
    * @return VpnAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Beta\Microsoft\Graph\Model\VpnAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new VpnAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method.
    *
    * @param VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionName
    * Connection name displayed to the user.
    *
    * @return string The connectionName
    */
    public function getConnectionName()
    {
        if (array_key_exists("connectionName", $this->_propDict)) {
            return $this->_propDict["connectionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectionName
    * Connection name displayed to the user.
    *
    * @param string $val The connectionName
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type.
    *
    * @return AndroidForWorkVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "Beta\Microsoft\Graph\Model\AndroidForWorkVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AndroidForWorkVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type.
    *
    * @param AndroidForWorkVpnConnectionType $val The connectionType
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return array The customData
     */
    public function getCustomData()
    {
        if (array_key_exists("customData", $this->_propDict)) {
           return $this->_propDict["customData"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValue $val The customData
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setCustomData($val)
    {
		$this->_propDict["customData"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return array The customKeyValueData
     */
    public function getCustomKeyValueData()
    {
        if (array_key_exists("customKeyValueData", $this->_propDict)) {
           return $this->_propDict["customKeyValueData"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValuePair $val The customKeyValueData
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setCustomKeyValueData($val)
    {
		$this->_propDict["customKeyValueData"] = $val;
        return $this;
    }
    
    /**
    * Gets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @return string The fingerprint
    */
    public function getFingerprint()
    {
        if (array_key_exists("fingerprint", $this->_propDict)) {
            return $this->_propDict["fingerprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @param string $val The fingerprint
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setFingerprint($val)
    {
        $this->_propDict["fingerprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the realm
    * Realm when connection type is set to Pulse Secure.
    *
    * @return string The realm
    */
    public function getRealm()
    {
        if (array_key_exists("realm", $this->_propDict)) {
            return $this->_propDict["realm"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the realm
    * Realm when connection type is set to Pulse Secure.
    *
    * @param string $val The realm
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
        return $this;
    }
    
    /**
    * Gets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @return string The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @param string $val The role
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *
     * @return array The servers
     */
    public function getServers()
    {
        if (array_key_exists("servers", $this->_propDict)) {
           return $this->_propDict["servers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    *
    * @param VpnServer $val The servers
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setServers($val)
    {
		$this->_propDict["servers"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return AndroidForWorkCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "Beta\Microsoft\Graph\Model\AndroidForWorkCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidForWorkCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param AndroidForWorkCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidForWorkVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
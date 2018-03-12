<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVpnConfiguration File
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
* AppleVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AppleVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectionName
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
    *
    * @param string $val The connectionName
    *
    * @return AppleVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    *
    * @return AppleVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "Microsoft\Graph\Model\AppleVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AppleVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    *
    * @param AppleVpnConnectionType $val The connectionType
    *
    * @return AppleVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginGroupOrDomain
    *
    * @return string The loginGroupOrDomain
    */
    public function getLoginGroupOrDomain()
    {
        if (array_key_exists("loginGroupOrDomain", $this->_propDict)) {
            return $this->_propDict["loginGroupOrDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginGroupOrDomain
    *
    * @param string $val The loginGroupOrDomain
    *
    * @return AppleVpnConfiguration
    */
    public function setLoginGroupOrDomain($val)
    {
        $this->_propDict["loginGroupOrDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the role
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
    *
    * @param string $val The role
    *
    * @return AppleVpnConfiguration
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    
    /**
    * Gets the realm
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
    *
    * @param string $val The realm
    *
    * @return AppleVpnConfiguration
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
        return $this;
    }
    
    /**
    * Gets the server
    *
    * @return VpnServer The server
    */
    public function getServer()
    {
        if (array_key_exists("server", $this->_propDict)) {
            if (is_a($this->_propDict["server"], "Microsoft\Graph\Model\VpnServer")) {
                return $this->_propDict["server"];
            } else {
                $this->_propDict["server"] = new VpnServer($this->_propDict["server"]);
                return $this->_propDict["server"];
            }
        }
        return null;
    }
    
    /**
    * Sets the server
    *
    * @param VpnServer $val The server
    *
    * @return AppleVpnConfiguration
    */
    public function setServer($val)
    {
        $this->_propDict["server"] = $val;
        return $this;
    }
    
    /**
    * Gets the identifier
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identifier
    *
    * @param string $val The identifier
    *
    * @return AppleVpnConfiguration
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
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
    *
    * @param KeyValue $val The customData
    *
    * @return AppleVpnConfiguration
    */
    public function setCustomData($val)
    {
		$this->_propDict["customData"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    *
    * @return bool The enableSplitTunneling
    */
    public function getEnableSplitTunneling()
    {
        if (array_key_exists("enableSplitTunneling", $this->_propDict)) {
            return $this->_propDict["enableSplitTunneling"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSplitTunneling
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return AppleVpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    *
    * @return VpnAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "Microsoft\Graph\Model\VpnAuthenticationMethod")) {
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
    *
    * @param VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return AppleVpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the enablePerApp
    *
    * @return bool The enablePerApp
    */
    public function getEnablePerApp()
    {
        if (array_key_exists("enablePerApp", $this->_propDict)) {
            return $this->_propDict["enablePerApp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePerApp
    *
    * @param bool $val The enablePerApp
    *
    * @return AppleVpnConfiguration
    */
    public function setEnablePerApp($val)
    {
        $this->_propDict["enablePerApp"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the safariDomains
    *
    * @return string The safariDomains
    */
    public function getSafariDomains()
    {
        if (array_key_exists("safariDomains", $this->_propDict)) {
            return $this->_propDict["safariDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariDomains
    *
    * @param string $val The safariDomains
    *
    * @return AppleVpnConfiguration
    */
    public function setSafariDomains($val)
    {
        $this->_propDict["safariDomains"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onDemandRules
     *
     * @return array The onDemandRules
     */
    public function getOnDemandRules()
    {
        if (array_key_exists("onDemandRules", $this->_propDict)) {
           return $this->_propDict["onDemandRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onDemandRules
    *
    * @param VpnOnDemandRule $val The onDemandRules
    *
    * @return AppleVpnConfiguration
    */
    public function setOnDemandRules($val)
    {
		$this->_propDict["onDemandRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    *
    * @return VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "Microsoft\Graph\Model\VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    *
    * @param VpnProxyServer $val The proxyServer
    *
    * @return AppleVpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    
}
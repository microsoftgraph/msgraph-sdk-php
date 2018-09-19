<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSEndpointProtectionConfiguration File
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
* MacOSEndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSEndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the gatekeeperAllowedAppSource
    *
    * @return MacOSGatekeeperAppSources The gatekeeperAllowedAppSource
    */
    public function getGatekeeperAllowedAppSource()
    {
        if (array_key_exists("gatekeeperAllowedAppSource", $this->_propDict)) {
            if (is_a($this->_propDict["gatekeeperAllowedAppSource"], "Microsoft\Graph\Beta\Model\MacOSGatekeeperAppSources")) {
                return $this->_propDict["gatekeeperAllowedAppSource"];
            } else {
                $this->_propDict["gatekeeperAllowedAppSource"] = new MacOSGatekeeperAppSources($this->_propDict["gatekeeperAllowedAppSource"]);
                return $this->_propDict["gatekeeperAllowedAppSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the gatekeeperAllowedAppSource
    *
    * @param MacOSGatekeeperAppSources $val The gatekeeperAllowedAppSource
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperAllowedAppSource($val)
    {
        $this->_propDict["gatekeeperAllowedAppSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the gatekeeperBlockOverride
    *
    * @return bool The gatekeeperBlockOverride
    */
    public function getGatekeeperBlockOverride()
    {
        if (array_key_exists("gatekeeperBlockOverride", $this->_propDict)) {
            return $this->_propDict["gatekeeperBlockOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gatekeeperBlockOverride
    *
    * @param bool $val The gatekeeperBlockOverride
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperBlockOverride($val)
    {
        $this->_propDict["gatekeeperBlockOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnabled
    *
    * @return bool The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            return $this->_propDict["firewallEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnabled
    *
    * @param bool $val The firewallEnabled
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallBlockAllIncoming
    *
    * @return bool The firewallBlockAllIncoming
    */
    public function getFirewallBlockAllIncoming()
    {
        if (array_key_exists("firewallBlockAllIncoming", $this->_propDict)) {
            return $this->_propDict["firewallBlockAllIncoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockAllIncoming
    *
    * @param bool $val The firewallBlockAllIncoming
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallBlockAllIncoming($val)
    {
        $this->_propDict["firewallBlockAllIncoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnableStealthMode
    *
    * @return bool The firewallEnableStealthMode
    */
    public function getFirewallEnableStealthMode()
    {
        if (array_key_exists("firewallEnableStealthMode", $this->_propDict)) {
            return $this->_propDict["firewallEnableStealthMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnableStealthMode
    *
    * @param bool $val The firewallEnableStealthMode
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnableStealthMode($val)
    {
        $this->_propDict["firewallEnableStealthMode"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the firewallApplications
     *
     * @return array The firewallApplications
     */
    public function getFirewallApplications()
    {
        if (array_key_exists("firewallApplications", $this->_propDict)) {
           return $this->_propDict["firewallApplications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the firewallApplications
    *
    * @param MacOSFirewallApplication $val The firewallApplications
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallApplications($val)
    {
		$this->_propDict["firewallApplications"] = $val;
        return $this;
    }
    
}
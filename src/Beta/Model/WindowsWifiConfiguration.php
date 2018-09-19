<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsWifiConfiguration File
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
* WindowsWifiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsWifiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the wifiSecurityType
    *
    * @return WiFiSecurityType The wifiSecurityType
    */
    public function getWifiSecurityType()
    {
        if (array_key_exists("wifiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wifiSecurityType"], "Microsoft\Graph\Beta\Model\WiFiSecurityType")) {
                return $this->_propDict["wifiSecurityType"];
            } else {
                $this->_propDict["wifiSecurityType"] = new WiFiSecurityType($this->_propDict["wifiSecurityType"]);
                return $this->_propDict["wifiSecurityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wifiSecurityType
    *
    * @param WiFiSecurityType $val The wifiSecurityType
    *
    * @return WindowsWifiConfiguration
    */
    public function setWifiSecurityType($val)
    {
        $this->_propDict["wifiSecurityType"] = $val;
        return $this;
    }
    
    /**
    * Gets the ssid
    *
    * @return string The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ssid
    *
    * @param string $val The ssid
    *
    * @return WindowsWifiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkName
    *
    * @return string The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkName
    *
    * @param string $val The networkName
    *
    * @return WindowsWifiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectAutomatically
    *
    * @return bool The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectAutomatically
    *
    * @param bool $val The connectAutomatically
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectToPreferredNetwork
    *
    * @return bool The connectToPreferredNetwork
    */
    public function getConnectToPreferredNetwork()
    {
        if (array_key_exists("connectToPreferredNetwork", $this->_propDict)) {
            return $this->_propDict["connectToPreferredNetwork"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectToPreferredNetwork
    *
    * @param bool $val The connectToPreferredNetwork
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectToPreferredNetwork($val)
    {
        $this->_propDict["connectToPreferredNetwork"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectWhenNetworkNameIsHidden
    *
    * @return bool The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectWhenNetworkNameIsHidden
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return WindowsWifiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the proxySetting
    *
    * @return WiFiProxySetting The proxySetting
    */
    public function getProxySetting()
    {
        if (array_key_exists("proxySetting", $this->_propDict)) {
            if (is_a($this->_propDict["proxySetting"], "Microsoft\Graph\Beta\Model\WiFiProxySetting")) {
                return $this->_propDict["proxySetting"];
            } else {
                $this->_propDict["proxySetting"] = new WiFiProxySetting($this->_propDict["proxySetting"]);
                return $this->_propDict["proxySetting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxySetting
    *
    * @param WiFiProxySetting $val The proxySetting
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxySetting($val)
    {
        $this->_propDict["proxySetting"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualAddress
    *
    * @return string The proxyManualAddress
    */
    public function getProxyManualAddress()
    {
        if (array_key_exists("proxyManualAddress", $this->_propDict)) {
            return $this->_propDict["proxyManualAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualAddress
    *
    * @param string $val The proxyManualAddress
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyManualAddress($val)
    {
        $this->_propDict["proxyManualAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyManualPort
    *
    * @return int The proxyManualPort
    */
    public function getProxyManualPort()
    {
        if (array_key_exists("proxyManualPort", $this->_propDict)) {
            return $this->_propDict["proxyManualPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyManualPort
    *
    * @param int $val The proxyManualPort
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyManualPort($val)
    {
        $this->_propDict["proxyManualPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the proxyAutomaticConfigurationUrl
    *
    * @return string The proxyAutomaticConfigurationUrl
    */
    public function getProxyAutomaticConfigurationUrl()
    {
        if (array_key_exists("proxyAutomaticConfigurationUrl", $this->_propDict)) {
            return $this->_propDict["proxyAutomaticConfigurationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the proxyAutomaticConfigurationUrl
    *
    * @param string $val The proxyAutomaticConfigurationUrl
    *
    * @return WindowsWifiConfiguration
    */
    public function setProxyAutomaticConfigurationUrl($val)
    {
        $this->_propDict["proxyAutomaticConfigurationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the forceFIPSCompliance
    *
    * @return bool The forceFIPSCompliance
    */
    public function getForceFIPSCompliance()
    {
        if (array_key_exists("forceFIPSCompliance", $this->_propDict)) {
            return $this->_propDict["forceFIPSCompliance"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the forceFIPSCompliance
    *
    * @param bool $val The forceFIPSCompliance
    *
    * @return WindowsWifiConfiguration
    */
    public function setForceFIPSCompliance($val)
    {
        $this->_propDict["forceFIPSCompliance"] = boolval($val);
        return $this;
    }
    
}
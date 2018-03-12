<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsFirewallNetworkProfile File
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
* WindowsFirewallNetworkProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsFirewallNetworkProfile extends Entity
{

    /**
    * Gets the firewallEnabled
    * Turn on the firewall and advanced security enforcement Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            if (is_a($this->_propDict["firewallEnabled"], "Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["firewallEnabled"];
            } else {
                $this->_propDict["firewallEnabled"] = new StateManagementSetting($this->_propDict["firewallEnabled"]);
                return $this->_propDict["firewallEnabled"];
            }
        }
        return null;
    }

    /**
    * Sets the firewallEnabled
    * Turn on the firewall and advanced security enforcement Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The value to assign to the firewallEnabled
    *
    * @return WindowsFirewallNetworkProfile The WindowsFirewallNetworkProfile
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = $val;
         return $this;
    }
    /**
    * Gets the stealthModeBlocked
    * Prevent the server from operating in stealth mode
    *
    * @return bool The stealthModeBlocked
    */
    public function getStealthModeBlocked()
    {
        if (array_key_exists("stealthModeBlocked", $this->_propDict)) {
            return $this->_propDict["stealthModeBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stealthModeBlocked
    * Prevent the server from operating in stealth mode
    *
    * @param bool $val The value of the stealthModeBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setStealthModeBlocked($val)
    {
        $this->_propDict["stealthModeBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the incomingTrafficBlocked
    * Configures the firewall to block all incoming traffic regardless of other policy settings
    *
    * @return bool The incomingTrafficBlocked
    */
    public function getIncomingTrafficBlocked()
    {
        if (array_key_exists("incomingTrafficBlocked", $this->_propDict)) {
            return $this->_propDict["incomingTrafficBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incomingTrafficBlocked
    * Configures the firewall to block all incoming traffic regardless of other policy settings
    *
    * @param bool $val The value of the incomingTrafficBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setIncomingTrafficBlocked($val)
    {
        $this->_propDict["incomingTrafficBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the unicastResponsesToMulticastBroadcastsBlocked
    * Configures the firewall to block unicast responses to multicast broadcast traffic
    *
    * @return bool The unicastResponsesToMulticastBroadcastsBlocked
    */
    public function getUnicastResponsesToMulticastBroadcastsBlocked()
    {
        if (array_key_exists("unicastResponsesToMulticastBroadcastsBlocked", $this->_propDict)) {
            return $this->_propDict["unicastResponsesToMulticastBroadcastsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unicastResponsesToMulticastBroadcastsBlocked
    * Configures the firewall to block unicast responses to multicast broadcast traffic
    *
    * @param bool $val The value of the unicastResponsesToMulticastBroadcastsBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setUnicastResponsesToMulticastBroadcastsBlocked($val)
    {
        $this->_propDict["unicastResponsesToMulticastBroadcastsBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the inboundNotificationsBlocked
    * Prevents the firewall from displaying notifications when an application is blocked from listening on a port
    *
    * @return bool The inboundNotificationsBlocked
    */
    public function getInboundNotificationsBlocked()
    {
        if (array_key_exists("inboundNotificationsBlocked", $this->_propDict)) {
            return $this->_propDict["inboundNotificationsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundNotificationsBlocked
    * Prevents the firewall from displaying notifications when an application is blocked from listening on a port
    *
    * @param bool $val The value of the inboundNotificationsBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setInboundNotificationsBlocked($val)
    {
        $this->_propDict["inboundNotificationsBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the authorizedApplicationRulesFromGroupPolicyMerged
    * Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @return bool The authorizedApplicationRulesFromGroupPolicyMerged
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyMerged()
    {
        if (array_key_exists("authorizedApplicationRulesFromGroupPolicyMerged", $this->_propDict)) {
            return $this->_propDict["authorizedApplicationRulesFromGroupPolicyMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizedApplicationRulesFromGroupPolicyMerged
    * Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @param bool $val The value of the authorizedApplicationRulesFromGroupPolicyMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyMerged($val)
    {
        $this->_propDict["authorizedApplicationRulesFromGroupPolicyMerged"] = $val;
        return $this;
    }
    /**
    * Gets the globalPortRulesFromGroupPolicyMerged
    * Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @return bool The globalPortRulesFromGroupPolicyMerged
    */
    public function getGlobalPortRulesFromGroupPolicyMerged()
    {
        if (array_key_exists("globalPortRulesFromGroupPolicyMerged", $this->_propDict)) {
            return $this->_propDict["globalPortRulesFromGroupPolicyMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the globalPortRulesFromGroupPolicyMerged
    * Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @param bool $val The value of the globalPortRulesFromGroupPolicyMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setGlobalPortRulesFromGroupPolicyMerged($val)
    {
        $this->_propDict["globalPortRulesFromGroupPolicyMerged"] = $val;
        return $this;
    }
    /**
    * Gets the connectionSecurityRulesFromGroupPolicyMerged
    * Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @return bool The connectionSecurityRulesFromGroupPolicyMerged
    */
    public function getConnectionSecurityRulesFromGroupPolicyMerged()
    {
        if (array_key_exists("connectionSecurityRulesFromGroupPolicyMerged", $this->_propDict)) {
            return $this->_propDict["connectionSecurityRulesFromGroupPolicyMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionSecurityRulesFromGroupPolicyMerged
    * Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules
    *
    * @param bool $val The value of the connectionSecurityRulesFromGroupPolicyMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setConnectionSecurityRulesFromGroupPolicyMerged($val)
    {
        $this->_propDict["connectionSecurityRulesFromGroupPolicyMerged"] = $val;
        return $this;
    }
    /**
    * Gets the outboundConnectionsBlocked
    * Configures the firewall to block all outgoing connections by default
    *
    * @return bool The outboundConnectionsBlocked
    */
    public function getOutboundConnectionsBlocked()
    {
        if (array_key_exists("outboundConnectionsBlocked", $this->_propDict)) {
            return $this->_propDict["outboundConnectionsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundConnectionsBlocked
    * Configures the firewall to block all outgoing connections by default
    *
    * @param bool $val The value of the outboundConnectionsBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setOutboundConnectionsBlocked($val)
    {
        $this->_propDict["outboundConnectionsBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the inboundConnectionsBlocked
    * Configures the firewall to block all incoming connections by default
    *
    * @return bool The inboundConnectionsBlocked
    */
    public function getInboundConnectionsBlocked()
    {
        if (array_key_exists("inboundConnectionsBlocked", $this->_propDict)) {
            return $this->_propDict["inboundConnectionsBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundConnectionsBlocked
    * Configures the firewall to block all incoming connections by default
    *
    * @param bool $val The value of the inboundConnectionsBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setInboundConnectionsBlocked($val)
    {
        $this->_propDict["inboundConnectionsBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the securedPacketExemptionAllowed
    * Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true
    *
    * @return bool The securedPacketExemptionAllowed
    */
    public function getSecuredPacketExemptionAllowed()
    {
        if (array_key_exists("securedPacketExemptionAllowed", $this->_propDict)) {
            return $this->_propDict["securedPacketExemptionAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securedPacketExemptionAllowed
    * Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true
    *
    * @param bool $val The value of the securedPacketExemptionAllowed
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setSecuredPacketExemptionAllowed($val)
    {
        $this->_propDict["securedPacketExemptionAllowed"] = $val;
        return $this;
    }
    /**
    * Gets the policyRulesFromGroupPolicyMerged
    * Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules
    *
    * @return bool The policyRulesFromGroupPolicyMerged
    */
    public function getPolicyRulesFromGroupPolicyMerged()
    {
        if (array_key_exists("policyRulesFromGroupPolicyMerged", $this->_propDict)) {
            return $this->_propDict["policyRulesFromGroupPolicyMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyRulesFromGroupPolicyMerged
    * Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules
    *
    * @param bool $val The value of the policyRulesFromGroupPolicyMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setPolicyRulesFromGroupPolicyMerged($val)
    {
        $this->_propDict["policyRulesFromGroupPolicyMerged"] = $val;
        return $this;
    }
}

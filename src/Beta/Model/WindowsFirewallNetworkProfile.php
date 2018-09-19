<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsFirewallNetworkProfile File
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
* WindowsFirewallNetworkProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsFirewallNetworkProfile extends Entity
{

    /**
    * Gets the firewallEnabled
    *
    * @return StateManagementSetting The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            if (is_a($this->_propDict["firewallEnabled"], "Microsoft\Graph\Beta\Model\StateManagementSetting")) {
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
    * Gets the stealthModeRequired
    *
    * @return bool The stealthModeRequired
    */
    public function getStealthModeRequired()
    {
        if (array_key_exists("stealthModeRequired", $this->_propDict)) {
            return $this->_propDict["stealthModeRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stealthModeRequired
    *
    * @param bool $val The value of the stealthModeRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setStealthModeRequired($val)
    {
        $this->_propDict["stealthModeRequired"] = $val;
        return $this;
    }
    /**
    * Gets the stealthModeBlocked
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
    * Gets the incomingTrafficRequired
    *
    * @return bool The incomingTrafficRequired
    */
    public function getIncomingTrafficRequired()
    {
        if (array_key_exists("incomingTrafficRequired", $this->_propDict)) {
            return $this->_propDict["incomingTrafficRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incomingTrafficRequired
    *
    * @param bool $val The value of the incomingTrafficRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setIncomingTrafficRequired($val)
    {
        $this->_propDict["incomingTrafficRequired"] = $val;
        return $this;
    }
    /**
    * Gets the incomingTrafficBlocked
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
    * Gets the unicastResponsesToMulticastBroadcastsRequired
    *
    * @return bool The unicastResponsesToMulticastBroadcastsRequired
    */
    public function getUnicastResponsesToMulticastBroadcastsRequired()
    {
        if (array_key_exists("unicastResponsesToMulticastBroadcastsRequired", $this->_propDict)) {
            return $this->_propDict["unicastResponsesToMulticastBroadcastsRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unicastResponsesToMulticastBroadcastsRequired
    *
    * @param bool $val The value of the unicastResponsesToMulticastBroadcastsRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setUnicastResponsesToMulticastBroadcastsRequired($val)
    {
        $this->_propDict["unicastResponsesToMulticastBroadcastsRequired"] = $val;
        return $this;
    }
    /**
    * Gets the unicastResponsesToMulticastBroadcastsBlocked
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
    * Gets the inboundNotificationsRequired
    *
    * @return bool The inboundNotificationsRequired
    */
    public function getInboundNotificationsRequired()
    {
        if (array_key_exists("inboundNotificationsRequired", $this->_propDict)) {
            return $this->_propDict["inboundNotificationsRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundNotificationsRequired
    *
    * @param bool $val The value of the inboundNotificationsRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setInboundNotificationsRequired($val)
    {
        $this->_propDict["inboundNotificationsRequired"] = $val;
        return $this;
    }
    /**
    * Gets the inboundNotificationsBlocked
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
    * Gets the authorizedApplicationRulesFromGroupPolicyNotMerged
    *
    * @return bool The authorizedApplicationRulesFromGroupPolicyNotMerged
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyNotMerged()
    {
        if (array_key_exists("authorizedApplicationRulesFromGroupPolicyNotMerged", $this->_propDict)) {
            return $this->_propDict["authorizedApplicationRulesFromGroupPolicyNotMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizedApplicationRulesFromGroupPolicyNotMerged
    *
    * @param bool $val The value of the authorizedApplicationRulesFromGroupPolicyNotMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyNotMerged($val)
    {
        $this->_propDict["authorizedApplicationRulesFromGroupPolicyNotMerged"] = $val;
        return $this;
    }
    /**
    * Gets the globalPortRulesFromGroupPolicyMerged
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
    * Gets the globalPortRulesFromGroupPolicyNotMerged
    *
    * @return bool The globalPortRulesFromGroupPolicyNotMerged
    */
    public function getGlobalPortRulesFromGroupPolicyNotMerged()
    {
        if (array_key_exists("globalPortRulesFromGroupPolicyNotMerged", $this->_propDict)) {
            return $this->_propDict["globalPortRulesFromGroupPolicyNotMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the globalPortRulesFromGroupPolicyNotMerged
    *
    * @param bool $val The value of the globalPortRulesFromGroupPolicyNotMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setGlobalPortRulesFromGroupPolicyNotMerged($val)
    {
        $this->_propDict["globalPortRulesFromGroupPolicyNotMerged"] = $val;
        return $this;
    }
    /**
    * Gets the connectionSecurityRulesFromGroupPolicyMerged
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
    * Gets the connectionSecurityRulesFromGroupPolicyNotMerged
    *
    * @return bool The connectionSecurityRulesFromGroupPolicyNotMerged
    */
    public function getConnectionSecurityRulesFromGroupPolicyNotMerged()
    {
        if (array_key_exists("connectionSecurityRulesFromGroupPolicyNotMerged", $this->_propDict)) {
            return $this->_propDict["connectionSecurityRulesFromGroupPolicyNotMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionSecurityRulesFromGroupPolicyNotMerged
    *
    * @param bool $val The value of the connectionSecurityRulesFromGroupPolicyNotMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setConnectionSecurityRulesFromGroupPolicyNotMerged($val)
    {
        $this->_propDict["connectionSecurityRulesFromGroupPolicyNotMerged"] = $val;
        return $this;
    }
    /**
    * Gets the outboundConnectionsRequired
    *
    * @return bool The outboundConnectionsRequired
    */
    public function getOutboundConnectionsRequired()
    {
        if (array_key_exists("outboundConnectionsRequired", $this->_propDict)) {
            return $this->_propDict["outboundConnectionsRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outboundConnectionsRequired
    *
    * @param bool $val The value of the outboundConnectionsRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setOutboundConnectionsRequired($val)
    {
        $this->_propDict["outboundConnectionsRequired"] = $val;
        return $this;
    }
    /**
    * Gets the outboundConnectionsBlocked
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
    * Gets the inboundConnectionsRequired
    *
    * @return bool The inboundConnectionsRequired
    */
    public function getInboundConnectionsRequired()
    {
        if (array_key_exists("inboundConnectionsRequired", $this->_propDict)) {
            return $this->_propDict["inboundConnectionsRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inboundConnectionsRequired
    *
    * @param bool $val The value of the inboundConnectionsRequired
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setInboundConnectionsRequired($val)
    {
        $this->_propDict["inboundConnectionsRequired"] = $val;
        return $this;
    }
    /**
    * Gets the inboundConnectionsBlocked
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
    * Gets the securedPacketExemptionBlocked
    *
    * @return bool The securedPacketExemptionBlocked
    */
    public function getSecuredPacketExemptionBlocked()
    {
        if (array_key_exists("securedPacketExemptionBlocked", $this->_propDict)) {
            return $this->_propDict["securedPacketExemptionBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securedPacketExemptionBlocked
    *
    * @param bool $val The value of the securedPacketExemptionBlocked
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setSecuredPacketExemptionBlocked($val)
    {
        $this->_propDict["securedPacketExemptionBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the policyRulesFromGroupPolicyMerged
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
    /**
    * Gets the policyRulesFromGroupPolicyNotMerged
    *
    * @return bool The policyRulesFromGroupPolicyNotMerged
    */
    public function getPolicyRulesFromGroupPolicyNotMerged()
    {
        if (array_key_exists("policyRulesFromGroupPolicyNotMerged", $this->_propDict)) {
            return $this->_propDict["policyRulesFromGroupPolicyNotMerged"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyRulesFromGroupPolicyNotMerged
    *
    * @param bool $val The value of the policyRulesFromGroupPolicyNotMerged
    *
    * @return WindowsFirewallNetworkProfile
    */
    public function setPolicyRulesFromGroupPolicyNotMerged($val)
    {
        $this->_propDict["policyRulesFromGroupPolicyNotMerged"] = $val;
        return $this;
    }
}

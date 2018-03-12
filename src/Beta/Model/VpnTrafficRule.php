<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnTrafficRule File
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
* VpnTrafficRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnTrafficRule extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return VpnTrafficRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the protocols
    *
    * @return int The protocols
    */
    public function getProtocols()
    {
        if (array_key_exists("protocols", $this->_propDict)) {
            return $this->_propDict["protocols"];
        } else {
            return null;
        }
    }

    /**
    * Sets the protocols
    *
    * @param int $val The value of the protocols
    *
    * @return VpnTrafficRule
    */
    public function setProtocols($val)
    {
        $this->_propDict["protocols"] = $val;
        return $this;
    }

    /**
    * Gets the localPortRanges
    *
    * @return NumberRange The localPortRanges
    */
    public function getLocalPortRanges()
    {
        if (array_key_exists("localPortRanges", $this->_propDict)) {
            if (is_a($this->_propDict["localPortRanges"], "Microsoft\Graph\Beta\Model\NumberRange")) {
                return $this->_propDict["localPortRanges"];
            } else {
                $this->_propDict["localPortRanges"] = new NumberRange($this->_propDict["localPortRanges"]);
                return $this->_propDict["localPortRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the localPortRanges
    *
    * @param NumberRange $val The value to assign to the localPortRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setLocalPortRanges($val)
    {
        $this->_propDict["localPortRanges"] = $val;
         return $this;
    }

    /**
    * Gets the remotePortRanges
    *
    * @return NumberRange The remotePortRanges
    */
    public function getRemotePortRanges()
    {
        if (array_key_exists("remotePortRanges", $this->_propDict)) {
            if (is_a($this->_propDict["remotePortRanges"], "Microsoft\Graph\Beta\Model\NumberRange")) {
                return $this->_propDict["remotePortRanges"];
            } else {
                $this->_propDict["remotePortRanges"] = new NumberRange($this->_propDict["remotePortRanges"]);
                return $this->_propDict["remotePortRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the remotePortRanges
    *
    * @param NumberRange $val The value to assign to the remotePortRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRemotePortRanges($val)
    {
        $this->_propDict["remotePortRanges"] = $val;
         return $this;
    }

    /**
    * Gets the localAddressRanges
    *
    * @return IPv4Range The localAddressRanges
    */
    public function getLocalAddressRanges()
    {
        if (array_key_exists("localAddressRanges", $this->_propDict)) {
            if (is_a($this->_propDict["localAddressRanges"], "Microsoft\Graph\Beta\Model\IPv4Range")) {
                return $this->_propDict["localAddressRanges"];
            } else {
                $this->_propDict["localAddressRanges"] = new IPv4Range($this->_propDict["localAddressRanges"]);
                return $this->_propDict["localAddressRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the localAddressRanges
    *
    * @param IPv4Range $val The value to assign to the localAddressRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setLocalAddressRanges($val)
    {
        $this->_propDict["localAddressRanges"] = $val;
         return $this;
    }

    /**
    * Gets the remoteAddressRanges
    *
    * @return IPv4Range The remoteAddressRanges
    */
    public function getRemoteAddressRanges()
    {
        if (array_key_exists("remoteAddressRanges", $this->_propDict)) {
            if (is_a($this->_propDict["remoteAddressRanges"], "Microsoft\Graph\Beta\Model\IPv4Range")) {
                return $this->_propDict["remoteAddressRanges"];
            } else {
                $this->_propDict["remoteAddressRanges"] = new IPv4Range($this->_propDict["remoteAddressRanges"]);
                return $this->_propDict["remoteAddressRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the remoteAddressRanges
    *
    * @param IPv4Range $val The value to assign to the remoteAddressRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRemoteAddressRanges($val)
    {
        $this->_propDict["remoteAddressRanges"] = $val;
         return $this;
    }
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The value of the appId
    *
    * @return VpnTrafficRule
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the appType
    *
    * @return VpnTrafficRuleAppType The appType
    */
    public function getAppType()
    {
        if (array_key_exists("appType", $this->_propDict)) {
            if (is_a($this->_propDict["appType"], "Microsoft\Graph\Beta\Model\VpnTrafficRuleAppType")) {
                return $this->_propDict["appType"];
            } else {
                $this->_propDict["appType"] = new VpnTrafficRuleAppType($this->_propDict["appType"]);
                return $this->_propDict["appType"];
            }
        }
        return null;
    }

    /**
    * Sets the appType
    *
    * @param VpnTrafficRuleAppType $val The value to assign to the appType
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setAppType($val)
    {
        $this->_propDict["appType"] = $val;
         return $this;
    }

    /**
    * Gets the routingPolicyType
    *
    * @return VpnTrafficRuleRoutingPolicyType The routingPolicyType
    */
    public function getRoutingPolicyType()
    {
        if (array_key_exists("routingPolicyType", $this->_propDict)) {
            if (is_a($this->_propDict["routingPolicyType"], "Microsoft\Graph\Beta\Model\VpnTrafficRuleRoutingPolicyType")) {
                return $this->_propDict["routingPolicyType"];
            } else {
                $this->_propDict["routingPolicyType"] = new VpnTrafficRuleRoutingPolicyType($this->_propDict["routingPolicyType"]);
                return $this->_propDict["routingPolicyType"];
            }
        }
        return null;
    }

    /**
    * Sets the routingPolicyType
    *
    * @param VpnTrafficRuleRoutingPolicyType $val The value to assign to the routingPolicyType
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRoutingPolicyType($val)
    {
        $this->_propDict["routingPolicyType"] = $val;
         return $this;
    }
    /**
    * Gets the claims
    *
    * @return string The claims
    */
    public function getClaims()
    {
        if (array_key_exists("claims", $this->_propDict)) {
            return $this->_propDict["claims"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claims
    *
    * @param string $val The value of the claims
    *
    * @return VpnTrafficRule
    */
    public function setClaims($val)
    {
        $this->_propDict["claims"] = $val;
        return $this;
    }
}

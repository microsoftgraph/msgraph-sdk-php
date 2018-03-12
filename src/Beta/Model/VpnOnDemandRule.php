<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnOnDemandRule File
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
* VpnOnDemandRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnOnDemandRule extends Entity
{
    /**
    * Gets the ssids
    *
    * @return string The ssids
    */
    public function getSsids()
    {
        if (array_key_exists("ssids", $this->_propDict)) {
            return $this->_propDict["ssids"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssids
    *
    * @param string $val The value of the ssids
    *
    * @return VpnOnDemandRule
    */
    public function setSsids($val)
    {
        $this->_propDict["ssids"] = $val;
        return $this;
    }
    /**
    * Gets the dnsSearchDomains
    *
    * @return string The dnsSearchDomains
    */
    public function getDnsSearchDomains()
    {
        if (array_key_exists("dnsSearchDomains", $this->_propDict)) {
            return $this->_propDict["dnsSearchDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsSearchDomains
    *
    * @param string $val The value of the dnsSearchDomains
    *
    * @return VpnOnDemandRule
    */
    public function setDnsSearchDomains($val)
    {
        $this->_propDict["dnsSearchDomains"] = $val;
        return $this;
    }
    /**
    * Gets the probeUrl
    *
    * @return string The probeUrl
    */
    public function getProbeUrl()
    {
        if (array_key_exists("probeUrl", $this->_propDict)) {
            return $this->_propDict["probeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeUrl
    *
    * @param string $val The value of the probeUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeUrl($val)
    {
        $this->_propDict["probeUrl"] = $val;
        return $this;
    }

    /**
    * Gets the action
    *
    * @return VpnOnDemandRuleConnectionAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "Microsoft\Graph\Model\VpnOnDemandRuleConnectionAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new VpnOnDemandRuleConnectionAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    *
    * @param VpnOnDemandRuleConnectionAction $val The value to assign to the action
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the domainAction
    *
    * @return VpnOnDemandRuleConnectionDomainAction The domainAction
    */
    public function getDomainAction()
    {
        if (array_key_exists("domainAction", $this->_propDict)) {
            if (is_a($this->_propDict["domainAction"], "Microsoft\Graph\Model\VpnOnDemandRuleConnectionDomainAction")) {
                return $this->_propDict["domainAction"];
            } else {
                $this->_propDict["domainAction"] = new VpnOnDemandRuleConnectionDomainAction($this->_propDict["domainAction"]);
                return $this->_propDict["domainAction"];
            }
        }
        return null;
    }

    /**
    * Sets the domainAction
    *
    * @param VpnOnDemandRuleConnectionDomainAction $val The value to assign to the domainAction
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setDomainAction($val)
    {
        $this->_propDict["domainAction"] = $val;
         return $this;
    }
    /**
    * Gets the domains
    *
    * @return string The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    *
    * @param string $val The value of the domains
    *
    * @return VpnOnDemandRule
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }
    /**
    * Gets the probeRequiredUrl
    *
    * @return string The probeRequiredUrl
    */
    public function getProbeRequiredUrl()
    {
        if (array_key_exists("probeRequiredUrl", $this->_propDict)) {
            return $this->_propDict["probeRequiredUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeRequiredUrl
    *
    * @param string $val The value of the probeRequiredUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeRequiredUrl($val)
    {
        $this->_propDict["probeRequiredUrl"] = $val;
        return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsNetworkIsolationPolicy File
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
* WindowsNetworkIsolationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsNetworkIsolationPolicy extends Entity
{
    /**
    * Gets the enterpriseNetworkDomainNames
    *
    * @return string The enterpriseNetworkDomainNames
    */
    public function getEnterpriseNetworkDomainNames()
    {
        if (array_key_exists("enterpriseNetworkDomainNames", $this->_propDict)) {
            return $this->_propDict["enterpriseNetworkDomainNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseNetworkDomainNames
    *
    * @param string $val The value of the enterpriseNetworkDomainNames
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseNetworkDomainNames($val)
    {
        $this->_propDict["enterpriseNetworkDomainNames"] = $val;
        return $this;
    }

    /**
    * Gets the enterpriseCloudResources
    *
    * @return ProxiedDomain The enterpriseCloudResources
    */
    public function getEnterpriseCloudResources()
    {
        if (array_key_exists("enterpriseCloudResources", $this->_propDict)) {
            if (is_a($this->_propDict["enterpriseCloudResources"], "Microsoft\Graph\Beta\Model\ProxiedDomain")) {
                return $this->_propDict["enterpriseCloudResources"];
            } else {
                $this->_propDict["enterpriseCloudResources"] = new ProxiedDomain($this->_propDict["enterpriseCloudResources"]);
                return $this->_propDict["enterpriseCloudResources"];
            }
        }
        return null;
    }

    /**
    * Sets the enterpriseCloudResources
    *
    * @param ProxiedDomain $val The value to assign to the enterpriseCloudResources
    *
    * @return WindowsNetworkIsolationPolicy The WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseCloudResources($val)
    {
        $this->_propDict["enterpriseCloudResources"] = $val;
         return $this;
    }

    /**
    * Gets the enterpriseIPRanges
    *
    * @return IpRange The enterpriseIPRanges
    */
    public function getEnterpriseIPRanges()
    {
        if (array_key_exists("enterpriseIPRanges", $this->_propDict)) {
            if (is_a($this->_propDict["enterpriseIPRanges"], "Microsoft\Graph\Beta\Model\IpRange")) {
                return $this->_propDict["enterpriseIPRanges"];
            } else {
                $this->_propDict["enterpriseIPRanges"] = new IpRange($this->_propDict["enterpriseIPRanges"]);
                return $this->_propDict["enterpriseIPRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the enterpriseIPRanges
    *
    * @param IpRange $val The value to assign to the enterpriseIPRanges
    *
    * @return WindowsNetworkIsolationPolicy The WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseIPRanges($val)
    {
        $this->_propDict["enterpriseIPRanges"] = $val;
         return $this;
    }
    /**
    * Gets the enterpriseInternalProxyServers
    *
    * @return string The enterpriseInternalProxyServers
    */
    public function getEnterpriseInternalProxyServers()
    {
        if (array_key_exists("enterpriseInternalProxyServers", $this->_propDict)) {
            return $this->_propDict["enterpriseInternalProxyServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseInternalProxyServers
    *
    * @param string $val The value of the enterpriseInternalProxyServers
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseInternalProxyServers($val)
    {
        $this->_propDict["enterpriseInternalProxyServers"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseIPRangesAreAuthoritative
    *
    * @return bool The enterpriseIPRangesAreAuthoritative
    */
    public function getEnterpriseIPRangesAreAuthoritative()
    {
        if (array_key_exists("enterpriseIPRangesAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseIPRangesAreAuthoritative"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseIPRangesAreAuthoritative
    *
    * @param bool $val The value of the enterpriseIPRangesAreAuthoritative
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseIPRangesAreAuthoritative($val)
    {
        $this->_propDict["enterpriseIPRangesAreAuthoritative"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseProxyServers
    *
    * @return string The enterpriseProxyServers
    */
    public function getEnterpriseProxyServers()
    {
        if (array_key_exists("enterpriseProxyServers", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseProxyServers
    *
    * @param string $val The value of the enterpriseProxyServers
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseProxyServers($val)
    {
        $this->_propDict["enterpriseProxyServers"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseProxyServersAreAuthoritative
    *
    * @return bool The enterpriseProxyServersAreAuthoritative
    */
    public function getEnterpriseProxyServersAreAuthoritative()
    {
        if (array_key_exists("enterpriseProxyServersAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServersAreAuthoritative"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseProxyServersAreAuthoritative
    *
    * @param bool $val The value of the enterpriseProxyServersAreAuthoritative
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseProxyServersAreAuthoritative($val)
    {
        $this->_propDict["enterpriseProxyServersAreAuthoritative"] = $val;
        return $this;
    }
    /**
    * Gets the neutralDomainResources
    *
    * @return string The neutralDomainResources
    */
    public function getNeutralDomainResources()
    {
        if (array_key_exists("neutralDomainResources", $this->_propDict)) {
            return $this->_propDict["neutralDomainResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the neutralDomainResources
    *
    * @param string $val The value of the neutralDomainResources
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setNeutralDomainResources($val)
    {
        $this->_propDict["neutralDomainResources"] = $val;
        return $this;
    }
}

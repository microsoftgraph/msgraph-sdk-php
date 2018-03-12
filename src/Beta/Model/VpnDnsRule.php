<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnDnsRule File
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
* VpnDnsRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VpnDnsRule extends Entity
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
    * @return VpnDnsRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the servers
    *
    * @return string The servers
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
    *
    * @param string $val The value of the servers
    *
    * @return VpnDnsRule
    */
    public function setServers($val)
    {
        $this->_propDict["servers"] = $val;
        return $this;
    }
    /**
    * Gets the proxyServerUri
    *
    * @return string The proxyServerUri
    */
    public function getProxyServerUri()
    {
        if (array_key_exists("proxyServerUri", $this->_propDict)) {
            return $this->_propDict["proxyServerUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyServerUri
    *
    * @param string $val The value of the proxyServerUri
    *
    * @return VpnDnsRule
    */
    public function setProxyServerUri($val)
    {
        $this->_propDict["proxyServerUri"] = $val;
        return $this;
    }
}

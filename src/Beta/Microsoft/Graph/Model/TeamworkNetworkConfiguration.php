<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamworkNetworkConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* TeamworkNetworkConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamworkNetworkConfiguration extends Entity
{
    /**
    * Gets the defaultGateway
    *
    * @return string|null The defaultGateway
    */
    public function getDefaultGateway()
    {
        if (array_key_exists("defaultGateway", $this->_propDict)) {
            return $this->_propDict["defaultGateway"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultGateway
    *
    * @param string $val The value of the defaultGateway
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setDefaultGateway($val)
    {
        $this->_propDict["defaultGateway"] = $val;
        return $this;
    }
    /**
    * Gets the domainName
    *
    * @return string|null The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    *
    * @param string $val The value of the domainName
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    /**
    * Gets the hostName
    *
    * @return string|null The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostName
    *
    * @param string $val The value of the hostName
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    *
    * @return string|null The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    *
    * @param string $val The value of the ipAddress
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the isDhcpEnabled
    *
    * @return bool|null The isDhcpEnabled
    */
    public function getIsDhcpEnabled()
    {
        if (array_key_exists("isDhcpEnabled", $this->_propDict)) {
            return $this->_propDict["isDhcpEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDhcpEnabled
    *
    * @param bool $val The value of the isDhcpEnabled
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setIsDhcpEnabled($val)
    {
        $this->_propDict["isDhcpEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isPCPortEnabled
    *
    * @return bool|null The isPCPortEnabled
    */
    public function getIsPCPortEnabled()
    {
        if (array_key_exists("isPCPortEnabled", $this->_propDict)) {
            return $this->_propDict["isPCPortEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPCPortEnabled
    *
    * @param bool $val The value of the isPCPortEnabled
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setIsPCPortEnabled($val)
    {
        $this->_propDict["isPCPortEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the primaryDns
    *
    * @return string|null The primaryDns
    */
    public function getPrimaryDns()
    {
        if (array_key_exists("primaryDns", $this->_propDict)) {
            return $this->_propDict["primaryDns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryDns
    *
    * @param string $val The value of the primaryDns
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setPrimaryDns($val)
    {
        $this->_propDict["primaryDns"] = $val;
        return $this;
    }
    /**
    * Gets the secondaryDns
    *
    * @return string|null The secondaryDns
    */
    public function getSecondaryDns()
    {
        if (array_key_exists("secondaryDns", $this->_propDict)) {
            return $this->_propDict["secondaryDns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secondaryDns
    *
    * @param string $val The value of the secondaryDns
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setSecondaryDns($val)
    {
        $this->_propDict["secondaryDns"] = $val;
        return $this;
    }
    /**
    * Gets the subnetMask
    *
    * @return string|null The subnetMask
    */
    public function getSubnetMask()
    {
        if (array_key_exists("subnetMask", $this->_propDict)) {
            return $this->_propDict["subnetMask"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subnetMask
    *
    * @param string $val The value of the subnetMask
    *
    * @return TeamworkNetworkConfiguration
    */
    public function setSubnetMask($val)
    {
        $this->_propDict["subnetMask"] = $val;
        return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSecurityState File
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
* HostSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class HostSecurityState extends Entity
{
    /**
    * Gets the fqdn
    *
    * @return string The fqdn
    */
    public function getFqdn()
    {
        if (array_key_exists("fqdn", $this->_propDict)) {
            return $this->_propDict["fqdn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fqdn
    *
    * @param string $val The value of the fqdn
    *
    * @return HostSecurityState
    */
    public function setFqdn($val)
    {
        $this->_propDict["fqdn"] = $val;
        return $this;
    }
    /**
    * Gets the isAzureAadJoined
    *
    * @return bool The isAzureAadJoined
    */
    public function getIsAzureAadJoined()
    {
        if (array_key_exists("isAzureAadJoined", $this->_propDict)) {
            return $this->_propDict["isAzureAadJoined"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAzureAadJoined
    *
    * @param bool $val The value of the isAzureAadJoined
    *
    * @return HostSecurityState
    */
    public function setIsAzureAadJoined($val)
    {
        $this->_propDict["isAzureAadJoined"] = $val;
        return $this;
    }
    /**
    * Gets the isAzureAadRegistered
    *
    * @return bool The isAzureAadRegistered
    */
    public function getIsAzureAadRegistered()
    {
        if (array_key_exists("isAzureAadRegistered", $this->_propDict)) {
            return $this->_propDict["isAzureAadRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAzureAadRegistered
    *
    * @param bool $val The value of the isAzureAadRegistered
    *
    * @return HostSecurityState
    */
    public function setIsAzureAadRegistered($val)
    {
        $this->_propDict["isAzureAadRegistered"] = $val;
        return $this;
    }
    /**
    * Gets the isHybridAzureDomainJoined
    *
    * @return bool The isHybridAzureDomainJoined
    */
    public function getIsHybridAzureDomainJoined()
    {
        if (array_key_exists("isHybridAzureDomainJoined", $this->_propDict)) {
            return $this->_propDict["isHybridAzureDomainJoined"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHybridAzureDomainJoined
    *
    * @param bool $val The value of the isHybridAzureDomainJoined
    *
    * @return HostSecurityState
    */
    public function setIsHybridAzureDomainJoined($val)
    {
        $this->_propDict["isHybridAzureDomainJoined"] = $val;
        return $this;
    }
    /**
    * Gets the netBiosName
    *
    * @return string The netBiosName
    */
    public function getNetBiosName()
    {
        if (array_key_exists("netBiosName", $this->_propDict)) {
            return $this->_propDict["netBiosName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the netBiosName
    *
    * @param string $val The value of the netBiosName
    *
    * @return HostSecurityState
    */
    public function setNetBiosName($val)
    {
        $this->_propDict["netBiosName"] = $val;
        return $this;
    }
    /**
    * Gets the privateIpAddress
    *
    * @return string The privateIpAddress
    */
    public function getPrivateIpAddress()
    {
        if (array_key_exists("privateIpAddress", $this->_propDict)) {
            return $this->_propDict["privateIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privateIpAddress
    *
    * @param string $val The value of the privateIpAddress
    *
    * @return HostSecurityState
    */
    public function setPrivateIpAddress($val)
    {
        $this->_propDict["privateIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the publicIpAddress
    *
    * @return string The publicIpAddress
    */
    public function getPublicIpAddress()
    {
        if (array_key_exists("publicIpAddress", $this->_propDict)) {
            return $this->_propDict["publicIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publicIpAddress
    *
    * @param string $val The value of the publicIpAddress
    *
    * @return HostSecurityState
    */
    public function setPublicIpAddress($val)
    {
        $this->_propDict["publicIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    *
    * @param string $val The value of the riskScore
    *
    * @return HostSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
}

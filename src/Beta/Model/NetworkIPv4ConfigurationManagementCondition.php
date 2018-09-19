<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkIPv4ConfigurationManagementCondition File
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
* NetworkIPv4ConfigurationManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkIPv4ConfigurationManagementCondition extends NetworkManagementCondition
{
    /**
    * Gets the ipV4Prefix
    *
    * @return string The ipV4Prefix
    */
    public function getIpV4Prefix()
    {
        if (array_key_exists("ipV4Prefix", $this->_propDict)) {
            return $this->_propDict["ipV4Prefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4Prefix
    *
    * @param string $val The ipV4Prefix
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4Prefix($val)
    {
        $this->_propDict["ipV4Prefix"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4Gateway
    *
    * @return string The ipV4Gateway
    */
    public function getIpV4Gateway()
    {
        if (array_key_exists("ipV4Gateway", $this->_propDict)) {
            return $this->_propDict["ipV4Gateway"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4Gateway
    *
    * @param string $val The ipV4Gateway
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4Gateway($val)
    {
        $this->_propDict["ipV4Gateway"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4DHCPServer
    *
    * @return string The ipV4DHCPServer
    */
    public function getIpV4DHCPServer()
    {
        if (array_key_exists("ipV4DHCPServer", $this->_propDict)) {
            return $this->_propDict["ipV4DHCPServer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4DHCPServer
    *
    * @param string $val The ipV4DHCPServer
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4DHCPServer($val)
    {
        $this->_propDict["ipV4DHCPServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4DNSServerList
    *
    * @return string The ipV4DNSServerList
    */
    public function getIpV4DNSServerList()
    {
        if (array_key_exists("ipV4DNSServerList", $this->_propDict)) {
            return $this->_propDict["ipV4DNSServerList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4DNSServerList
    *
    * @param string $val The ipV4DNSServerList
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4DNSServerList($val)
    {
        $this->_propDict["ipV4DNSServerList"] = $val;
        return $this;
    }
    
    /**
    * Gets the dnsSuffixList
    *
    * @return string The dnsSuffixList
    */
    public function getDnsSuffixList()
    {
        if (array_key_exists("dnsSuffixList", $this->_propDict)) {
            return $this->_propDict["dnsSuffixList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsSuffixList
    *
    * @param string $val The dnsSuffixList
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setDnsSuffixList($val)
    {
        $this->_propDict["dnsSuffixList"] = $val;
        return $this;
    }
    
}
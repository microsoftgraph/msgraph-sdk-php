<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkIPv6ConfigurationManagementCondition File
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
* NetworkIPv6ConfigurationManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class NetworkIPv6ConfigurationManagementCondition extends NetworkManagementCondition
{
    /**
    * Gets the ipV6Prefix
    *
    * @return string The ipV6Prefix
    */
    public function getIpV6Prefix()
    {
        if (array_key_exists("ipV6Prefix", $this->_propDict)) {
            return $this->_propDict["ipV6Prefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6Prefix
    *
    * @param string $val The ipV6Prefix
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6Prefix($val)
    {
        $this->_propDict["ipV6Prefix"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV6Gateway
    *
    * @return string The ipV6Gateway
    */
    public function getIpV6Gateway()
    {
        if (array_key_exists("ipV6Gateway", $this->_propDict)) {
            return $this->_propDict["ipV6Gateway"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6Gateway
    *
    * @param string $val The ipV6Gateway
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6Gateway($val)
    {
        $this->_propDict["ipV6Gateway"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV6DNSServerList
    *
    * @return string The ipV6DNSServerList
    */
    public function getIpV6DNSServerList()
    {
        if (array_key_exists("ipV6DNSServerList", $this->_propDict)) {
            return $this->_propDict["ipV6DNSServerList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6DNSServerList
    *
    * @param string $val The ipV6DNSServerList
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6DNSServerList($val)
    {
        $this->_propDict["ipV6DNSServerList"] = $val;
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
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setDnsSuffixList($val)
    {
        $this->_propDict["dnsSuffixList"] = $val;
        return $this;
    }
    
}
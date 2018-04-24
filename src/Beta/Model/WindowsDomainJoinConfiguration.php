<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDomainJoinConfiguration File
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
* WindowsDomainJoinConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsDomainJoinConfiguration extends DeviceConfiguration
{
    /**
    * Gets the computerNameStaticPrefix
    *
    * @return string The computerNameStaticPrefix
    */
    public function getComputerNameStaticPrefix()
    {
        if (array_key_exists("computerNameStaticPrefix", $this->_propDict)) {
            return $this->_propDict["computerNameStaticPrefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the computerNameStaticPrefix
    *
    * @param string $val The computerNameStaticPrefix
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setComputerNameStaticPrefix($val)
    {
        $this->_propDict["computerNameStaticPrefix"] = $val;
        return $this;
    }
    
    /**
    * Gets the computerNameSuffixRandomCharCount
    *
    * @return int The computerNameSuffixRandomCharCount
    */
    public function getComputerNameSuffixRandomCharCount()
    {
        if (array_key_exists("computerNameSuffixRandomCharCount", $this->_propDict)) {
            return $this->_propDict["computerNameSuffixRandomCharCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the computerNameSuffixRandomCharCount
    *
    * @param int $val The computerNameSuffixRandomCharCount
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setComputerNameSuffixRandomCharCount($val)
    {
        $this->_propDict["computerNameSuffixRandomCharCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the activeDirectoryDomainName
    *
    * @return string The activeDirectoryDomainName
    */
    public function getActiveDirectoryDomainName()
    {
        if (array_key_exists("activeDirectoryDomainName", $this->_propDict)) {
            return $this->_propDict["activeDirectoryDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDirectoryDomainName
    *
    * @param string $val The activeDirectoryDomainName
    *
    * @return WindowsDomainJoinConfiguration
    */
    public function setActiveDirectoryDomainName($val)
    {
        $this->_propDict["activeDirectoryDomainName"] = $val;
        return $this;
    }
    
}
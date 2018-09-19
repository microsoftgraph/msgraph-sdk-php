<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostObservable File
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
* HostObservable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class HostObservable extends Entity
{
    /**
    * Gets the hostGuid
    *
    * @return string The hostGuid
    */
    public function getHostGuid()
    {
        if (array_key_exists("hostGuid", $this->_propDict)) {
            return $this->_propDict["hostGuid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostGuid
    *
    * @param string $val The value of the hostGuid
    *
    * @return HostObservable
    */
    public function setHostGuid($val)
    {
        $this->_propDict["hostGuid"] = $val;
        return $this;
    }
    /**
    * Gets the hostName
    *
    * @return string The hostName
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
    * @return HostObservable
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    /**
    * Gets the registryKey
    *
    * @return string The registryKey
    */
    public function getRegistryKey()
    {
        if (array_key_exists("registryKey", $this->_propDict)) {
            return $this->_propDict["registryKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryKey
    *
    * @param string $val The value of the registryKey
    *
    * @return HostObservable
    */
    public function setRegistryKey($val)
    {
        $this->_propDict["registryKey"] = $val;
        return $this;
    }
    /**
    * Gets the registryValue
    *
    * @return string The registryValue
    */
    public function getRegistryValue()
    {
        if (array_key_exists("registryValue", $this->_propDict)) {
            return $this->_propDict["registryValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryValue
    *
    * @param string $val The value of the registryValue
    *
    * @return HostObservable
    */
    public function setRegistryValue($val)
    {
        $this->_propDict["registryValue"] = $val;
        return $this;
    }
    /**
    * Gets the systemCommandLine
    *
    * @return string The systemCommandLine
    */
    public function getSystemCommandLine()
    {
        if (array_key_exists("systemCommandLine", $this->_propDict)) {
            return $this->_propDict["systemCommandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemCommandLine
    *
    * @param string $val The value of the systemCommandLine
    *
    * @return HostObservable
    */
    public function setSystemCommandLine($val)
    {
        $this->_propDict["systemCommandLine"] = $val;
        return $this;
    }
    /**
    * Gets the systemServiceName
    *
    * @return string The systemServiceName
    */
    public function getSystemServiceName()
    {
        if (array_key_exists("systemServiceName", $this->_propDict)) {
            return $this->_propDict["systemServiceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the systemServiceName
    *
    * @param string $val The value of the systemServiceName
    *
    * @return HostObservable
    */
    public function setSystemServiceName($val)
    {
        $this->_propDict["systemServiceName"] = $val;
        return $this;
    }
}

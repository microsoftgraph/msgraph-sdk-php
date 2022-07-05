<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryValueEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* RegistryValueEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistryValueEvidence extends AlertEvidence
{
    /**
    * Gets the registryHive
    *
    * @return string|null The registryHive
    */
    public function getRegistryHive()
    {
        if (array_key_exists("registryHive", $this->_propDict)) {
            return $this->_propDict["registryHive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryHive
    *
    * @param string $val The value of the registryHive
    *
    * @return RegistryValueEvidence
    */
    public function setRegistryHive($val)
    {
        $this->_propDict["registryHive"] = $val;
        return $this;
    }
    /**
    * Gets the registryKey
    *
    * @return string|null The registryKey
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
    * @return RegistryValueEvidence
    */
    public function setRegistryKey($val)
    {
        $this->_propDict["registryKey"] = $val;
        return $this;
    }
    /**
    * Gets the registryValue
    *
    * @return string|null The registryValue
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
    * @return RegistryValueEvidence
    */
    public function setRegistryValue($val)
    {
        $this->_propDict["registryValue"] = $val;
        return $this;
    }
    /**
    * Gets the registryValueName
    *
    * @return string|null The registryValueName
    */
    public function getRegistryValueName()
    {
        if (array_key_exists("registryValueName", $this->_propDict)) {
            return $this->_propDict["registryValueName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryValueName
    *
    * @param string $val The value of the registryValueName
    *
    * @return RegistryValueEvidence
    */
    public function setRegistryValueName($val)
    {
        $this->_propDict["registryValueName"] = $val;
        return $this;
    }
    /**
    * Gets the registryValueType
    *
    * @return string|null The registryValueType
    */
    public function getRegistryValueType()
    {
        if (array_key_exists("registryValueType", $this->_propDict)) {
            return $this->_propDict["registryValueType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the registryValueType
    *
    * @param string $val The value of the registryValueType
    *
    * @return RegistryValueEvidence
    */
    public function setRegistryValueType($val)
    {
        $this->_propDict["registryValueType"] = $val;
        return $this;
    }
}

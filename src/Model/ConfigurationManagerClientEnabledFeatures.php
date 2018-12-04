<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientEnabledFeatures File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ConfigurationManagerClientEnabledFeatures class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConfigurationManagerClientEnabledFeatures extends Entity
{
    /**
    * Gets the inventory
    *
    * @return bool The inventory
    */
    public function getInventory()
    {
        if (array_key_exists("inventory", $this->_propDict)) {
            return $this->_propDict["inventory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inventory
    *
    * @param bool $val The value of the inventory
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setInventory($val)
    {
        $this->_propDict["inventory"] = $val;
        return $this;
    }
    /**
    * Gets the modernApps
    *
    * @return bool The modernApps
    */
    public function getModernApps()
    {
        if (array_key_exists("modernApps", $this->_propDict)) {
            return $this->_propDict["modernApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the modernApps
    *
    * @param bool $val The value of the modernApps
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setModernApps($val)
    {
        $this->_propDict["modernApps"] = $val;
        return $this;
    }
    /**
    * Gets the resourceAccess
    *
    * @return bool The resourceAccess
    */
    public function getResourceAccess()
    {
        if (array_key_exists("resourceAccess", $this->_propDict)) {
            return $this->_propDict["resourceAccess"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceAccess
    *
    * @param bool $val The value of the resourceAccess
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setResourceAccess($val)
    {
        $this->_propDict["resourceAccess"] = $val;
        return $this;
    }
    /**
    * Gets the deviceConfiguration
    *
    * @return bool The deviceConfiguration
    */
    public function getDeviceConfiguration()
    {
        if (array_key_exists("deviceConfiguration", $this->_propDict)) {
            return $this->_propDict["deviceConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceConfiguration
    *
    * @param bool $val The value of the deviceConfiguration
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setDeviceConfiguration($val)
    {
        $this->_propDict["deviceConfiguration"] = $val;
        return $this;
    }
    /**
    * Gets the compliancePolicy
    *
    * @return bool The compliancePolicy
    */
    public function getCompliancePolicy()
    {
        if (array_key_exists("compliancePolicy", $this->_propDict)) {
            return $this->_propDict["compliancePolicy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliancePolicy
    *
    * @param bool $val The value of the compliancePolicy
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setCompliancePolicy($val)
    {
        $this->_propDict["compliancePolicy"] = $val;
        return $this;
    }
    /**
    * Gets the windowsUpdateForBusiness
    *
    * @return bool The windowsUpdateForBusiness
    */
    public function getWindowsUpdateForBusiness()
    {
        if (array_key_exists("windowsUpdateForBusiness", $this->_propDict)) {
            return $this->_propDict["windowsUpdateForBusiness"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsUpdateForBusiness
    *
    * @param bool $val The value of the windowsUpdateForBusiness
    *
    * @return ConfigurationManagerClientEnabledFeatures
    */
    public function setWindowsUpdateForBusiness($val)
    {
        $this->_propDict["windowsUpdateForBusiness"] = $val;
        return $this;
    }
}

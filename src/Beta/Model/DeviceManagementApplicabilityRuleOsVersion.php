<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementApplicabilityRuleOsVersion File
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
* DeviceManagementApplicabilityRuleOsVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementApplicabilityRuleOsVersion extends Entity
{
    /**
    * Gets the minOSVerison
    * Min OS version for Applicability Rule.
    *
    * @return string The minOSVerison
    */
    public function getMinOSVerison()
    {
        if (array_key_exists("minOSVerison", $this->_propDict)) {
            return $this->_propDict["minOSVerison"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minOSVerison
    * Min OS version for Applicability Rule.
    *
    * @param string $val The minOSVerison
    *
    * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public function setMinOSVerison($val)
    {
        $this->_propDict["minOSVerison"] = $val;
        return $this;
    }
    
    /**
    * Gets the maxOSVersion
    * Max OS version for Applicability Rule.
    *
    * @return string The maxOSVersion
    */
    public function getMaxOSVersion()
    {
        if (array_key_exists("maxOSVersion", $this->_propDict)) {
            return $this->_propDict["maxOSVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maxOSVersion
    * Max OS version for Applicability Rule.
    *
    * @param string $val The maxOSVersion
    *
    * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public function setMaxOSVersion($val)
    {
        $this->_propDict["maxOSVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Name for object.
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
    * Name for object.
    *
    * @param string $val The name
    *
    * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationGroupAssignment File
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
* DeviceConfigurationGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return DeviceConfigurationGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the excludeGroup
    *
    * @return bool The excludeGroup
    */
    public function getExcludeGroup()
    {
        if (array_key_exists("excludeGroup", $this->_propDict)) {
            return $this->_propDict["excludeGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludeGroup
    *
    * @param bool $val The excludeGroup
    *
    * @return DeviceConfigurationGroupAssignment
    */
    public function setExcludeGroup($val)
    {
        $this->_propDict["excludeGroup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceConfiguration
    *
    * @return DeviceConfiguration The deviceConfiguration
    */
    public function getDeviceConfiguration()
    {
        if (array_key_exists("deviceConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfiguration"], "Microsoft\Graph\Beta\Model\DeviceConfiguration")) {
                return $this->_propDict["deviceConfiguration"];
            } else {
                $this->_propDict["deviceConfiguration"] = new DeviceConfiguration($this->_propDict["deviceConfiguration"]);
                return $this->_propDict["deviceConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfiguration
    *
    * @param DeviceConfiguration $val The deviceConfiguration
    *
    * @return DeviceConfigurationGroupAssignment
    */
    public function setDeviceConfiguration($val)
    {
        $this->_propDict["deviceConfiguration"] = $val;
        return $this;
    }
    
}
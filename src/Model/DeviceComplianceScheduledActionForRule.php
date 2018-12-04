<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScheduledActionForRule File
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
* DeviceComplianceScheduledActionForRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceComplianceScheduledActionForRule extends Entity
{
    /**
    * Gets the ruleName
    *
    * @return string The ruleName
    */
    public function getRuleName()
    {
        if (array_key_exists("ruleName", $this->_propDict)) {
            return $this->_propDict["ruleName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ruleName
    *
    * @param string $val The ruleName
    *
    * @return DeviceComplianceScheduledActionForRule
    */
    public function setRuleName($val)
    {
        $this->_propDict["ruleName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scheduledActionConfigurations
     *
     * @return array The scheduledActionConfigurations
     */
    public function getScheduledActionConfigurations()
    {
        if (array_key_exists("scheduledActionConfigurations", $this->_propDict)) {
           return $this->_propDict["scheduledActionConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledActionConfigurations
    *
    * @param DeviceComplianceActionItem $val The scheduledActionConfigurations
    *
    * @return DeviceComplianceScheduledActionForRule
    */
    public function setScheduledActionConfigurations($val)
    {
		$this->_propDict["scheduledActionConfigurations"] = $val;
        return $this;
    }
    
}
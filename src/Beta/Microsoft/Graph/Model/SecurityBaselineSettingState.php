<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineSettingState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* SecurityBaselineSettingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineSettingState extends Entity
{
    /**
    * Gets the settingName
    * The setting name that is being reported
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    * The setting name that is being reported
    *
    * @param string $val The settingName
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The compliance state of the security baseline setting
    *
    * @return SecurityBaselineComplianceState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Beta\Microsoft\Graph\Model\SecurityBaselineComplianceState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SecurityBaselineComplianceState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The compliance state of the security baseline setting
    *
    * @param SecurityBaselineComplianceState $val The state
    *
    * @return SecurityBaselineSettingState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCategoryId
    * The setting category id which this setting belongs to
    *
    * @return string The settingCategoryId
    */
    public function getSettingCategoryId()
    {
        if (array_key_exists("settingCategoryId", $this->_propDict)) {
            return $this->_propDict["settingCategoryId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCategoryId
    * The setting category id which this setting belongs to
    *
    * @param string $val The settingCategoryId
    *
    * @return SecurityBaselineSettingState
    */
    public function setSettingCategoryId($val)
    {
        $this->_propDict["settingCategoryId"] = $val;
        return $this;
    }
    
}
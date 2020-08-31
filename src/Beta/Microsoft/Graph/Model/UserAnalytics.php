<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAnalytics File
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
* UserAnalytics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAnalytics extends Entity
{
    /**
    * Gets the settings
    *
    * @return Settings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Beta\Microsoft\Graph\Model\Settings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Settings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param Settings $val The settings
    *
    * @return UserAnalytics
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activityStatistics
     *
     * @return array The activityStatistics
     */
    public function getActivityStatistics()
    {
        if (array_key_exists("activityStatistics", $this->_propDict)) {
           return $this->_propDict["activityStatistics"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activityStatistics
    *
    * @param ActivityStatistics $val The activityStatistics
    *
    * @return UserAnalytics
    */
    public function setActivityStatistics($val)
    {
		$this->_propDict["activityStatistics"] = $val;
        return $this;
    }
    
}
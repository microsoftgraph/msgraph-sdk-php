<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagementApp File
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
* WindowsManagementApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsManagementApp extends Entity
{
    /**
    * Gets the availableVersion
    *
    * @return string The availableVersion
    */
    public function getAvailableVersion()
    {
        if (array_key_exists("availableVersion", $this->_propDict)) {
            return $this->_propDict["availableVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availableVersion
    *
    * @param string $val The availableVersion
    *
    * @return WindowsManagementApp
    */
    public function setAvailableVersion($val)
    {
        $this->_propDict["availableVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the healthSummary
    *
    * @return WindowsManagementAppHealthSummary The healthSummary
    */
    public function getHealthSummary()
    {
        if (array_key_exists("healthSummary", $this->_propDict)) {
            if (is_a($this->_propDict["healthSummary"], "Microsoft\Graph\Beta\Model\WindowsManagementAppHealthSummary")) {
                return $this->_propDict["healthSummary"];
            } else {
                $this->_propDict["healthSummary"] = new WindowsManagementAppHealthSummary($this->_propDict["healthSummary"]);
                return $this->_propDict["healthSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthSummary
    *
    * @param WindowsManagementAppHealthSummary $val The healthSummary
    *
    * @return WindowsManagementApp
    */
    public function setHealthSummary($val)
    {
        $this->_propDict["healthSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the healthStates
     *
     * @return array The healthStates
     */
    public function getHealthStates()
    {
        if (array_key_exists("healthStates", $this->_propDict)) {
           return $this->_propDict["healthStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the healthStates
    *
    * @param WindowsManagementAppHealthState $val The healthStates
    *
    * @return WindowsManagementApp
    */
    public function setHealthStates($val)
    {
		$this->_propDict["healthStates"] = $val;
        return $this;
    }
    
}
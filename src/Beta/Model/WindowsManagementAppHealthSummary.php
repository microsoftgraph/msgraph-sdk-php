<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsManagementAppHealthSummary File
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
* WindowsManagementAppHealthSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsManagementAppHealthSummary extends Entity
{
    /**
    * Gets the healthyDeviceCount
    *
    * @return int The healthyDeviceCount
    */
    public function getHealthyDeviceCount()
    {
        if (array_key_exists("healthyDeviceCount", $this->_propDict)) {
            return $this->_propDict["healthyDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the healthyDeviceCount
    *
    * @param int $val The healthyDeviceCount
    *
    * @return WindowsManagementAppHealthSummary
    */
    public function setHealthyDeviceCount($val)
    {
        $this->_propDict["healthyDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unhealthyDeviceCount
    *
    * @return int The unhealthyDeviceCount
    */
    public function getUnhealthyDeviceCount()
    {
        if (array_key_exists("unhealthyDeviceCount", $this->_propDict)) {
            return $this->_propDict["unhealthyDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unhealthyDeviceCount
    *
    * @param int $val The unhealthyDeviceCount
    *
    * @return WindowsManagementAppHealthSummary
    */
    public function setUnhealthyDeviceCount($val)
    {
        $this->_propDict["unhealthyDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownDeviceCount
    *
    * @param int $val The unknownDeviceCount
    *
    * @return WindowsManagementAppHealthSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    
}
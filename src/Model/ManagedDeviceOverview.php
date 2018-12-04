<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceOverview File
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
* ManagedDeviceOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ManagedDeviceOverview extends Entity
{
    /**
    * Gets the enrolledDeviceCount
    *
    * @return int The enrolledDeviceCount
    */
    public function getEnrolledDeviceCount()
    {
        if (array_key_exists("enrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["enrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrolledDeviceCount
    *
    * @param int $val The enrolledDeviceCount
    *
    * @return ManagedDeviceOverview
    */
    public function setEnrolledDeviceCount($val)
    {
        $this->_propDict["enrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mdmEnrolledCount
    *
    * @return int The mdmEnrolledCount
    */
    public function getMdmEnrolledCount()
    {
        if (array_key_exists("mdmEnrolledCount", $this->_propDict)) {
            return $this->_propDict["mdmEnrolledCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmEnrolledCount
    *
    * @param int $val The mdmEnrolledCount
    *
    * @return ManagedDeviceOverview
    */
    public function setMdmEnrolledCount($val)
    {
        $this->_propDict["mdmEnrolledCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the dualEnrolledDeviceCount
    *
    * @return int The dualEnrolledDeviceCount
    */
    public function getDualEnrolledDeviceCount()
    {
        if (array_key_exists("dualEnrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["dualEnrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dualEnrolledDeviceCount
    *
    * @param int $val The dualEnrolledDeviceCount
    *
    * @return ManagedDeviceOverview
    */
    public function setDualEnrolledDeviceCount($val)
    {
        $this->_propDict["dualEnrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deviceOperatingSystemSummary
    *
    * @return DeviceOperatingSystemSummary The deviceOperatingSystemSummary
    */
    public function getDeviceOperatingSystemSummary()
    {
        if (array_key_exists("deviceOperatingSystemSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceOperatingSystemSummary"], "Microsoft\Graph\Model\DeviceOperatingSystemSummary")) {
                return $this->_propDict["deviceOperatingSystemSummary"];
            } else {
                $this->_propDict["deviceOperatingSystemSummary"] = new DeviceOperatingSystemSummary($this->_propDict["deviceOperatingSystemSummary"]);
                return $this->_propDict["deviceOperatingSystemSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceOperatingSystemSummary
    *
    * @param DeviceOperatingSystemSummary $val The deviceOperatingSystemSummary
    *
    * @return ManagedDeviceOverview
    */
    public function setDeviceOperatingSystemSummary($val)
    {
        $this->_propDict["deviceOperatingSystemSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceExchangeAccessStateSummary
    *
    * @return DeviceExchangeAccessStateSummary The deviceExchangeAccessStateSummary
    */
    public function getDeviceExchangeAccessStateSummary()
    {
        if (array_key_exists("deviceExchangeAccessStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceExchangeAccessStateSummary"], "Microsoft\Graph\Model\DeviceExchangeAccessStateSummary")) {
                return $this->_propDict["deviceExchangeAccessStateSummary"];
            } else {
                $this->_propDict["deviceExchangeAccessStateSummary"] = new DeviceExchangeAccessStateSummary($this->_propDict["deviceExchangeAccessStateSummary"]);
                return $this->_propDict["deviceExchangeAccessStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceExchangeAccessStateSummary
    *
    * @param DeviceExchangeAccessStateSummary $val The deviceExchangeAccessStateSummary
    *
    * @return ManagedDeviceOverview
    */
    public function setDeviceExchangeAccessStateSummary($val)
    {
        $this->_propDict["deviceExchangeAccessStateSummary"] = $val;
        return $this;
    }
    
}
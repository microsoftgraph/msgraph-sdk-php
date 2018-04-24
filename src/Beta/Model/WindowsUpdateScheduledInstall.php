<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateScheduledInstall File
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
* WindowsUpdateScheduledInstall class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsUpdateScheduledInstall extends WindowsUpdateInstallScheduleType
{

    /**
    * Gets the scheduledInstallDay
    *
    * @return WeeklySchedule The scheduledInstallDay
    */
    public function getScheduledInstallDay()
    {
        if (array_key_exists("scheduledInstallDay", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledInstallDay"], "Microsoft\Graph\Beta\Model\WeeklySchedule")) {
                return $this->_propDict["scheduledInstallDay"];
            } else {
                $this->_propDict["scheduledInstallDay"] = new WeeklySchedule($this->_propDict["scheduledInstallDay"]);
                return $this->_propDict["scheduledInstallDay"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledInstallDay
    *
    * @param WeeklySchedule $val The value to assign to the scheduledInstallDay
    *
    * @return WindowsUpdateScheduledInstall The WindowsUpdateScheduledInstall
    */
    public function setScheduledInstallDay($val)
    {
        $this->_propDict["scheduledInstallDay"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledInstallTime
    *
    * @return TimeOfDay The scheduledInstallTime
    */
    public function getScheduledInstallTime()
    {
        if (array_key_exists("scheduledInstallTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledInstallTime"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["scheduledInstallTime"];
            } else {
                $this->_propDict["scheduledInstallTime"] = new TimeOfDay($this->_propDict["scheduledInstallTime"]);
                return $this->_propDict["scheduledInstallTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledInstallTime
    *
    * @param TimeOfDay $val The value to assign to the scheduledInstallTime
    *
    * @return WindowsUpdateScheduledInstall The WindowsUpdateScheduledInstall
    */
    public function setScheduledInstallTime($val)
    {
        $this->_propDict["scheduledInstallTime"] = $val;
         return $this;
    }

    /**
    * Gets the restartMode
    *
    * @return WindowsUpdateRestartMode The restartMode
    */
    public function getRestartMode()
    {
        if (array_key_exists("restartMode", $this->_propDict)) {
            if (is_a($this->_propDict["restartMode"], "Microsoft\Graph\Beta\Model\WindowsUpdateRestartMode")) {
                return $this->_propDict["restartMode"];
            } else {
                $this->_propDict["restartMode"] = new WindowsUpdateRestartMode($this->_propDict["restartMode"]);
                return $this->_propDict["restartMode"];
            }
        }
        return null;
    }

    /**
    * Sets the restartMode
    *
    * @param WindowsUpdateRestartMode $val The value to assign to the restartMode
    *
    * @return WindowsUpdateScheduledInstall The WindowsUpdateScheduledInstall
    */
    public function setRestartMode($val)
    {
        $this->_propDict["restartMode"] = $val;
         return $this;
    }
}

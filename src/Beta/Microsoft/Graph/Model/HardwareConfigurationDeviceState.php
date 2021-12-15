<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareConfigurationDeviceState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* HardwareConfigurationDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareConfigurationDeviceState extends Entity
{
    /**
    * Gets the configurationError
    * Error from the hardware configuration execution
    *
    * @return string|null The configurationError
    */
    public function getConfigurationError()
    {
        if (array_key_exists("configurationError", $this->_propDict)) {
            return $this->_propDict["configurationError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationError
    * Error from the hardware configuration execution
    *
    * @param string $val The configurationError
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setConfigurationError($val)
    {
        $this->_propDict["configurationError"] = $val;
        return $this;
    }

    /**
    * Gets the configurationOutput
    * Output of the hardware configuration execution
    *
    * @return string|null The configurationOutput
    */
    public function getConfigurationOutput()
    {
        if (array_key_exists("configurationOutput", $this->_propDict)) {
            return $this->_propDict["configurationOutput"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationOutput
    * Output of the hardware configuration execution
    *
    * @param string $val The configurationOutput
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setConfigurationOutput($val)
    {
        $this->_propDict["configurationOutput"] = $val;
        return $this;
    }

    /**
    * Gets the configurationState
    * Configuration state from the lastest hardware configuration execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState|null The configurationState
    */
    public function getConfigurationState()
    {
        if (array_key_exists("configurationState", $this->_propDict)) {
            if (is_a($this->_propDict["configurationState"], "\Beta\Microsoft\Graph\Model\RunState") || is_null($this->_propDict["configurationState"])) {
                return $this->_propDict["configurationState"];
            } else {
                $this->_propDict["configurationState"] = new RunState($this->_propDict["configurationState"]);
                return $this->_propDict["configurationState"];
            }
        }
        return null;
    }

    /**
    * Sets the configurationState
    * Configuration state from the lastest hardware configuration execution. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The configurationState
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setConfigurationState($val)
    {
        $this->_propDict["configurationState"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The name of the device
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The name of the device
    *
    * @param string $val The deviceName
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the internalVersion
    * The Policy internal version
    *
    * @return int|null The internalVersion
    */
    public function getInternalVersion()
    {
        if (array_key_exists("internalVersion", $this->_propDict)) {
            return $this->_propDict["internalVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalVersion
    * The Policy internal version
    *
    * @param int $val The internalVersion
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setInternalVersion($val)
    {
        $this->_propDict["internalVersion"] = intval($val);
        return $this;
    }

    /**
    * Gets the lastStateUpdateDateTime
    * The last timestamp of when the hardware configuration executed
    *
    * @return \DateTime|null The lastStateUpdateDateTime
    */
    public function getLastStateUpdateDateTime()
    {
        if (array_key_exists("lastStateUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastStateUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastStateUpdateDateTime"])) {
                return $this->_propDict["lastStateUpdateDateTime"];
            } else {
                $this->_propDict["lastStateUpdateDateTime"] = new \DateTime($this->_propDict["lastStateUpdateDateTime"]);
                return $this->_propDict["lastStateUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastStateUpdateDateTime
    * The last timestamp of when the hardware configuration executed
    *
    * @param \DateTime $val The lastStateUpdateDateTime
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setLastStateUpdateDateTime($val)
    {
        $this->_propDict["lastStateUpdateDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * Operating system version of the device.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * Operating system version of the device.
    *
    * @param string $val The osVersion
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the upn
    * User Principal Name (UPN).
    *
    * @return string|null The upn
    */
    public function getUpn()
    {
        if (array_key_exists("upn", $this->_propDict)) {
            return $this->_propDict["upn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upn
    * User Principal Name (UPN).
    *
    * @param string $val The upn
    *
    * @return HardwareConfigurationDeviceState
    */
    public function setUpn($val)
    {
        $this->_propDict["upn"] = $val;
        return $this;
    }

}

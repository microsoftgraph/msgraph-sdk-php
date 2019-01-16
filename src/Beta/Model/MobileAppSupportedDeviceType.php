<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppSupportedDeviceType File
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
* MobileAppSupportedDeviceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppSupportedDeviceType extends Entity
{

    /**
    * Gets the type
    * Device type
    *
    * @return DeviceType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Model\DeviceType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new DeviceType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Device type
    *
    * @param DeviceType $val The value to assign to the type
    *
    * @return MobileAppSupportedDeviceType The MobileAppSupportedDeviceType
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the minimumOperatingSystemVersion
    * Minimum OS version
    *
    * @return string The minimumOperatingSystemVersion
    */
    public function getMinimumOperatingSystemVersion()
    {
        if (array_key_exists("minimumOperatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["minimumOperatingSystemVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumOperatingSystemVersion
    * Minimum OS version
    *
    * @param string $val The value of the minimumOperatingSystemVersion
    *
    * @return MobileAppSupportedDeviceType
    */
    public function setMinimumOperatingSystemVersion($val)
    {
        $this->_propDict["minimumOperatingSystemVersion"] = $val;
        return $this;
    }
    /**
    * Gets the maximumOperatingSystemVersion
    * Maximum OS version
    *
    * @return string The maximumOperatingSystemVersion
    */
    public function getMaximumOperatingSystemVersion()
    {
        if (array_key_exists("maximumOperatingSystemVersion", $this->_propDict)) {
            return $this->_propDict["maximumOperatingSystemVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumOperatingSystemVersion
    * Maximum OS version
    *
    * @param string $val The value of the maximumOperatingSystemVersion
    *
    * @return MobileAppSupportedDeviceType
    */
    public function setMaximumOperatingSystemVersion($val)
    {
        $this->_propDict["maximumOperatingSystemVersion"] = $val;
        return $this;
    }
}

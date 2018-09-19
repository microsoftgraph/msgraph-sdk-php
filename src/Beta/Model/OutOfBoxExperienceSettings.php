<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutOfBoxExperienceSettings File
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
* OutOfBoxExperienceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OutOfBoxExperienceSettings extends Entity
{
    /**
    * Gets the hidePrivacySettings
    *
    * @return bool The hidePrivacySettings
    */
    public function getHidePrivacySettings()
    {
        if (array_key_exists("hidePrivacySettings", $this->_propDict)) {
            return $this->_propDict["hidePrivacySettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hidePrivacySettings
    *
    * @param bool $val The value of the hidePrivacySettings
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHidePrivacySettings($val)
    {
        $this->_propDict["hidePrivacySettings"] = $val;
        return $this;
    }
    /**
    * Gets the hideEULA
    *
    * @return bool The hideEULA
    */
    public function getHideEULA()
    {
        if (array_key_exists("hideEULA", $this->_propDict)) {
            return $this->_propDict["hideEULA"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideEULA
    *
    * @param bool $val The value of the hideEULA
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHideEULA($val)
    {
        $this->_propDict["hideEULA"] = $val;
        return $this;
    }

    /**
    * Gets the userType
    *
    * @return WindowsUserType The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "Microsoft\Graph\Beta\Model\WindowsUserType")) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new WindowsUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }

    /**
    * Sets the userType
    *
    * @param WindowsUserType $val The value to assign to the userType
    *
    * @return OutOfBoxExperienceSettings The OutOfBoxExperienceSettings
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
         return $this;
    }

    /**
    * Gets the deviceUsageType
    *
    * @return WindowsDeviceUsageType The deviceUsageType
    */
    public function getDeviceUsageType()
    {
        if (array_key_exists("deviceUsageType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceUsageType"], "Microsoft\Graph\Beta\Model\WindowsDeviceUsageType")) {
                return $this->_propDict["deviceUsageType"];
            } else {
                $this->_propDict["deviceUsageType"] = new WindowsDeviceUsageType($this->_propDict["deviceUsageType"]);
                return $this->_propDict["deviceUsageType"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceUsageType
    *
    * @param WindowsDeviceUsageType $val The value to assign to the deviceUsageType
    *
    * @return OutOfBoxExperienceSettings The OutOfBoxExperienceSettings
    */
    public function setDeviceUsageType($val)
    {
        $this->_propDict["deviceUsageType"] = $val;
         return $this;
    }
    /**
    * Gets the skipKeyboardSelectionPage
    *
    * @return bool The skipKeyboardSelectionPage
    */
    public function getSkipKeyboardSelectionPage()
    {
        if (array_key_exists("skipKeyboardSelectionPage", $this->_propDict)) {
            return $this->_propDict["skipKeyboardSelectionPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the skipKeyboardSelectionPage
    *
    * @param bool $val The value of the skipKeyboardSelectionPage
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setSkipKeyboardSelectionPage($val)
    {
        $this->_propDict["skipKeyboardSelectionPage"] = $val;
        return $this;
    }
    /**
    * Gets the hideEscapeLink
    *
    * @return bool The hideEscapeLink
    */
    public function getHideEscapeLink()
    {
        if (array_key_exists("hideEscapeLink", $this->_propDict)) {
            return $this->_propDict["hideEscapeLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hideEscapeLink
    *
    * @param bool $val The value of the hideEscapeLink
    *
    * @return OutOfBoxExperienceSettings
    */
    public function setHideEscapeLink($val)
    {
        $this->_propDict["hideEscapeLink"] = $val;
        return $this;
    }
}

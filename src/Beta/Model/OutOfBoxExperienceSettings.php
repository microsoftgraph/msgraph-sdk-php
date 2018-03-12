<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutOfBoxExperienceSettings File
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
* OutOfBoxExperienceSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndUserNotificationSetting File
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
* EndUserNotificationSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndUserNotificationSetting extends Entity
{

    /**
    * Gets the notificationPreference
    * Notification preference. Possible values are: unknown, microsoft, custom, unknownFutureValue.
    *
    * @return EndUserNotificationPreference|null The notificationPreference
    */
    public function getNotificationPreference()
    {
        if (array_key_exists("notificationPreference", $this->_propDict)) {
            if (is_a($this->_propDict["notificationPreference"], "\Beta\Microsoft\Graph\Model\EndUserNotificationPreference") || is_null($this->_propDict["notificationPreference"])) {
                return $this->_propDict["notificationPreference"];
            } else {
                $this->_propDict["notificationPreference"] = new EndUserNotificationPreference($this->_propDict["notificationPreference"]);
                return $this->_propDict["notificationPreference"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationPreference
    * Notification preference. Possible values are: unknown, microsoft, custom, unknownFutureValue.
    *
    * @param EndUserNotificationPreference $val The value to assign to the notificationPreference
    *
    * @return EndUserNotificationSetting The EndUserNotificationSetting
    */
    public function setNotificationPreference($val)
    {
        $this->_propDict["notificationPreference"] = $val;
         return $this;
    }

    /**
    * Gets the positiveReinforcement
    * Positive reinforcement detail.
    *
    * @return PositiveReinforcementNotification|null The positiveReinforcement
    */
    public function getPositiveReinforcement()
    {
        if (array_key_exists("positiveReinforcement", $this->_propDict)) {
            if (is_a($this->_propDict["positiveReinforcement"], "\Beta\Microsoft\Graph\Model\PositiveReinforcementNotification") || is_null($this->_propDict["positiveReinforcement"])) {
                return $this->_propDict["positiveReinforcement"];
            } else {
                $this->_propDict["positiveReinforcement"] = new PositiveReinforcementNotification($this->_propDict["positiveReinforcement"]);
                return $this->_propDict["positiveReinforcement"];
            }
        }
        return null;
    }

    /**
    * Sets the positiveReinforcement
    * Positive reinforcement detail.
    *
    * @param PositiveReinforcementNotification $val The value to assign to the positiveReinforcement
    *
    * @return EndUserNotificationSetting The EndUserNotificationSetting
    */
    public function setPositiveReinforcement($val)
    {
        $this->_propDict["positiveReinforcement"] = $val;
         return $this;
    }

    /**
    * Gets the settingType
    * End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue.
    *
    * @return EndUserNotificationSettingType|null The settingType
    */
    public function getSettingType()
    {
        if (array_key_exists("settingType", $this->_propDict)) {
            if (is_a($this->_propDict["settingType"], "\Beta\Microsoft\Graph\Model\EndUserNotificationSettingType") || is_null($this->_propDict["settingType"])) {
                return $this->_propDict["settingType"];
            } else {
                $this->_propDict["settingType"] = new EndUserNotificationSettingType($this->_propDict["settingType"]);
                return $this->_propDict["settingType"];
            }
        }
        return null;
    }

    /**
    * Sets the settingType
    * End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue.
    *
    * @param EndUserNotificationSettingType $val The value to assign to the settingType
    *
    * @return EndUserNotificationSetting The EndUserNotificationSetting
    */
    public function setSettingType($val)
    {
        $this->_propDict["settingType"] = $val;
         return $this;
    }
}

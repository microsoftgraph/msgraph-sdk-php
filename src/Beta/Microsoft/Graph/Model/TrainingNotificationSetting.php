<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingNotificationSetting File
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
* TrainingNotificationSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingNotificationSetting extends EndUserNotificationSetting
{

    /**
    * Gets the trainingAssignment
    *
    * @return BaseEndUserNotification|null The trainingAssignment
    */
    public function getTrainingAssignment()
    {
        if (array_key_exists("trainingAssignment", $this->_propDict)) {
            if (is_a($this->_propDict["trainingAssignment"], "\Beta\Microsoft\Graph\Model\BaseEndUserNotification") || is_null($this->_propDict["trainingAssignment"])) {
                return $this->_propDict["trainingAssignment"];
            } else {
                $this->_propDict["trainingAssignment"] = new BaseEndUserNotification($this->_propDict["trainingAssignment"]);
                return $this->_propDict["trainingAssignment"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingAssignment
    *
    * @param BaseEndUserNotification $val The value to assign to the trainingAssignment
    *
    * @return TrainingNotificationSetting The TrainingNotificationSetting
    */
    public function setTrainingAssignment($val)
    {
        $this->_propDict["trainingAssignment"] = $val;
         return $this;
    }

    /**
    * Gets the trainingReminder
    *
    * @return TrainingReminderNotification|null The trainingReminder
    */
    public function getTrainingReminder()
    {
        if (array_key_exists("trainingReminder", $this->_propDict)) {
            if (is_a($this->_propDict["trainingReminder"], "\Beta\Microsoft\Graph\Model\TrainingReminderNotification") || is_null($this->_propDict["trainingReminder"])) {
                return $this->_propDict["trainingReminder"];
            } else {
                $this->_propDict["trainingReminder"] = new TrainingReminderNotification($this->_propDict["trainingReminder"]);
                return $this->_propDict["trainingReminder"];
            }
        }
        return null;
    }

    /**
    * Sets the trainingReminder
    *
    * @param TrainingReminderNotification $val The value to assign to the trainingReminder
    *
    * @return TrainingNotificationSetting The TrainingNotificationSetting
    */
    public function setTrainingReminder($val)
    {
        $this->_propDict["trainingReminder"] = $val;
         return $this;
    }
}

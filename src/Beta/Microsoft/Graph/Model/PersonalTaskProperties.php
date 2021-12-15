<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonalTaskProperties File
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
* PersonalTaskProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonalTaskProperties extends Entity
{

    /**
    * Gets the reminderDatetime
    * The date and time for a reminder alert of the task to occur.
    *
    * @return DateTimeTimeZone|null The reminderDatetime
    */
    public function getReminderDatetime()
    {
        if (array_key_exists("reminderDatetime", $this->_propDict)) {
            if (is_a($this->_propDict["reminderDatetime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone") || is_null($this->_propDict["reminderDatetime"])) {
                return $this->_propDict["reminderDatetime"];
            } else {
                $this->_propDict["reminderDatetime"] = new DateTimeTimeZone($this->_propDict["reminderDatetime"]);
                return $this->_propDict["reminderDatetime"];
            }
        }
        return null;
    }

    /**
    * Sets the reminderDatetime
    * The date and time for a reminder alert of the task to occur.
    *
    * @param DateTimeTimeZone $val The value to assign to the reminderDatetime
    *
    * @return PersonalTaskProperties The PersonalTaskProperties
    */
    public function setReminderDatetime($val)
    {
        $this->_propDict["reminderDatetime"] = $val;
         return $this;
    }
}

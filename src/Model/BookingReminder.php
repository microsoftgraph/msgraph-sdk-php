<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingReminder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* BookingReminder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingReminder extends Entity
{
    /**
    * Gets the message
    * The message in the reminder.
    *
    * @return string|null The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The message in the reminder.
    *
    * @param string $val The value of the message
    *
    * @return BookingReminder
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

    /**
    * Gets the offset
    * The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
    *
    * @return \DateInterval|null The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            if (is_a($this->_propDict["offset"], "\DateInterval") || is_null($this->_propDict["offset"])) {
                return $this->_propDict["offset"];
            } else {
                $this->_propDict["offset"] = new \DateInterval($this->_propDict["offset"]);
                return $this->_propDict["offset"];
            }
        }
        return null;
    }

    /**
    * Sets the offset
    * The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
    *
    * @param \DateInterval $val The value to assign to the offset
    *
    * @return BookingReminder The BookingReminder
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
         return $this;
    }

    /**
    * Gets the recipients
    * The persons who should receive the reminder. Possible values are: allAttendees, staff, customer, unknownFutureValue.
    *
    * @return BookingReminderRecipients|null The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
            if (is_a($this->_propDict["recipients"], "\Microsoft\Graph\Model\BookingReminderRecipients") || is_null($this->_propDict["recipients"])) {
                return $this->_propDict["recipients"];
            } else {
                $this->_propDict["recipients"] = new BookingReminderRecipients($this->_propDict["recipients"]);
                return $this->_propDict["recipients"];
            }
        }
        return null;
    }

    /**
    * Sets the recipients
    * The persons who should receive the reminder. Possible values are: allAttendees, staff, customer, unknownFutureValue.
    *
    * @param BookingReminderRecipients $val The value to assign to the recipients
    *
    * @return BookingReminder The BookingReminder
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
         return $this;
    }
}

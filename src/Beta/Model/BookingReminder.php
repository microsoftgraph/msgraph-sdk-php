<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingReminder File
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
* BookingReminder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class BookingReminder extends Entity
{

    /**
    * Gets the offset
    *
    * @return Duration The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            if (is_a($this->_propDict["offset"], "Microsoft\Graph\Beta\Model\Duration")) {
                return $this->_propDict["offset"];
            } else {
                $this->_propDict["offset"] = new Duration($this->_propDict["offset"]);
                return $this->_propDict["offset"];
            }
        }
        return null;
    }

    /**
    * Sets the offset
    *
    * @param Duration $val The value to assign to the offset
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
    *
    * @return BookingReminderRecipients The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
            if (is_a($this->_propDict["recipients"], "Microsoft\Graph\Beta\Model\BookingReminderRecipients")) {
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
    /**
    * Gets the message
    *
    * @return string The message
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
}

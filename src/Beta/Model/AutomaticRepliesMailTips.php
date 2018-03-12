<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutomaticRepliesMailTips File
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
* AutomaticRepliesMailTips class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AutomaticRepliesMailTips extends Entity
{
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
    * @return AutomaticRepliesMailTips
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

    /**
    * Gets the messageLanguage
    *
    * @return LocaleInfo The messageLanguage
    */
    public function getMessageLanguage()
    {
        if (array_key_exists("messageLanguage", $this->_propDict)) {
            if (is_a($this->_propDict["messageLanguage"], "Microsoft\Graph\Model\LocaleInfo")) {
                return $this->_propDict["messageLanguage"];
            } else {
                $this->_propDict["messageLanguage"] = new LocaleInfo($this->_propDict["messageLanguage"]);
                return $this->_propDict["messageLanguage"];
            }
        }
        return null;
    }

    /**
    * Sets the messageLanguage
    *
    * @param LocaleInfo $val The value to assign to the messageLanguage
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setMessageLanguage($val)
    {
        $this->_propDict["messageLanguage"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledStartTime
    *
    * @return DateTimeTimeZone The scheduledStartTime
    */
    public function getScheduledStartTime()
    {
        if (array_key_exists("scheduledStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledStartTime"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledStartTime"];
            } else {
                $this->_propDict["scheduledStartTime"] = new DateTimeTimeZone($this->_propDict["scheduledStartTime"]);
                return $this->_propDict["scheduledStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledStartTime
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledStartTime
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setScheduledStartTime($val)
    {
        $this->_propDict["scheduledStartTime"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledEndTime
    *
    * @return DateTimeTimeZone The scheduledEndTime
    */
    public function getScheduledEndTime()
    {
        if (array_key_exists("scheduledEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledEndTime"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["scheduledEndTime"];
            } else {
                $this->_propDict["scheduledEndTime"] = new DateTimeTimeZone($this->_propDict["scheduledEndTime"]);
                return $this->_propDict["scheduledEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledEndTime
    *
    * @param DateTimeTimeZone $val The value to assign to the scheduledEndTime
    *
    * @return AutomaticRepliesMailTips The AutomaticRepliesMailTips
    */
    public function setScheduledEndTime($val)
    {
        $this->_propDict["scheduledEndTime"] = $val;
         return $this;
    }
}

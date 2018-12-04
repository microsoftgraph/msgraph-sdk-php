<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FollowupFlag File
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
* FollowupFlag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FollowupFlag extends Entity
{

    /**
    * Gets the completedDateTime
    *
    * @return DateTimeTimeZone The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new DateTimeTimeZone($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the completedDateTime
    *
    * @return FollowupFlag The FollowupFlag
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the dueDateTime
    *
    * @return DateTimeTimeZone The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new DateTimeTimeZone($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dueDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the dueDateTime
    *
    * @return FollowupFlag The FollowupFlag
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return DateTimeTimeZone The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new DateTimeTimeZone($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param DateTimeTimeZone $val The value to assign to the startDateTime
    *
    * @return FollowupFlag The FollowupFlag
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the flagStatus
    *
    * @return FollowupFlagStatus The flagStatus
    */
    public function getFlagStatus()
    {
        if (array_key_exists("flagStatus", $this->_propDict)) {
            if (is_a($this->_propDict["flagStatus"], "Microsoft\Graph\Model\FollowupFlagStatus")) {
                return $this->_propDict["flagStatus"];
            } else {
                $this->_propDict["flagStatus"] = new FollowupFlagStatus($this->_propDict["flagStatus"]);
                return $this->_propDict["flagStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the flagStatus
    *
    * @param FollowupFlagStatus $val The value to assign to the flagStatus
    *
    * @return FollowupFlag The FollowupFlag
    */
    public function setFlagStatus($val)
    {
        $this->_propDict["flagStatus"] = $val;
         return $this;
    }
}

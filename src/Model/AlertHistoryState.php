<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertHistoryState File
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
* AlertHistoryState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AlertHistoryState extends Entity
{
    /**
    * Gets the appId
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param string $val The value of the appId
    *
    * @return AlertHistoryState
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the assignedTo
    *
    * @return string The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTo
    *
    * @param string $val The value of the assignedTo
    *
    * @return AlertHistoryState
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    /**
    * Gets the comments
    *
    * @return string The comments
    */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
            return $this->_propDict["comments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the comments
    *
    * @param string $val The value of the comments
    *
    * @return AlertHistoryState
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }

    /**
    * Gets the feedback
    *
    * @return AlertFeedback The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "Microsoft\Graph\Model\AlertFeedback")) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new AlertFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }

    /**
    * Sets the feedback
    *
    * @param AlertFeedback $val The value to assign to the feedback
    *
    * @return AlertHistoryState The AlertHistoryState
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
         return $this;
    }

    /**
    * Gets the status
    *
    * @return AlertStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\AlertStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AlertStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param AlertStatus $val The value to assign to the status
    *
    * @return AlertHistoryState The AlertHistoryState
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }

    /**
    * Gets the updatedDateTime
    *
    * @return \DateTime The updatedDateTime
    */
    public function getUpdatedDateTime()
    {
        if (array_key_exists("updatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["updatedDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["updatedDateTime"];
            } else {
                $this->_propDict["updatedDateTime"] = new \DateTime($this->_propDict["updatedDateTime"]);
                return $this->_propDict["updatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updatedDateTime
    *
    * @param \DateTime $val The value to assign to the updatedDateTime
    *
    * @return AlertHistoryState The AlertHistoryState
    */
    public function setUpdatedDateTime($val)
    {
        $this->_propDict["updatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the user
    *
    * @return string The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            return $this->_propDict["user"];
        } else {
            return null;
        }
    }

    /**
    * Sets the user
    *
    * @param string $val The value of the user
    *
    * @return AlertHistoryState
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
        return $this;
    }
}

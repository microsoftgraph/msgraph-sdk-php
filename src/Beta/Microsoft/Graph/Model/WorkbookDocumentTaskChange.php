<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookDocumentTaskChange File
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
* WorkbookDocumentTaskChange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookDocumentTaskChange extends Entity
{
    /**
    * Gets the assignee
    * The user identity the task is assigned to. Only present when the type property is assign. Nullable.
    *
    * @return WorkbookEmailIdentity|null The assignee
    */
    public function getAssignee()
    {
        if (array_key_exists("assignee", $this->_propDict)) {
            if (is_a($this->_propDict["assignee"], "\Beta\Microsoft\Graph\Model\WorkbookEmailIdentity") || is_null($this->_propDict["assignee"])) {
                return $this->_propDict["assignee"];
            } else {
                $this->_propDict["assignee"] = new WorkbookEmailIdentity($this->_propDict["assignee"]);
                return $this->_propDict["assignee"];
            }
        }
        return null;
    }

    /**
    * Sets the assignee
    * The user identity the task is assigned to. Only present when the type property is assign. Nullable.
    *
    * @param WorkbookEmailIdentity $val The assignee
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setAssignee($val)
    {
        $this->_propDict["assignee"] = $val;
        return $this;
    }

    /**
    * Gets the changedBy
    * The identity of the user who performs the change.
    *
    * @return WorkbookEmailIdentity|null The changedBy
    */
    public function getChangedBy()
    {
        if (array_key_exists("changedBy", $this->_propDict)) {
            if (is_a($this->_propDict["changedBy"], "\Beta\Microsoft\Graph\Model\WorkbookEmailIdentity") || is_null($this->_propDict["changedBy"])) {
                return $this->_propDict["changedBy"];
            } else {
                $this->_propDict["changedBy"] = new WorkbookEmailIdentity($this->_propDict["changedBy"]);
                return $this->_propDict["changedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the changedBy
    * The identity of the user who performs the change.
    *
    * @param WorkbookEmailIdentity $val The changedBy
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setChangedBy($val)
    {
        $this->_propDict["changedBy"] = $val;
        return $this;
    }

    /**
    * Gets the commentId
    * The identifier of the associated comment.
    *
    * @return string|null The commentId
    */
    public function getCommentId()
    {
        if (array_key_exists("commentId", $this->_propDict)) {
            return $this->_propDict["commentId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the commentId
    * The identifier of the associated comment.
    *
    * @param string $val The commentId
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setCommentId($val)
    {
        $this->_propDict["commentId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time when the task was changed. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Date and time when the task was changed. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the dueDateTime
    * The due date and time for the task. Only present when the type property is setSchedule. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\DateTime") || is_null($this->_propDict["dueDateTime"])) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new \DateTime($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dueDateTime
    * The due date and time for the task. Only present when the type property is setSchedule. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the percentComplete
    * An integer value from 0 to 100 that represents the percentage of the completion of the task and associated comment. 100 means that the task and associated comment are completed. If you change the completion from 100 to a lower value, the associated task and comment are reactivated. Only present when the type property is setPercentComplete. Nullable.
    *
    * @return int|null The percentComplete
    */
    public function getPercentComplete()
    {
        if (array_key_exists("percentComplete", $this->_propDict)) {
            return $this->_propDict["percentComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentComplete
    * An integer value from 0 to 100 that represents the percentage of the completion of the task and associated comment. 100 means that the task and associated comment are completed. If you change the completion from 100 to a lower value, the associated task and comment are reactivated. Only present when the type property is setPercentComplete. Nullable.
    *
    * @param int $val The percentComplete
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = intval($val);
        return $this;
    }

    /**
    * Gets the priority
    * An integer value from 0 to 10 that represents the priority of the task. A lower value indicates a higher priority. 5 indicates the default priority if not set. Only present when the type property is setPriority. Nullable.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * An integer value from 0 to 10 that represents the priority of the task. A lower value indicates a higher priority. 5 indicates the default priority if not set. Only present when the type property is setPriority. Nullable.
    *
    * @param int $val The priority
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the startDateTime
    * The start date and time for the task. Only present when the type property is setSchedule. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The start date and time for the task. Only present when the type property is setSchedule. Nullable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the title
    * The title of the task. Only present when the type property is setTitle. Nullable.
    *
    * @return string|null The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title of the task. Only present when the type property is setTitle. Nullable.
    *
    * @param string $val The title
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of the change history. Possible values are: create, assign, unassign, unassignAll, setPriority, setTitle, setPercentComplete, setSchedule, remove, restore, undo.
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * The type of the change history. Possible values are: create, assign, unassign, unassignAll, setPriority, setTitle, setPercentComplete, setSchedule, remove, restore, undo.
    *
    * @param string $val The type
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the undoChangeId
    * The ID of the workbookDocumentTaskChange that was undone for the undo change action. Only exists on an undo change history. Nullable.
    *
    * @return string|null The undoChangeId
    */
    public function getUndoChangeId()
    {
        if (array_key_exists("undoChangeId", $this->_propDict)) {
            return $this->_propDict["undoChangeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the undoChangeId
    * The ID of the workbookDocumentTaskChange that was undone for the undo change action. Only exists on an undo change history. Nullable.
    *
    * @param string $val The undoChangeId
    *
    * @return WorkbookDocumentTaskChange
    */
    public function setUndoChangeId($val)
    {
        $this->_propDict["undoChangeId"] = $val;
        return $this;
    }

}

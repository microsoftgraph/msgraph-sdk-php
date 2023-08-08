<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookDocumentTask File
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
* WorkbookDocumentTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookDocumentTask extends Entity
{

     /**
     * Gets the assignees
     *
     * @return array|null The assignees
     */
    public function getAssignees()
    {
        if (array_key_exists("assignees", $this->_propDict)) {
           return $this->_propDict["assignees"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignees
    *
    * @param WorkbookEmailIdentity[] $val The assignees
    *
    * @return WorkbookDocumentTask
    */
    public function setAssignees($val)
    {
        $this->_propDict["assignees"] = $val;
        return $this;
    }

    /**
    * Gets the completedBy
    *
    * @return WorkbookEmailIdentity|null The completedBy
    */
    public function getCompletedBy()
    {
        if (array_key_exists("completedBy", $this->_propDict)) {
            if (is_a($this->_propDict["completedBy"], "\Beta\Microsoft\Graph\Model\WorkbookEmailIdentity") || is_null($this->_propDict["completedBy"])) {
                return $this->_propDict["completedBy"];
            } else {
                $this->_propDict["completedBy"] = new WorkbookEmailIdentity($this->_propDict["completedBy"]);
                return $this->_propDict["completedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the completedBy
    *
    * @param WorkbookEmailIdentity $val The completedBy
    *
    * @return WorkbookDocumentTask
    */
    public function setCompletedBy($val)
    {
        $this->_propDict["completedBy"] = $val;
        return $this;
    }

    /**
    * Gets the completedDateTime
    *
    * @return \DateTime|null The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime") || is_null($this->_propDict["completedDateTime"])) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completedDateTime
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return WorkbookDocumentTask
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    *
    * @return WorkbookEmailIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\WorkbookEmailIdentity") || is_null($this->_propDict["createdBy"])) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new WorkbookEmailIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    *
    * @param WorkbookEmailIdentity $val The createdBy
    *
    * @return WorkbookDocumentTask
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
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
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WorkbookDocumentTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the percentComplete
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
    *
    * @param int $val The percentComplete
    *
    * @return WorkbookDocumentTask
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = intval($val);
        return $this;
    }

    /**
    * Gets the priority
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
    *
    * @param int $val The priority
    *
    * @return WorkbookDocumentTask
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }

    /**
    * Gets the startAndDueDateTime
    *
    * @return WorkbookDocumentTaskSchedule|null The startAndDueDateTime
    */
    public function getStartAndDueDateTime()
    {
        if (array_key_exists("startAndDueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startAndDueDateTime"], "\Beta\Microsoft\Graph\Model\WorkbookDocumentTaskSchedule") || is_null($this->_propDict["startAndDueDateTime"])) {
                return $this->_propDict["startAndDueDateTime"];
            } else {
                $this->_propDict["startAndDueDateTime"] = new WorkbookDocumentTaskSchedule($this->_propDict["startAndDueDateTime"]);
                return $this->_propDict["startAndDueDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startAndDueDateTime
    *
    * @param WorkbookDocumentTaskSchedule $val The startAndDueDateTime
    *
    * @return WorkbookDocumentTask
    */
    public function setStartAndDueDateTime($val)
    {
        $this->_propDict["startAndDueDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the title
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
    *
    * @param string $val The title
    *
    * @return WorkbookDocumentTask
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }


     /**
     * Gets the changes
     *
     * @return array|null The changes
     */
    public function getChanges()
    {
        if (array_key_exists("changes", $this->_propDict)) {
           return $this->_propDict["changes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the changes
    *
    * @param WorkbookDocumentTaskChange[] $val The changes
    *
    * @return WorkbookDocumentTask
    */
    public function setChanges($val)
    {
        $this->_propDict["changes"] = $val;
        return $this;
    }

    /**
    * Gets the comment
    *
    * @return WorkbookComment|null The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            if (is_a($this->_propDict["comment"], "\Beta\Microsoft\Graph\Model\WorkbookComment") || is_null($this->_propDict["comment"])) {
                return $this->_propDict["comment"];
            } else {
                $this->_propDict["comment"] = new WorkbookComment($this->_propDict["comment"]);
                return $this->_propDict["comment"];
            }
        }
        return null;
    }

    /**
    * Sets the comment
    *
    * @param WorkbookComment $val The comment
    *
    * @return WorkbookDocumentTask
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }

}

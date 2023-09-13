<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookComment File
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
* WorkbookComment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookComment extends Entity
{
    /**
    * Gets the content
    * The content of the comment.
    *
    * @return string|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * The content of the comment.
    *
    * @param string $val The content
    *
    * @return WorkbookComment
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the contentType
    * Indicates the type for the comment.
    *
    * @return string|null The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentType
    * Indicates the type for the comment.
    *
    * @param string $val The contentType
    *
    * @return WorkbookComment
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }


     /**
     * Gets the replies
     *
     * @return array|null The replies
     */
    public function getReplies()
    {
        if (array_key_exists("replies", $this->_propDict)) {
           return $this->_propDict["replies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replies
    *
    * @param WorkbookCommentReply[] $val The replies
    *
    * @return WorkbookComment
    */
    public function setReplies($val)
    {
        $this->_propDict["replies"] = $val;
        return $this;
    }

    /**
    * Gets the task
    * The task associated with the comment. Read-only. Nullable.
    *
    * @return WorkbookDocumentTask|null The task
    */
    public function getTask()
    {
        if (array_key_exists("task", $this->_propDict)) {
            if (is_a($this->_propDict["task"], "\Beta\Microsoft\Graph\Model\WorkbookDocumentTask") || is_null($this->_propDict["task"])) {
                return $this->_propDict["task"];
            } else {
                $this->_propDict["task"] = new WorkbookDocumentTask($this->_propDict["task"]);
                return $this->_propDict["task"];
            }
        }
        return null;
    }

    /**
    * Sets the task
    * The task associated with the comment. Read-only. Nullable.
    *
    * @param WorkbookDocumentTask $val The task
    *
    * @return WorkbookComment
    */
    public function setTask($val)
    {
        $this->_propDict["task"] = $val;
        return $this;
    }

}

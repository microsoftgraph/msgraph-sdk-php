<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookComment File
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
* WorkbookComment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WorkbookComment extends Entity
{
    /**
    * Gets the content
    *
    * @return string The content
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
    *
    * @return string The contentType
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
     * @return array The replies
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
    * @param WorkbookCommentReply $val The replies
    *
    * @return WorkbookComment
    */
    public function setReplies($val)
    {
		$this->_propDict["replies"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessage File
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
* ChatMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ChatMessage extends Entity
{
    /**
    * Gets the body
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }
    
    /**
    * Sets the body
    *
    * @param ItemBody $val The body
    *
    * @return ChatMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the inReplyTo
    *
    * @return ChatMessage The inReplyTo
    */
    public function getInReplyTo()
    {
        if (array_key_exists("inReplyTo", $this->_propDict)) {
            if (is_a($this->_propDict["inReplyTo"], "Microsoft\Graph\Model\ChatMessage")) {
                return $this->_propDict["inReplyTo"];
            } else {
                $this->_propDict["inReplyTo"] = new ChatMessage($this->_propDict["inReplyTo"]);
                return $this->_propDict["inReplyTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inReplyTo
    *
    * @param ChatMessage $val The inReplyTo
    *
    * @return ChatMessage
    */
    public function setInReplyTo($val)
    {
        $this->_propDict["inReplyTo"] = $val;
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
    * @param ChatMessage $val The replies
    *
    * @return ChatMessage
    */
    public function setReplies($val)
    {
		$this->_propDict["replies"] = $val;
        return $this;
    }
    
    /**
    * Gets the from
    *
    * @return User The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "Microsoft\Graph\Model\User")) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new User($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }
    
    /**
    * Sets the from
    *
    * @param User $val The from
    *
    * @return ChatMessage
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    
}
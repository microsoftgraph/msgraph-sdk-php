<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatThread File
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
* ChatThread class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ChatThread extends Entity
{

     /** 
     * Gets the chatMessages
     *
     * @return array The chatMessages
     */
    public function getChatMessages()
    {
        if (array_key_exists("chatMessages", $this->_propDict)) {
           return $this->_propDict["chatMessages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the chatMessages
    *
    * @param ChatMessage $val The chatMessages
    *
    * @return ChatThread
    */
    public function setChatMessages($val)
    {
		$this->_propDict["chatMessages"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootMessage
    *
    * @return ChatMessage The rootMessage
    */
    public function getRootMessage()
    {
        if (array_key_exists("rootMessage", $this->_propDict)) {
            if (is_a($this->_propDict["rootMessage"], "Microsoft\Graph\Model\ChatMessage")) {
                return $this->_propDict["rootMessage"];
            } else {
                $this->_propDict["rootMessage"] = new ChatMessage($this->_propDict["rootMessage"]);
                return $this->_propDict["rootMessage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootMessage
    *
    * @param ChatMessage $val The rootMessage
    *
    * @return ChatThread
    */
    public function setRootMessage($val)
    {
        $this->_propDict["rootMessage"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageReaction File
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
* ChatMessageReaction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatMessageReaction extends Entity
{

    /**
    * Gets the type
    *
    * @return ChatMessageReactionType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\ChatMessageReactionType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ChatMessageReactionType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param ChatMessageReactionType $val The value to assign to the type
    *
    * @return ChatMessageReaction The ChatMessageReaction
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
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
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ChatMessageReaction The ChatMessageReaction
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the user
    *
    * @return IdentitySet The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new IdentitySet($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    *
    * @param IdentitySet $val The value to assign to the user
    *
    * @return ChatMessageReaction The ChatMessageReaction
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }
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
    * @param string $val The value of the content
    *
    * @return ChatMessageReaction
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
}

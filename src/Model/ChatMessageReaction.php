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
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ChatMessageReaction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageReaction extends Entity
{
    /**
    * Gets the reactionType
    *
    * @return string The reactionType
    */
    public function getReactionType()
    {
        if (array_key_exists("reactionType", $this->_propDict)) {
            return $this->_propDict["reactionType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reactionType
    *
    * @param string $val The value of the reactionType
    *
    * @return ChatMessageReaction
    */
    public function setReactionType($val)
    {
        $this->_propDict["reactionType"] = $val;
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
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
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
            if (is_a($this->_propDict["user"], "Microsoft\Graph\Model\IdentitySet")) {
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
}

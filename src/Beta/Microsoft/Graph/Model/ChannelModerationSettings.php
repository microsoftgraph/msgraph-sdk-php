<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChannelModerationSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ChannelModerationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChannelModerationSettings extends Entity
{
    /**
    * Gets the allowNewMessageFromBots
    *
    * @return bool The allowNewMessageFromBots
    */
    public function getAllowNewMessageFromBots()
    {
        if (array_key_exists("allowNewMessageFromBots", $this->_propDict)) {
            return $this->_propDict["allowNewMessageFromBots"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowNewMessageFromBots
    *
    * @param bool $val The value of the allowNewMessageFromBots
    *
    * @return ChannelModerationSettings
    */
    public function setAllowNewMessageFromBots($val)
    {
        $this->_propDict["allowNewMessageFromBots"] = $val;
        return $this;
    }
    /**
    * Gets the allowNewMessageFromConnectors
    *
    * @return bool The allowNewMessageFromConnectors
    */
    public function getAllowNewMessageFromConnectors()
    {
        if (array_key_exists("allowNewMessageFromConnectors", $this->_propDict)) {
            return $this->_propDict["allowNewMessageFromConnectors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowNewMessageFromConnectors
    *
    * @param bool $val The value of the allowNewMessageFromConnectors
    *
    * @return ChannelModerationSettings
    */
    public function setAllowNewMessageFromConnectors($val)
    {
        $this->_propDict["allowNewMessageFromConnectors"] = $val;
        return $this;
    }

    /**
    * Gets the replyRestriction
    *
    * @return ReplyRestriction The replyRestriction
    */
    public function getReplyRestriction()
    {
        if (array_key_exists("replyRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["replyRestriction"], "Beta\Microsoft\Graph\Model\ReplyRestriction")) {
                return $this->_propDict["replyRestriction"];
            } else {
                $this->_propDict["replyRestriction"] = new ReplyRestriction($this->_propDict["replyRestriction"]);
                return $this->_propDict["replyRestriction"];
            }
        }
        return null;
    }

    /**
    * Sets the replyRestriction
    *
    * @param ReplyRestriction $val The value to assign to the replyRestriction
    *
    * @return ChannelModerationSettings The ChannelModerationSettings
    */
    public function setReplyRestriction($val)
    {
        $this->_propDict["replyRestriction"] = $val;
         return $this;
    }

    /**
    * Gets the userNewMessageRestriction
    *
    * @return UserNewMessageRestriction The userNewMessageRestriction
    */
    public function getUserNewMessageRestriction()
    {
        if (array_key_exists("userNewMessageRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["userNewMessageRestriction"], "Beta\Microsoft\Graph\Model\UserNewMessageRestriction")) {
                return $this->_propDict["userNewMessageRestriction"];
            } else {
                $this->_propDict["userNewMessageRestriction"] = new UserNewMessageRestriction($this->_propDict["userNewMessageRestriction"]);
                return $this->_propDict["userNewMessageRestriction"];
            }
        }
        return null;
    }

    /**
    * Sets the userNewMessageRestriction
    *
    * @param UserNewMessageRestriction $val The value to assign to the userNewMessageRestriction
    *
    * @return ChannelModerationSettings The ChannelModerationSettings
    */
    public function setUserNewMessageRestriction($val)
    {
        $this->_propDict["userNewMessageRestriction"] = $val;
         return $this;
    }
}

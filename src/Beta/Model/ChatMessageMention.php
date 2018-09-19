<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageMention File
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
* ChatMessageMention class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatMessageMention extends Entity
{

    /**
    * Gets the type
    *
    * @return ChatMessageMentionType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\ChatMessageMentionType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ChatMessageMentionType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param ChatMessageMentionType $val The value to assign to the type
    *
    * @return ChatMessageMention The ChatMessageMention
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return ChatMessageMention
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the mentionText
    *
    * @return string The mentionText
    */
    public function getMentionText()
    {
        if (array_key_exists("mentionText", $this->_propDict)) {
            return $this->_propDict["mentionText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mentionText
    *
    * @param string $val The value of the mentionText
    *
    * @return ChatMessageMention
    */
    public function setMentionText($val)
    {
        $this->_propDict["mentionText"] = $val;
        return $this;
    }
}

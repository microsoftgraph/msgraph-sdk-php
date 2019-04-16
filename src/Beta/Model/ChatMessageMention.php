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
    * Gets the id
    *
    * @return int The id
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
    * @param int $val The value of the id
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

    /**
    * Gets the mentioned
    *
    * @return IdentitySet The mentioned
    */
    public function getMentioned()
    {
        if (array_key_exists("mentioned", $this->_propDict)) {
            if (is_a($this->_propDict["mentioned"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["mentioned"];
            } else {
                $this->_propDict["mentioned"] = new IdentitySet($this->_propDict["mentioned"]);
                return $this->_propDict["mentioned"];
            }
        }
        return null;
    }

    /**
    * Sets the mentioned
    *
    * @param IdentitySet $val The value to assign to the mentioned
    *
    * @return ChatMessageMention The ChatMessageMention
    */
    public function setMentioned($val)
    {
        $this->_propDict["mentioned"] = $val;
         return $this;
    }
}

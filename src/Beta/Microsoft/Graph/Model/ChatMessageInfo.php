<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageInfo File
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
* ChatMessageInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageInfo extends Entity
{
    /**
    * Gets the body
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["body"])) {
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
    * @return ChatMessageInfo
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
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
    * @return ChatMessageInfo
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the from
    *
    * @return ChatMessageFromIdentitySet|null The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "\Beta\Microsoft\Graph\Model\ChatMessageFromIdentitySet") || is_null($this->_propDict["from"])) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new ChatMessageFromIdentitySet($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }
    
    /**
    * Sets the from
    *
    * @param ChatMessageFromIdentitySet $val The from
    *
    * @return ChatMessageInfo
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool|null The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return ChatMessageInfo
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
}

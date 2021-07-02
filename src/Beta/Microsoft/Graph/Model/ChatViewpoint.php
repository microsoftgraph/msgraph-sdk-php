<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatViewpoint File
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
* ChatViewpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatViewpoint extends Entity
{

    /**
    * Gets the lastMessageReadDateTime
    *
    * @return \DateTime|null The lastMessageReadDateTime
    */
    public function getLastMessageReadDateTime()
    {
        if (array_key_exists("lastMessageReadDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastMessageReadDateTime"], "\DateTime") || is_null($this->_propDict["lastMessageReadDateTime"])) {
                return $this->_propDict["lastMessageReadDateTime"];
            } else {
                $this->_propDict["lastMessageReadDateTime"] = new \DateTime($this->_propDict["lastMessageReadDateTime"]);
                return $this->_propDict["lastMessageReadDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastMessageReadDateTime
    *
    * @param \DateTime $val The value to assign to the lastMessageReadDateTime
    *
    * @return ChatViewpoint The ChatViewpoint
    */
    public function setLastMessageReadDateTime($val)
    {
        $this->_propDict["lastMessageReadDateTime"] = $val;
         return $this;
    }
}

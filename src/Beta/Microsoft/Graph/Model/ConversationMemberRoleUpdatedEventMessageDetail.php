<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConversationMemberRoleUpdatedEventMessageDetail File
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
* ConversationMemberRoleUpdatedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConversationMemberRoleUpdatedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.conversationMemberRoleUpdatedEventMessageDetail");
    }

    /**
    * Gets the conversationMemberId
    *
    * @return string|null The conversationMemberId
    */
    public function getConversationMemberId()
    {
        if (array_key_exists("conversationMemberId", $this->_propDict)) {
            return $this->_propDict["conversationMemberId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conversationMemberId
    *
    * @param string $val The value of the conversationMemberId
    *
    * @return ConversationMemberRoleUpdatedEventMessageDetail
    */
    public function setConversationMemberId($val)
    {
        $this->_propDict["conversationMemberId"] = $val;
        return $this;
    }
    /**
    * Gets the conversationMemberRoles
    *
    * @return string|null The conversationMemberRoles
    */
    public function getConversationMemberRoles()
    {
        if (array_key_exists("conversationMemberRoles", $this->_propDict)) {
            return $this->_propDict["conversationMemberRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conversationMemberRoles
    *
    * @param string $val The value of the conversationMemberRoles
    *
    * @return ConversationMemberRoleUpdatedEventMessageDetail
    */
    public function setConversationMemberRoles($val)
    {
        $this->_propDict["conversationMemberRoles"] = $val;
        return $this;
    }

    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict)) {
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["initiator"])) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            }
        }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return ConversationMemberRoleUpdatedEventMessageDetail The ConversationMemberRoleUpdatedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
}

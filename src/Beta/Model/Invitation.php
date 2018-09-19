<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Invitation File
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
* Invitation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Invitation extends Entity
{
    /**
    * Gets the invitedUserDisplayName
    *
    * @return string The invitedUserDisplayName
    */
    public function getInvitedUserDisplayName()
    {
        if (array_key_exists("invitedUserDisplayName", $this->_propDict)) {
            return $this->_propDict["invitedUserDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invitedUserDisplayName
    *
    * @param string $val The invitedUserDisplayName
    *
    * @return Invitation
    */
    public function setInvitedUserDisplayName($val)
    {
        $this->_propDict["invitedUserDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitedUserType
    *
    * @return string The invitedUserType
    */
    public function getInvitedUserType()
    {
        if (array_key_exists("invitedUserType", $this->_propDict)) {
            return $this->_propDict["invitedUserType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invitedUserType
    *
    * @param string $val The invitedUserType
    *
    * @return Invitation
    */
    public function setInvitedUserType($val)
    {
        $this->_propDict["invitedUserType"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitedUserEmailAddress
    *
    * @return string The invitedUserEmailAddress
    */
    public function getInvitedUserEmailAddress()
    {
        if (array_key_exists("invitedUserEmailAddress", $this->_propDict)) {
            return $this->_propDict["invitedUserEmailAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the invitedUserEmailAddress
    *
    * @param string $val The invitedUserEmailAddress
    *
    * @return Invitation
    */
    public function setInvitedUserEmailAddress($val)
    {
        $this->_propDict["invitedUserEmailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitedUserMessageInfo
    *
    * @return InvitedUserMessageInfo The invitedUserMessageInfo
    */
    public function getInvitedUserMessageInfo()
    {
        if (array_key_exists("invitedUserMessageInfo", $this->_propDict)) {
            if (is_a($this->_propDict["invitedUserMessageInfo"], "Microsoft\Graph\Beta\Model\InvitedUserMessageInfo")) {
                return $this->_propDict["invitedUserMessageInfo"];
            } else {
                $this->_propDict["invitedUserMessageInfo"] = new InvitedUserMessageInfo($this->_propDict["invitedUserMessageInfo"]);
                return $this->_propDict["invitedUserMessageInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invitedUserMessageInfo
    *
    * @param InvitedUserMessageInfo $val The invitedUserMessageInfo
    *
    * @return Invitation
    */
    public function setInvitedUserMessageInfo($val)
    {
        $this->_propDict["invitedUserMessageInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the sendInvitationMessage
    *
    * @return bool The sendInvitationMessage
    */
    public function getSendInvitationMessage()
    {
        if (array_key_exists("sendInvitationMessage", $this->_propDict)) {
            return $this->_propDict["sendInvitationMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sendInvitationMessage
    *
    * @param bool $val The sendInvitationMessage
    *
    * @return Invitation
    */
    public function setSendInvitationMessage($val)
    {
        $this->_propDict["sendInvitationMessage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the inviteRedirectUrl
    *
    * @return string The inviteRedirectUrl
    */
    public function getInviteRedirectUrl()
    {
        if (array_key_exists("inviteRedirectUrl", $this->_propDict)) {
            return $this->_propDict["inviteRedirectUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inviteRedirectUrl
    *
    * @param string $val The inviteRedirectUrl
    *
    * @return Invitation
    */
    public function setInviteRedirectUrl($val)
    {
        $this->_propDict["inviteRedirectUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the inviteRedeemUrl
    *
    * @return string The inviteRedeemUrl
    */
    public function getInviteRedeemUrl()
    {
        if (array_key_exists("inviteRedeemUrl", $this->_propDict)) {
            return $this->_propDict["inviteRedeemUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inviteRedeemUrl
    *
    * @param string $val The inviteRedeemUrl
    *
    * @return Invitation
    */
    public function setInviteRedeemUrl($val)
    {
        $this->_propDict["inviteRedeemUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return Invitation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the invitedUser
    *
    * @return User The invitedUser
    */
    public function getInvitedUser()
    {
        if (array_key_exists("invitedUser", $this->_propDict)) {
            if (is_a($this->_propDict["invitedUser"], "Microsoft\Graph\Beta\Model\User")) {
                return $this->_propDict["invitedUser"];
            } else {
                $this->_propDict["invitedUser"] = new User($this->_propDict["invitedUser"]);
                return $this->_propDict["invitedUser"];
            }
        }
        return null;
    }
    
    /**
    * Sets the invitedUser
    *
    * @param User $val The invitedUser
    *
    * @return Invitation
    */
    public function setInvitedUser($val)
    {
        $this->_propDict["invitedUser"] = $val;
        return $this;
    }
    
}
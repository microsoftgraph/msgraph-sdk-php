<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailTips File
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
* MailTips class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MailTips extends Entity
{

    /**
    * Gets the emailAddress
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "Microsoft\Graph\Beta\Model\EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }

    /**
    * Sets the emailAddress
    *
    * @param EmailAddress $val The value to assign to the emailAddress
    *
    * @return MailTips The MailTips
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
         return $this;
    }

    /**
    * Gets the automaticReplies
    *
    * @return AutomaticRepliesMailTips The automaticReplies
    */
    public function getAutomaticReplies()
    {
        if (array_key_exists("automaticReplies", $this->_propDict)) {
            if (is_a($this->_propDict["automaticReplies"], "Microsoft\Graph\Beta\Model\AutomaticRepliesMailTips")) {
                return $this->_propDict["automaticReplies"];
            } else {
                $this->_propDict["automaticReplies"] = new AutomaticRepliesMailTips($this->_propDict["automaticReplies"]);
                return $this->_propDict["automaticReplies"];
            }
        }
        return null;
    }

    /**
    * Sets the automaticReplies
    *
    * @param AutomaticRepliesMailTips $val The value to assign to the automaticReplies
    *
    * @return MailTips The MailTips
    */
    public function setAutomaticReplies($val)
    {
        $this->_propDict["automaticReplies"] = $val;
         return $this;
    }
    /**
    * Gets the mailboxFull
    *
    * @return bool The mailboxFull
    */
    public function getMailboxFull()
    {
        if (array_key_exists("mailboxFull", $this->_propDict)) {
            return $this->_propDict["mailboxFull"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailboxFull
    *
    * @param bool $val The value of the mailboxFull
    *
    * @return MailTips
    */
    public function setMailboxFull($val)
    {
        $this->_propDict["mailboxFull"] = $val;
        return $this;
    }
    /**
    * Gets the customMailTip
    *
    * @return string The customMailTip
    */
    public function getCustomMailTip()
    {
        if (array_key_exists("customMailTip", $this->_propDict)) {
            return $this->_propDict["customMailTip"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customMailTip
    *
    * @param string $val The value of the customMailTip
    *
    * @return MailTips
    */
    public function setCustomMailTip($val)
    {
        $this->_propDict["customMailTip"] = $val;
        return $this;
    }
    /**
    * Gets the externalMemberCount
    *
    * @return int The externalMemberCount
    */
    public function getExternalMemberCount()
    {
        if (array_key_exists("externalMemberCount", $this->_propDict)) {
            return $this->_propDict["externalMemberCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalMemberCount
    *
    * @param int $val The value of the externalMemberCount
    *
    * @return MailTips
    */
    public function setExternalMemberCount($val)
    {
        $this->_propDict["externalMemberCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalMemberCount
    *
    * @return int The totalMemberCount
    */
    public function getTotalMemberCount()
    {
        if (array_key_exists("totalMemberCount", $this->_propDict)) {
            return $this->_propDict["totalMemberCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalMemberCount
    *
    * @param int $val The value of the totalMemberCount
    *
    * @return MailTips
    */
    public function setTotalMemberCount($val)
    {
        $this->_propDict["totalMemberCount"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryRestricted
    *
    * @return bool The deliveryRestricted
    */
    public function getDeliveryRestricted()
    {
        if (array_key_exists("deliveryRestricted", $this->_propDict)) {
            return $this->_propDict["deliveryRestricted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryRestricted
    *
    * @param bool $val The value of the deliveryRestricted
    *
    * @return MailTips
    */
    public function setDeliveryRestricted($val)
    {
        $this->_propDict["deliveryRestricted"] = $val;
        return $this;
    }
    /**
    * Gets the isModerated
    *
    * @return bool The isModerated
    */
    public function getIsModerated()
    {
        if (array_key_exists("isModerated", $this->_propDict)) {
            return $this->_propDict["isModerated"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isModerated
    *
    * @param bool $val The value of the isModerated
    *
    * @return MailTips
    */
    public function setIsModerated($val)
    {
        $this->_propDict["isModerated"] = $val;
        return $this;
    }

    /**
    * Gets the recipientScope
    *
    * @return RecipientScopeType The recipientScope
    */
    public function getRecipientScope()
    {
        if (array_key_exists("recipientScope", $this->_propDict)) {
            if (is_a($this->_propDict["recipientScope"], "Microsoft\Graph\Beta\Model\RecipientScopeType")) {
                return $this->_propDict["recipientScope"];
            } else {
                $this->_propDict["recipientScope"] = new RecipientScopeType($this->_propDict["recipientScope"]);
                return $this->_propDict["recipientScope"];
            }
        }
        return null;
    }

    /**
    * Sets the recipientScope
    *
    * @param RecipientScopeType $val The value to assign to the recipientScope
    *
    * @return MailTips The MailTips
    */
    public function setRecipientScope($val)
    {
        $this->_propDict["recipientScope"] = $val;
         return $this;
    }

    /**
    * Gets the recipientSuggestions
    *
    * @return Recipient The recipientSuggestions
    */
    public function getRecipientSuggestions()
    {
        if (array_key_exists("recipientSuggestions", $this->_propDict)) {
            if (is_a($this->_propDict["recipientSuggestions"], "Microsoft\Graph\Beta\Model\Recipient")) {
                return $this->_propDict["recipientSuggestions"];
            } else {
                $this->_propDict["recipientSuggestions"] = new Recipient($this->_propDict["recipientSuggestions"]);
                return $this->_propDict["recipientSuggestions"];
            }
        }
        return null;
    }

    /**
    * Sets the recipientSuggestions
    *
    * @param Recipient $val The value to assign to the recipientSuggestions
    *
    * @return MailTips The MailTips
    */
    public function setRecipientSuggestions($val)
    {
        $this->_propDict["recipientSuggestions"] = $val;
         return $this;
    }
    /**
    * Gets the maxMessageSize
    *
    * @return int The maxMessageSize
    */
    public function getMaxMessageSize()
    {
        if (array_key_exists("maxMessageSize", $this->_propDict)) {
            return $this->_propDict["maxMessageSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxMessageSize
    *
    * @param int $val The value of the maxMessageSize
    *
    * @return MailTips
    */
    public function setMaxMessageSize($val)
    {
        $this->_propDict["maxMessageSize"] = $val;
        return $this;
    }

    /**
    * Gets the error
    *
    * @return MailTipsError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Microsoft\Graph\Beta\Model\MailTipsError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new MailTipsError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param MailTipsError $val The value to assign to the error
    *
    * @return MailTips The MailTips
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
}

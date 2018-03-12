<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRulePredicates File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* MessageRulePredicates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MessageRulePredicates extends Entity
{
    /**
    * Gets the categories
    *
    * @return string The categories
    */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
            return $this->_propDict["categories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the categories
    *
    * @param string $val The value of the categories
    *
    * @return MessageRulePredicates
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    /**
    * Gets the subjectContains
    *
    * @return string The subjectContains
    */
    public function getSubjectContains()
    {
        if (array_key_exists("subjectContains", $this->_propDict)) {
            return $this->_propDict["subjectContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectContains
    *
    * @param string $val The value of the subjectContains
    *
    * @return MessageRulePredicates
    */
    public function setSubjectContains($val)
    {
        $this->_propDict["subjectContains"] = $val;
        return $this;
    }
    /**
    * Gets the bodyContains
    *
    * @return string The bodyContains
    */
    public function getBodyContains()
    {
        if (array_key_exists("bodyContains", $this->_propDict)) {
            return $this->_propDict["bodyContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bodyContains
    *
    * @param string $val The value of the bodyContains
    *
    * @return MessageRulePredicates
    */
    public function setBodyContains($val)
    {
        $this->_propDict["bodyContains"] = $val;
        return $this;
    }
    /**
    * Gets the bodyOrSubjectContains
    *
    * @return string The bodyOrSubjectContains
    */
    public function getBodyOrSubjectContains()
    {
        if (array_key_exists("bodyOrSubjectContains", $this->_propDict)) {
            return $this->_propDict["bodyOrSubjectContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bodyOrSubjectContains
    *
    * @param string $val The value of the bodyOrSubjectContains
    *
    * @return MessageRulePredicates
    */
    public function setBodyOrSubjectContains($val)
    {
        $this->_propDict["bodyOrSubjectContains"] = $val;
        return $this;
    }
    /**
    * Gets the senderContains
    *
    * @return string The senderContains
    */
    public function getSenderContains()
    {
        if (array_key_exists("senderContains", $this->_propDict)) {
            return $this->_propDict["senderContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the senderContains
    *
    * @param string $val The value of the senderContains
    *
    * @return MessageRulePredicates
    */
    public function setSenderContains($val)
    {
        $this->_propDict["senderContains"] = $val;
        return $this;
    }
    /**
    * Gets the recipientContains
    *
    * @return string The recipientContains
    */
    public function getRecipientContains()
    {
        if (array_key_exists("recipientContains", $this->_propDict)) {
            return $this->_propDict["recipientContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipientContains
    *
    * @param string $val The value of the recipientContains
    *
    * @return MessageRulePredicates
    */
    public function setRecipientContains($val)
    {
        $this->_propDict["recipientContains"] = $val;
        return $this;
    }
    /**
    * Gets the headerContains
    *
    * @return string The headerContains
    */
    public function getHeaderContains()
    {
        if (array_key_exists("headerContains", $this->_propDict)) {
            return $this->_propDict["headerContains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the headerContains
    *
    * @param string $val The value of the headerContains
    *
    * @return MessageRulePredicates
    */
    public function setHeaderContains($val)
    {
        $this->_propDict["headerContains"] = $val;
        return $this;
    }

    /**
    * Gets the messageActionFlag
    *
    * @return MessageActionFlag The messageActionFlag
    */
    public function getMessageActionFlag()
    {
        if (array_key_exists("messageActionFlag", $this->_propDict)) {
            if (is_a($this->_propDict["messageActionFlag"], "Microsoft\Graph\Model\MessageActionFlag")) {
                return $this->_propDict["messageActionFlag"];
            } else {
                $this->_propDict["messageActionFlag"] = new MessageActionFlag($this->_propDict["messageActionFlag"]);
                return $this->_propDict["messageActionFlag"];
            }
        }
        return null;
    }

    /**
    * Sets the messageActionFlag
    *
    * @param MessageActionFlag $val The value to assign to the messageActionFlag
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setMessageActionFlag($val)
    {
        $this->_propDict["messageActionFlag"] = $val;
         return $this;
    }

    /**
    * Gets the importance
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    *
    * @param Importance $val The value to assign to the importance
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
         return $this;
    }

    /**
    * Gets the sensitivity
    *
    * @return Sensitivity The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivity"], "Microsoft\Graph\Model\Sensitivity")) {
                return $this->_propDict["sensitivity"];
            } else {
                $this->_propDict["sensitivity"] = new Sensitivity($this->_propDict["sensitivity"]);
                return $this->_propDict["sensitivity"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivity
    *
    * @param Sensitivity $val The value to assign to the sensitivity
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = $val;
         return $this;
    }

    /**
    * Gets the fromAddresses
    *
    * @return Recipient The fromAddresses
    */
    public function getFromAddresses()
    {
        if (array_key_exists("fromAddresses", $this->_propDict)) {
            if (is_a($this->_propDict["fromAddresses"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["fromAddresses"];
            } else {
                $this->_propDict["fromAddresses"] = new Recipient($this->_propDict["fromAddresses"]);
                return $this->_propDict["fromAddresses"];
            }
        }
        return null;
    }

    /**
    * Sets the fromAddresses
    *
    * @param Recipient $val The value to assign to the fromAddresses
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setFromAddresses($val)
    {
        $this->_propDict["fromAddresses"] = $val;
         return $this;
    }

    /**
    * Gets the sentToAddresses
    *
    * @return Recipient The sentToAddresses
    */
    public function getSentToAddresses()
    {
        if (array_key_exists("sentToAddresses", $this->_propDict)) {
            if (is_a($this->_propDict["sentToAddresses"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["sentToAddresses"];
            } else {
                $this->_propDict["sentToAddresses"] = new Recipient($this->_propDict["sentToAddresses"]);
                return $this->_propDict["sentToAddresses"];
            }
        }
        return null;
    }

    /**
    * Sets the sentToAddresses
    *
    * @param Recipient $val The value to assign to the sentToAddresses
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setSentToAddresses($val)
    {
        $this->_propDict["sentToAddresses"] = $val;
         return $this;
    }
    /**
    * Gets the sentToMe
    *
    * @return bool The sentToMe
    */
    public function getSentToMe()
    {
        if (array_key_exists("sentToMe", $this->_propDict)) {
            return $this->_propDict["sentToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentToMe
    *
    * @param bool $val The value of the sentToMe
    *
    * @return MessageRulePredicates
    */
    public function setSentToMe($val)
    {
        $this->_propDict["sentToMe"] = $val;
        return $this;
    }
    /**
    * Gets the sentOnlyToMe
    *
    * @return bool The sentOnlyToMe
    */
    public function getSentOnlyToMe()
    {
        if (array_key_exists("sentOnlyToMe", $this->_propDict)) {
            return $this->_propDict["sentOnlyToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentOnlyToMe
    *
    * @param bool $val The value of the sentOnlyToMe
    *
    * @return MessageRulePredicates
    */
    public function setSentOnlyToMe($val)
    {
        $this->_propDict["sentOnlyToMe"] = $val;
        return $this;
    }
    /**
    * Gets the sentCcMe
    *
    * @return bool The sentCcMe
    */
    public function getSentCcMe()
    {
        if (array_key_exists("sentCcMe", $this->_propDict)) {
            return $this->_propDict["sentCcMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentCcMe
    *
    * @param bool $val The value of the sentCcMe
    *
    * @return MessageRulePredicates
    */
    public function setSentCcMe($val)
    {
        $this->_propDict["sentCcMe"] = $val;
        return $this;
    }
    /**
    * Gets the sentToOrCcMe
    *
    * @return bool The sentToOrCcMe
    */
    public function getSentToOrCcMe()
    {
        if (array_key_exists("sentToOrCcMe", $this->_propDict)) {
            return $this->_propDict["sentToOrCcMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentToOrCcMe
    *
    * @param bool $val The value of the sentToOrCcMe
    *
    * @return MessageRulePredicates
    */
    public function setSentToOrCcMe($val)
    {
        $this->_propDict["sentToOrCcMe"] = $val;
        return $this;
    }
    /**
    * Gets the notSentToMe
    *
    * @return bool The notSentToMe
    */
    public function getNotSentToMe()
    {
        if (array_key_exists("notSentToMe", $this->_propDict)) {
            return $this->_propDict["notSentToMe"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notSentToMe
    *
    * @param bool $val The value of the notSentToMe
    *
    * @return MessageRulePredicates
    */
    public function setNotSentToMe($val)
    {
        $this->_propDict["notSentToMe"] = $val;
        return $this;
    }
    /**
    * Gets the hasAttachments
    *
    * @return bool The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasAttachments
    *
    * @param bool $val The value of the hasAttachments
    *
    * @return MessageRulePredicates
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequest
    *
    * @return bool The isApprovalRequest
    */
    public function getIsApprovalRequest()
    {
        if (array_key_exists("isApprovalRequest", $this->_propDict)) {
            return $this->_propDict["isApprovalRequest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequest
    *
    * @param bool $val The value of the isApprovalRequest
    *
    * @return MessageRulePredicates
    */
    public function setIsApprovalRequest($val)
    {
        $this->_propDict["isApprovalRequest"] = $val;
        return $this;
    }
    /**
    * Gets the isAutomaticForward
    *
    * @return bool The isAutomaticForward
    */
    public function getIsAutomaticForward()
    {
        if (array_key_exists("isAutomaticForward", $this->_propDict)) {
            return $this->_propDict["isAutomaticForward"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomaticForward
    *
    * @param bool $val The value of the isAutomaticForward
    *
    * @return MessageRulePredicates
    */
    public function setIsAutomaticForward($val)
    {
        $this->_propDict["isAutomaticForward"] = $val;
        return $this;
    }
    /**
    * Gets the isAutomaticReply
    *
    * @return bool The isAutomaticReply
    */
    public function getIsAutomaticReply()
    {
        if (array_key_exists("isAutomaticReply", $this->_propDict)) {
            return $this->_propDict["isAutomaticReply"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAutomaticReply
    *
    * @param bool $val The value of the isAutomaticReply
    *
    * @return MessageRulePredicates
    */
    public function setIsAutomaticReply($val)
    {
        $this->_propDict["isAutomaticReply"] = $val;
        return $this;
    }
    /**
    * Gets the isEncrypted
    *
    * @return bool The isEncrypted
    */
    public function getIsEncrypted()
    {
        if (array_key_exists("isEncrypted", $this->_propDict)) {
            return $this->_propDict["isEncrypted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEncrypted
    *
    * @param bool $val The value of the isEncrypted
    *
    * @return MessageRulePredicates
    */
    public function setIsEncrypted($val)
    {
        $this->_propDict["isEncrypted"] = $val;
        return $this;
    }
    /**
    * Gets the isMeetingRequest
    *
    * @return bool The isMeetingRequest
    */
    public function getIsMeetingRequest()
    {
        if (array_key_exists("isMeetingRequest", $this->_propDict)) {
            return $this->_propDict["isMeetingRequest"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMeetingRequest
    *
    * @param bool $val The value of the isMeetingRequest
    *
    * @return MessageRulePredicates
    */
    public function setIsMeetingRequest($val)
    {
        $this->_propDict["isMeetingRequest"] = $val;
        return $this;
    }
    /**
    * Gets the isMeetingResponse
    *
    * @return bool The isMeetingResponse
    */
    public function getIsMeetingResponse()
    {
        if (array_key_exists("isMeetingResponse", $this->_propDict)) {
            return $this->_propDict["isMeetingResponse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMeetingResponse
    *
    * @param bool $val The value of the isMeetingResponse
    *
    * @return MessageRulePredicates
    */
    public function setIsMeetingResponse($val)
    {
        $this->_propDict["isMeetingResponse"] = $val;
        return $this;
    }
    /**
    * Gets the isNonDeliveryReport
    *
    * @return bool The isNonDeliveryReport
    */
    public function getIsNonDeliveryReport()
    {
        if (array_key_exists("isNonDeliveryReport", $this->_propDict)) {
            return $this->_propDict["isNonDeliveryReport"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isNonDeliveryReport
    *
    * @param bool $val The value of the isNonDeliveryReport
    *
    * @return MessageRulePredicates
    */
    public function setIsNonDeliveryReport($val)
    {
        $this->_propDict["isNonDeliveryReport"] = $val;
        return $this;
    }
    /**
    * Gets the isPermissionControlled
    *
    * @return bool The isPermissionControlled
    */
    public function getIsPermissionControlled()
    {
        if (array_key_exists("isPermissionControlled", $this->_propDict)) {
            return $this->_propDict["isPermissionControlled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPermissionControlled
    *
    * @param bool $val The value of the isPermissionControlled
    *
    * @return MessageRulePredicates
    */
    public function setIsPermissionControlled($val)
    {
        $this->_propDict["isPermissionControlled"] = $val;
        return $this;
    }
    /**
    * Gets the isReadReceipt
    *
    * @return bool The isReadReceipt
    */
    public function getIsReadReceipt()
    {
        if (array_key_exists("isReadReceipt", $this->_propDict)) {
            return $this->_propDict["isReadReceipt"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isReadReceipt
    *
    * @param bool $val The value of the isReadReceipt
    *
    * @return MessageRulePredicates
    */
    public function setIsReadReceipt($val)
    {
        $this->_propDict["isReadReceipt"] = $val;
        return $this;
    }
    /**
    * Gets the isSigned
    *
    * @return bool The isSigned
    */
    public function getIsSigned()
    {
        if (array_key_exists("isSigned", $this->_propDict)) {
            return $this->_propDict["isSigned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSigned
    *
    * @param bool $val The value of the isSigned
    *
    * @return MessageRulePredicates
    */
    public function setIsSigned($val)
    {
        $this->_propDict["isSigned"] = $val;
        return $this;
    }
    /**
    * Gets the isVoicemail
    *
    * @return bool The isVoicemail
    */
    public function getIsVoicemail()
    {
        if (array_key_exists("isVoicemail", $this->_propDict)) {
            return $this->_propDict["isVoicemail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVoicemail
    *
    * @param bool $val The value of the isVoicemail
    *
    * @return MessageRulePredicates
    */
    public function setIsVoicemail($val)
    {
        $this->_propDict["isVoicemail"] = $val;
        return $this;
    }

    /**
    * Gets the withinSizeRange
    *
    * @return SizeRange The withinSizeRange
    */
    public function getWithinSizeRange()
    {
        if (array_key_exists("withinSizeRange", $this->_propDict)) {
            if (is_a($this->_propDict["withinSizeRange"], "Microsoft\Graph\Model\SizeRange")) {
                return $this->_propDict["withinSizeRange"];
            } else {
                $this->_propDict["withinSizeRange"] = new SizeRange($this->_propDict["withinSizeRange"]);
                return $this->_propDict["withinSizeRange"];
            }
        }
        return null;
    }

    /**
    * Sets the withinSizeRange
    *
    * @param SizeRange $val The value to assign to the withinSizeRange
    *
    * @return MessageRulePredicates The MessageRulePredicates
    */
    public function setWithinSizeRange($val)
    {
        $this->_propDict["withinSizeRange"] = $val;
         return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Message File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Message class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Message extends OutlookItem
{
    /**
    * Gets the receivedDateTime
    * The date and time the message was received.
    *
    * @return \DateTime The receivedDateTime
    */
    public function getReceivedDateTime()
    {
        if (array_key_exists("receivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTime"], "\DateTime")) {
                return $this->_propDict["receivedDateTime"];
            } else {
                $this->_propDict["receivedDateTime"] = new \DateTime($this->_propDict["receivedDateTime"]);
                return $this->_propDict["receivedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the receivedDateTime
    * The date and time the message was received.
    *
    * @param \DateTime $val The receivedDateTime
    *
    * @return Message
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the sentDateTime
    * The date and time the message was sent.
    *
    * @return \DateTime The sentDateTime
    */
    public function getSentDateTime()
    {
        if (array_key_exists("sentDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sentDateTime"], "\DateTime")) {
                return $this->_propDict["sentDateTime"];
            } else {
                $this->_propDict["sentDateTime"] = new \DateTime($this->_propDict["sentDateTime"]);
                return $this->_propDict["sentDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sentDateTime
    * The date and time the message was sent.
    *
    * @param \DateTime $val The sentDateTime
    *
    * @return Message
    */
    public function setSentDateTime($val)
    {
        $this->_propDict["sentDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasAttachments
    * Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as &amp;lt;IMG src='cid:image001.jpg@01D26CD8.6C05F070'&amp;gt;.
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
    * Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as &amp;lt;IMG src='cid:image001.jpg@01D26CD8.6C05F070'&amp;gt;.
    *
    * @param bool $val The hasAttachments
    *
    * @return Message
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the internetMessageId
    * The message ID in the format specified by RFC2822.
    *
    * @return string The internetMessageId
    */
    public function getInternetMessageId()
    {
        if (array_key_exists("internetMessageId", $this->_propDict)) {
            return $this->_propDict["internetMessageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the internetMessageId
    * The message ID in the format specified by RFC2822.
    *
    * @param string $val The internetMessageId
    *
    * @return Message
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the internetMessageHeaders
    * A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.
     *
     * @return array The internetMessageHeaders
     */
    public function getInternetMessageHeaders()
    {
        if (array_key_exists("internetMessageHeaders", $this->_propDict)) {
           return $this->_propDict["internetMessageHeaders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the internetMessageHeaders
    * A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.
    *
    * @param InternetMessageHeader $val The internetMessageHeaders
    *
    * @return Message
    */
    public function setInternetMessageHeaders($val)
    {
		$this->_propDict["internetMessageHeaders"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    * The subject of the message.
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    * The subject of the message.
    *
    * @param string $val The subject
    *
    * @return Message
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the body
    * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "Microsoft\Graph\Model\ItemBody")) {
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
    * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
    *
    * @param ItemBody $val The body
    *
    * @return Message
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyPreview
    * The first 255 characters of the message body. It is in text format.
    *
    * @return string The bodyPreview
    */
    public function getBodyPreview()
    {
        if (array_key_exists("bodyPreview", $this->_propDict)) {
            return $this->_propDict["bodyPreview"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bodyPreview
    * The first 255 characters of the message body. It is in text format.
    *
    * @param string $val The bodyPreview
    *
    * @return Message
    */
    public function setBodyPreview($val)
    {
        $this->_propDict["bodyPreview"] = $val;
        return $this;
    }
    
    /**
    * Gets the importance
    * The importance of the message: Low, Normal, High.
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
    * The importance of the message: Low, Normal, High.
    *
    * @param Importance $val The importance
    *
    * @return Message
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentFolderId
    * The unique identifier for the message's parent mailFolder.
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    * The unique identifier for the message's parent mailFolder.
    *
    * @param string $val The parentFolderId
    *
    * @return Message
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the sender
    * The account that is actually used to generate the message. In most cases, this value is the same as the from property. You can set this property to a different value when sending a message from a shared mailbox, or sending a message as a delegate. In any case, the value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @return Recipient The sender
    */
    public function getSender()
    {
        if (array_key_exists("sender", $this->_propDict)) {
            if (is_a($this->_propDict["sender"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["sender"];
            } else {
                $this->_propDict["sender"] = new Recipient($this->_propDict["sender"]);
                return $this->_propDict["sender"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sender
    * The account that is actually used to generate the message. In most cases, this value is the same as the from property. You can set this property to a different value when sending a message from a shared mailbox, or sending a message as a delegate. In any case, the value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @param Recipient $val The sender
    *
    * @return Message
    */
    public function setSender($val)
    {
        $this->_propDict["sender"] = $val;
        return $this;
    }
    
    /**
    * Gets the from
    * The mailbox owner and sender of the message. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @return Recipient The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new Recipient($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }
    
    /**
    * Sets the from
    * The mailbox owner and sender of the message. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
    *
    * @param Recipient $val The from
    *
    * @return Message
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    

     /** 
     * Gets the toRecipients
    * The To: recipients for the message.
     *
     * @return array The toRecipients
     */
    public function getToRecipients()
    {
        if (array_key_exists("toRecipients", $this->_propDict)) {
           return $this->_propDict["toRecipients"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the toRecipients
    * The To: recipients for the message.
    *
    * @param Recipient $val The toRecipients
    *
    * @return Message
    */
    public function setToRecipients($val)
    {
		$this->_propDict["toRecipients"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ccRecipients
    * The Cc: recipients for the message.
     *
     * @return array The ccRecipients
     */
    public function getCcRecipients()
    {
        if (array_key_exists("ccRecipients", $this->_propDict)) {
           return $this->_propDict["ccRecipients"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ccRecipients
    * The Cc: recipients for the message.
    *
    * @param Recipient $val The ccRecipients
    *
    * @return Message
    */
    public function setCcRecipients($val)
    {
		$this->_propDict["ccRecipients"] = $val;
        return $this;
    }
    

     /** 
     * Gets the bccRecipients
    * The Bcc: recipients for the message.
     *
     * @return array The bccRecipients
     */
    public function getBccRecipients()
    {
        if (array_key_exists("bccRecipients", $this->_propDict)) {
           return $this->_propDict["bccRecipients"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the bccRecipients
    * The Bcc: recipients for the message.
    *
    * @param Recipient $val The bccRecipients
    *
    * @return Message
    */
    public function setBccRecipients($val)
    {
		$this->_propDict["bccRecipients"] = $val;
        return $this;
    }
    

     /** 
     * Gets the replyTo
    * The email addresses to use when replying.
     *
     * @return array The replyTo
     */
    public function getReplyTo()
    {
        if (array_key_exists("replyTo", $this->_propDict)) {
           return $this->_propDict["replyTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the replyTo
    * The email addresses to use when replying.
    *
    * @param Recipient $val The replyTo
    *
    * @return Message
    */
    public function setReplyTo($val)
    {
		$this->_propDict["replyTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the conversationId
    * The ID of the conversation the email belongs to.
    *
    * @return string The conversationId
    */
    public function getConversationId()
    {
        if (array_key_exists("conversationId", $this->_propDict)) {
            return $this->_propDict["conversationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conversationId
    * The ID of the conversation the email belongs to.
    *
    * @param string $val The conversationId
    *
    * @return Message
    */
    public function setConversationId($val)
    {
        $this->_propDict["conversationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the uniqueBody
    * The part of the body of the message that is unique to the current message. uniqueBody is not returned by default but can be retrieved for a given message by use of the ?$select=uniqueBody query. It can be in HTML or text format.
    *
    * @return ItemBody The uniqueBody
    */
    public function getUniqueBody()
    {
        if (array_key_exists("uniqueBody", $this->_propDict)) {
            if (is_a($this->_propDict["uniqueBody"], "Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["uniqueBody"];
            } else {
                $this->_propDict["uniqueBody"] = new ItemBody($this->_propDict["uniqueBody"]);
                return $this->_propDict["uniqueBody"];
            }
        }
        return null;
    }
    
    /**
    * Sets the uniqueBody
    * The part of the body of the message that is unique to the current message. uniqueBody is not returned by default but can be retrieved for a given message by use of the ?$select=uniqueBody query. It can be in HTML or text format.
    *
    * @param ItemBody $val The uniqueBody
    *
    * @return Message
    */
    public function setUniqueBody($val)
    {
        $this->_propDict["uniqueBody"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeliveryReceiptRequested
    * Indicates whether a read receipt is requested for the message.
    *
    * @return bool The isDeliveryReceiptRequested
    */
    public function getIsDeliveryReceiptRequested()
    {
        if (array_key_exists("isDeliveryReceiptRequested", $this->_propDict)) {
            return $this->_propDict["isDeliveryReceiptRequested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeliveryReceiptRequested
    * Indicates whether a read receipt is requested for the message.
    *
    * @param bool $val The isDeliveryReceiptRequested
    *
    * @return Message
    */
    public function setIsDeliveryReceiptRequested($val)
    {
        $this->_propDict["isDeliveryReceiptRequested"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isReadReceiptRequested
    * Indicates whether a read receipt is requested for the message.
    *
    * @return bool The isReadReceiptRequested
    */
    public function getIsReadReceiptRequested()
    {
        if (array_key_exists("isReadReceiptRequested", $this->_propDict)) {
            return $this->_propDict["isReadReceiptRequested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReadReceiptRequested
    * Indicates whether a read receipt is requested for the message.
    *
    * @param bool $val The isReadReceiptRequested
    *
    * @return Message
    */
    public function setIsReadReceiptRequested($val)
    {
        $this->_propDict["isReadReceiptRequested"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRead
    * Indicates whether the message has been read.
    *
    * @return bool The isRead
    */
    public function getIsRead()
    {
        if (array_key_exists("isRead", $this->_propDict)) {
            return $this->_propDict["isRead"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRead
    * Indicates whether the message has been read.
    *
    * @param bool $val The isRead
    *
    * @return Message
    */
    public function setIsRead($val)
    {
        $this->_propDict["isRead"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDraft
    * Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet.
    *
    * @return bool The isDraft
    */
    public function getIsDraft()
    {
        if (array_key_exists("isDraft", $this->_propDict)) {
            return $this->_propDict["isDraft"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDraft
    * Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet.
    *
    * @param bool $val The isDraft
    *
    * @return Message
    */
    public function setIsDraft($val)
    {
        $this->_propDict["isDraft"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the webLink
    * The URL to open the message in Outlook Web App.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, then the browser will show the message in the Outlook Web App review pane.The message will open in the browser if you are logged in to your mailbox via Outlook Web App. You will be prompted to login if you are not already logged in with the browser.This URL can be accessed from within an iFrame.
    *
    * @return string The webLink
    */
    public function getWebLink()
    {
        if (array_key_exists("webLink", $this->_propDict)) {
            return $this->_propDict["webLink"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webLink
    * The URL to open the message in Outlook Web App.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, then the browser will show the message in the Outlook Web App review pane.The message will open in the browser if you are logged in to your mailbox via Outlook Web App. You will be prompted to login if you are not already logged in with the browser.This URL can be accessed from within an iFrame.
    *
    * @param string $val The webLink
    *
    * @return Message
    */
    public function setWebLink($val)
    {
        $this->_propDict["webLink"] = $val;
        return $this;
    }
    
    /**
    * Gets the inferenceClassification
    * The classification of the message for the user, based on inferred relevance or importance, or on an explicit override. The possible values are: focused or other.
    *
    * @return InferenceClassificationType The inferenceClassification
    */
    public function getInferenceClassification()
    {
        if (array_key_exists("inferenceClassification", $this->_propDict)) {
            if (is_a($this->_propDict["inferenceClassification"], "Microsoft\Graph\Model\InferenceClassificationType")) {
                return $this->_propDict["inferenceClassification"];
            } else {
                $this->_propDict["inferenceClassification"] = new InferenceClassificationType($this->_propDict["inferenceClassification"]);
                return $this->_propDict["inferenceClassification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inferenceClassification
    * The classification of the message for the user, based on inferred relevance or importance, or on an explicit override. The possible values are: focused or other.
    *
    * @param InferenceClassificationType $val The inferenceClassification
    *
    * @return Message
    */
    public function setInferenceClassification($val)
    {
        $this->_propDict["inferenceClassification"] = $val;
        return $this;
    }
    
    /**
    * Gets the flag
    * The flag value that indicates the status, start date, due date, or completion date for the message.
    *
    * @return FollowupFlag The flag
    */
    public function getFlag()
    {
        if (array_key_exists("flag", $this->_propDict)) {
            if (is_a($this->_propDict["flag"], "Microsoft\Graph\Model\FollowupFlag")) {
                return $this->_propDict["flag"];
            } else {
                $this->_propDict["flag"] = new FollowupFlag($this->_propDict["flag"]);
                return $this->_propDict["flag"];
            }
        }
        return null;
    }
    
    /**
    * Sets the flag
    * The flag value that indicates the status, start date, due date, or completion date for the message.
    *
    * @param FollowupFlag $val The flag
    *
    * @return Message
    */
    public function setFlag($val)
    {
        $this->_propDict["flag"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attachments
    * The fileAttachment and itemAttachment attachments for the message.
     *
     * @return array The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists("attachments", $this->_propDict)) {
           return $this->_propDict["attachments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attachments
    * The fileAttachment and itemAttachment attachments for the message.
    *
    * @param Attachment $val The attachments
    *
    * @return Message
    */
    public function setAttachments($val)
    {
		$this->_propDict["attachments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the message. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the message. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Message
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the message. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the message. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return Message
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the message. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the message. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return Message
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessage File
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
* ChatMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatMessage extends Entity
{
    /**
    * Gets the replyToId
    *
    * @return string The replyToId
    */
    public function getReplyToId()
    {
        if (array_key_exists("replyToId", $this->_propDict)) {
            return $this->_propDict["replyToId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the replyToId
    *
    * @param string $val The replyToId
    *
    * @return ChatMessage
    */
    public function setReplyToId($val)
    {
        $this->_propDict["replyToId"] = $val;
        return $this;
    }
    
    /**
    * Gets the from
    *
    * @return IdentitySet The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new IdentitySet($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }
    
    /**
    * Sets the from
    *
    * @param IdentitySet $val The from
    *
    * @return ChatMessage
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    
    /**
    * Gets the etag
    *
    * @return string The etag
    */
    public function getEtag()
    {
        if (array_key_exists("etag", $this->_propDict)) {
            return $this->_propDict["etag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the etag
    *
    * @param string $val The etag
    *
    * @return ChatMessage
    */
    public function setEtag($val)
    {
        $this->_propDict["etag"] = $val;
        return $this;
    }
    
    /**
    * Gets the messageType
    *
    * @return ChatMessageType The messageType
    */
    public function getMessageType()
    {
        if (array_key_exists("messageType", $this->_propDict)) {
            if (is_a($this->_propDict["messageType"], "Microsoft\Graph\Beta\Model\ChatMessageType")) {
                return $this->_propDict["messageType"];
            } else {
                $this->_propDict["messageType"] = new ChatMessageType($this->_propDict["messageType"]);
                return $this->_propDict["messageType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the messageType
    *
    * @param ChatMessageType $val The messageType
    *
    * @return ChatMessage
    */
    public function setMessageType($val)
    {
        $this->_propDict["messageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
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
    * @return ChatMessage
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ChatMessage
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deletedDateTime
    *
    * @return \DateTime The deletedDateTime
    */
    public function getDeletedDateTime()
    {
        if (array_key_exists("deletedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDateTime"], "\DateTime")) {
                return $this->_propDict["deletedDateTime"];
            } else {
                $this->_propDict["deletedDateTime"] = new \DateTime($this->_propDict["deletedDateTime"]);
                return $this->_propDict["deletedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDateTime
    *
    * @param \DateTime $val The deletedDateTime
    *
    * @return ChatMessage
    */
    public function setDeletedDateTime($val)
    {
        $this->_propDict["deletedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
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
    *
    * @param string $val The subject
    *
    * @return ChatMessage
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
    /**
    * Gets the body
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "Microsoft\Graph\Beta\Model\ItemBody")) {
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
    * @return ChatMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the summary
    *
    * @return string The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            return $this->_propDict["summary"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the summary
    *
    * @param string $val The summary
    *
    * @return ChatMessage
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attachments
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
    *
    * @param ChatMessageAttachment $val The attachments
    *
    * @return ChatMessage
    */
    public function setAttachments($val)
    {
		$this->_propDict["attachments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mentions
     *
     * @return array The mentions
     */
    public function getMentions()
    {
        if (array_key_exists("mentions", $this->_propDict)) {
           return $this->_propDict["mentions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mentions
    *
    * @param ChatMessageMention $val The mentions
    *
    * @return ChatMessage
    */
    public function setMentions($val)
    {
		$this->_propDict["mentions"] = $val;
        return $this;
    }
    
    /**
    * Gets the importance
    *
    * @return ChatMessageImportance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "Microsoft\Graph\Beta\Model\ChatMessageImportance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new ChatMessageImportance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the importance
    *
    * @param ChatMessageImportance $val The importance
    *
    * @return ChatMessage
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyViolation
    *
    * @return ChatMessagePolicyViolation The policyViolation
    */
    public function getPolicyViolation()
    {
        if (array_key_exists("policyViolation", $this->_propDict)) {
            if (is_a($this->_propDict["policyViolation"], "Microsoft\Graph\Beta\Model\ChatMessagePolicyViolation")) {
                return $this->_propDict["policyViolation"];
            } else {
                $this->_propDict["policyViolation"] = new ChatMessagePolicyViolation($this->_propDict["policyViolation"]);
                return $this->_propDict["policyViolation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policyViolation
    *
    * @param ChatMessagePolicyViolation $val The policyViolation
    *
    * @return ChatMessage
    */
    public function setPolicyViolation($val)
    {
        $this->_propDict["policyViolation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reactions
     *
     * @return array The reactions
     */
    public function getReactions()
    {
        if (array_key_exists("reactions", $this->_propDict)) {
           return $this->_propDict["reactions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reactions
    *
    * @param ChatMessageReaction $val The reactions
    *
    * @return ChatMessage
    */
    public function setReactions($val)
    {
		$this->_propDict["reactions"] = $val;
        return $this;
    }
    
    /**
    * Gets the locale
    *
    * @return string The locale
    */
    public function getLocale()
    {
        if (array_key_exists("locale", $this->_propDict)) {
            return $this->_propDict["locale"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locale
    *
    * @param string $val The locale
    *
    * @return ChatMessage
    */
    public function setLocale($val)
    {
        $this->_propDict["locale"] = $val;
        return $this;
    }
    

     /** 
     * Gets the replies
     *
     * @return array The replies
     */
    public function getReplies()
    {
        if (array_key_exists("replies", $this->_propDict)) {
           return $this->_propDict["replies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the replies
    *
    * @param ChatMessage $val The replies
    *
    * @return ChatMessage
    */
    public function setReplies($val)
    {
		$this->_propDict["replies"] = $val;
        return $this;
    }
    
}
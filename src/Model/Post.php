<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Post File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Post class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Post extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new Post
    *
    * @param array $propDict A list of properties to set
    *
    * @return Post
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the Post
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the body
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "ItemBody")) {
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
    * @param string $val The body
    *
    * @return Post
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }

    /**
    * Gets the receivedDateTime
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
    *
    * @param string $val The receivedDateTime
    *
    * @return Post
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
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
    * @param bool $val The hasAttachments
    *
    * @return Post
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the from
    *
    * @return Recipient The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "Recipient")) {
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
    *
    * @param string $val The from
    *
    * @return Post
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }

    /**
    * Gets the sender
    *
    * @return Recipient The sender
    */
    public function getSender()
    {
        if (array_key_exists("sender", $this->_propDict)) {
            if (is_a($this->_propDict["sender"], "Recipient")) {
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
    *
    * @param string $val The sender
    *
    * @return Post
    */
    public function setSender($val)
    {
        $this->_propDict["sender"] = $val;
        return $this;
    }

    /**
    * Gets the conversationThreadId
    *
    * @return string The conversationThreadId
    */
    public function getConversationThreadId()
    {
        if (array_key_exists("conversationThreadId", $this->_propDict)) {
            return $this->_propDict["conversationThreadId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conversationThreadId
    *
    * @param string $val The conversationThreadId
    *
    * @return Post
    */
    public function setConversationThreadId($val)
    {
        $this->_propDict["conversationThreadId"] = $val;
        return $this;
    }

    /** 
    * Gets the newParticipants
    *
    * @return array The newParticipants
    */
    public function getNewParticipants()
    {
        if (array_key_exists("newParticipants", $this->_propDict)) {
           return $this->_propDict["newParticipants"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the newParticipants
    *
    * @param string $val The newParticipants
    *
    * @return Post
    */
    public function setNewParticipants($val)
    {
		$this->_propDict["newParticipants"] = $val;
        return $this;
    }


    /**
    * Gets the conversationId
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
    *
    * @param string $val The conversationId
    *
    * @return Post
    */
    public function setConversationId($val)
    {
        $this->_propDict["conversationId"] = $val;
        return $this;
    }

    /** 
    * Gets the extensions
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
    *
    * @param string $val The extensions
    *
    * @return Post
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }


    /**
    * Gets the inReplyTo
    *
    * @return Post The inReplyTo
    */
    public function getInReplyTo()
    {
        if (array_key_exists("inReplyTo", $this->_propDict)) {
            if (is_a($this->_propDict["inReplyTo"], "Post")) {
                return $this->_propDict["inReplyTo"];
            } else {
                $this->_propDict["inReplyTo"] = new Post($this->_propDict["inReplyTo"]);
                return $this->_propDict["inReplyTo"];
            }
        }
        return null;
    }

    /**
    * Sets the inReplyTo
    *
    * @param string $val The inReplyTo
    *
    * @return Post
    */
    public function setInReplyTo($val)
    {
        $this->_propDict["inReplyTo"] = $val;
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
    * @param string $val The attachments
    *
    * @return Post
    */
    public function setAttachments($val)
    {
		$this->_propDict["attachments"] = $val;
        return $this;
    }


    /** 
    * Gets the singleValueExtendedProperties
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
    *
    * @param string $val The singleValueExtendedProperties
    *
    * @return Post
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }


    /** 
    * Gets the multiValueExtendedProperties
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
    *
    * @param string $val The multiValueExtendedProperties
    *
    * @return Post
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }

}
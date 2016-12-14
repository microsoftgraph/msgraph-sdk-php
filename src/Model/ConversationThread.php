<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConversationThread File
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
* ConversationThread class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ConversationThread extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new ConversationThread
    *
    * @param array $propDict A list of properties to set
    *
    * @return ConversationThread
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the ConversationThread
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /** 
    * Gets the toRecipients
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
    *
    * @param string $val The toRecipients
    *
    * @return ConversationThread
    */
    public function setToRecipients($val)
    {
		$this->_propDict["toRecipients"] = $val;
        return $this;
    }


    /**
    * Gets the topic
    *
    * @return string The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topic
    *
    * @param string $val The topic
    *
    * @return ConversationThread
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
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
    * @return ConversationThread
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastDeliveredDateTime
    *
    * @return \DateTime The lastDeliveredDateTime
    */
    public function getLastDeliveredDateTime()
    {
        if (array_key_exists("lastDeliveredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDeliveredDateTime"], "\DateTime")) {
                return $this->_propDict["lastDeliveredDateTime"];
            } else {
                $this->_propDict["lastDeliveredDateTime"] = new \DateTime($this->_propDict["lastDeliveredDateTime"]);
                return $this->_propDict["lastDeliveredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastDeliveredDateTime
    *
    * @param string $val The lastDeliveredDateTime
    *
    * @return ConversationThread
    */
    public function setLastDeliveredDateTime($val)
    {
        $this->_propDict["lastDeliveredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueSenders
    *
    * @return string The uniqueSenders
    */
    public function getUniqueSenders()
    {
        if (array_key_exists("uniqueSenders", $this->_propDict)) {
            return $this->_propDict["uniqueSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueSenders
    *
    * @param string $val The uniqueSenders
    *
    * @return ConversationThread
    */
    public function setUniqueSenders($val)
    {
        $this->_propDict["uniqueSenders"] = $val;
        return $this;
    }

    /** 
    * Gets the ccRecipients
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
    *
    * @param string $val The ccRecipients
    *
    * @return ConversationThread
    */
    public function setCcRecipients($val)
    {
		$this->_propDict["ccRecipients"] = $val;
        return $this;
    }


    /**
    * Gets the preview
    *
    * @return string The preview
    */
    public function getPreview()
    {
        if (array_key_exists("preview", $this->_propDict)) {
            return $this->_propDict["preview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preview
    *
    * @param string $val The preview
    *
    * @return ConversationThread
    */
    public function setPreview($val)
    {
        $this->_propDict["preview"] = $val;
        return $this;
    }

    /**
    * Gets the isLocked
    *
    * @return bool The isLocked
    */
    public function getIsLocked()
    {
        if (array_key_exists("isLocked", $this->_propDict)) {
            return $this->_propDict["isLocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLocked
    *
    * @param bool $val The isLocked
    *
    * @return ConversationThread
    */
    public function setIsLocked($val)
    {
        $this->_propDict["isLocked"] = boolval($val);
        return $this;
    }

    /** 
    * Gets the posts
    *
    * @return array The posts
    */
    public function getPosts()
    {
        if (array_key_exists("posts", $this->_propDict)) {
           return $this->_propDict["posts"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the posts
    *
    * @param string $val The posts
    *
    * @return ConversationThread
    */
    public function setPosts($val)
    {
		$this->_propDict["posts"] = $val;
        return $this;
    }

}
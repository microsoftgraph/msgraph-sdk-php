<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceUpdateMessage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ServiceUpdateMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceUpdateMessage extends ServiceAnnouncementBase
{
    /**
    * Gets the actionRequiredByDateTime
    * The expected deadline of the action for the message.
    *
    * @return \DateTime|null The actionRequiredByDateTime
    */
    public function getActionRequiredByDateTime()
    {
        if (array_key_exists("actionRequiredByDateTime", $this->_propDict) && !is_null($this->_propDict["actionRequiredByDateTime"])) {
            if (is_a($this->_propDict["actionRequiredByDateTime"], "\DateTime")) {
                return $this->_propDict["actionRequiredByDateTime"];
            } else {
                $this->_propDict["actionRequiredByDateTime"] = new \DateTime($this->_propDict["actionRequiredByDateTime"]);
                return $this->_propDict["actionRequiredByDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actionRequiredByDateTime
    * The expected deadline of the action for the message.
    *
    * @param \DateTime $val The actionRequiredByDateTime
    *
    * @return ServiceUpdateMessage
    */
    public function setActionRequiredByDateTime($val)
    {
        $this->_propDict["actionRequiredByDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the body
    * The content type and content of the service message body.
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict) && !is_null($this->_propDict["body"])) {
            if (is_a($this->_propDict["body"], "\Microsoft\Graph\Model\ItemBody")) {
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
    * The content type and content of the service message body.
    *
    * @param ItemBody $val The body
    *
    * @return ServiceUpdateMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    * The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
    *
    * @return ServiceUpdateCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict) && !is_null($this->_propDict["category"])) {
            if (is_a($this->_propDict["category"], "\Microsoft\Graph\Model\ServiceUpdateCategory")) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ServiceUpdateCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }
    
    /**
    * Sets the category
    * The service message category. Possible values are: preventOrFixIssue, planForChange, stayInformed, unknownFutureValue.
    *
    * @param ServiceUpdateCategory $val The category
    *
    * @return ServiceUpdateMessage
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the isMajorChange
    * Indicates whether the message describes a major update for the service.
    *
    * @return bool|null The isMajorChange
    */
    public function getIsMajorChange()
    {
        if (array_key_exists("isMajorChange", $this->_propDict)) {
            return $this->_propDict["isMajorChange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMajorChange
    * Indicates whether the message describes a major update for the service.
    *
    * @param bool $val The isMajorChange
    *
    * @return ServiceUpdateMessage
    */
    public function setIsMajorChange($val)
    {
        $this->_propDict["isMajorChange"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the services
    * The affected services by the service message.
    *
    * @return string|null The services
    */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
            return $this->_propDict["services"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the services
    * The affected services by the service message.
    *
    * @param string $val The services
    *
    * @return ServiceUpdateMessage
    */
    public function setServices($val)
    {
        $this->_propDict["services"] = $val;
        return $this;
    }
    
    /**
    * Gets the severity
    * The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
    *
    * @return ServiceUpdateSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict) && !is_null($this->_propDict["severity"])) {
            if (is_a($this->_propDict["severity"], "\Microsoft\Graph\Model\ServiceUpdateSeverity")) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new ServiceUpdateSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the severity
    * The severity of the service message. Possible values are: normal, high, critical, unknownFutureValue.
    *
    * @param ServiceUpdateSeverity $val The severity
    *
    * @return ServiceUpdateMessage
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    * A collection of tags for the service message.
    *
    * @return string|null The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    * A collection of tags for the service message.
    *
    * @param string $val The tags
    *
    * @return ServiceUpdateMessage
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the viewPoint
    * Represents user view points data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
    *
    * @return ServiceUpdateMessageViewpoint|null The viewPoint
    */
    public function getViewPoint()
    {
        if (array_key_exists("viewPoint", $this->_propDict) && !is_null($this->_propDict["viewPoint"])) {
            if (is_a($this->_propDict["viewPoint"], "\Microsoft\Graph\Model\ServiceUpdateMessageViewpoint")) {
                return $this->_propDict["viewPoint"];
            } else {
                $this->_propDict["viewPoint"] = new ServiceUpdateMessageViewpoint($this->_propDict["viewPoint"]);
                return $this->_propDict["viewPoint"];
            }
        }
        return null;
    }
    
    /**
    * Sets the viewPoint
    * Represents user view points data of the service message. This data includes message status such as whether the user has archived, read, or marked the message as favorite. This property is null when accessed with application permissions.
    *
    * @param ServiceUpdateMessageViewpoint $val The viewPoint
    *
    * @return ServiceUpdateMessage
    */
    public function setViewPoint($val)
    {
        $this->_propDict["viewPoint"] = $val;
        return $this;
    }
    
}

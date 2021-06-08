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
namespace Beta\Microsoft\Graph\Model;

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
    *
    * @return \DateTime|null The actionRequiredByDateTime
    */
    public function getActionRequiredByDateTime()
    {
        if (array_key_exists("actionRequiredByDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["actionRequiredByDateTime"], "\DateTime") || is_null($this->_propDict["actionRequiredByDateTime"])) {
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
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["body"])) {
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
    * @return ServiceUpdateMessage
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    *
    * @return ServiceUpdateCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\ServiceUpdateCategory") || is_null($this->_propDict["category"])) {
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
    *
    * @return ServiceUpdateSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\ServiceUpdateSeverity") || is_null($this->_propDict["severity"])) {
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
    *
    * @return ServiceUpdateMessageViewpoint|null The viewPoint
    */
    public function getViewPoint()
    {
        if (array_key_exists("viewPoint", $this->_propDict)) {
            if (is_a($this->_propDict["viewPoint"], "\Beta\Microsoft\Graph\Model\ServiceUpdateMessageViewpoint") || is_null($this->_propDict["viewPoint"])) {
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

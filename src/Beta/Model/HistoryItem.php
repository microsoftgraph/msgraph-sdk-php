<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HistoryItem File
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
* HistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class HistoryItem extends Entity
{
    /**
    * Gets the status
    *
    * @return Status The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\Status")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new Status($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param Status $val The status
    *
    * @return HistoryItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the activeDurationSeconds
    *
    * @return int The activeDurationSeconds
    */
    public function getActiveDurationSeconds()
    {
        if (array_key_exists("activeDurationSeconds", $this->_propDict)) {
            return $this->_propDict["activeDurationSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDurationSeconds
    *
    * @param int $val The activeDurationSeconds
    *
    * @return HistoryItem
    */
    public function setActiveDurationSeconds($val)
    {
        $this->_propDict["activeDurationSeconds"] = intval($val);
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
    * @return HistoryItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActiveDateTime
    *
    * @return \DateTime The lastActiveDateTime
    */
    public function getLastActiveDateTime()
    {
        if (array_key_exists("lastActiveDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActiveDateTime"], "\DateTime")) {
                return $this->_propDict["lastActiveDateTime"];
            } else {
                $this->_propDict["lastActiveDateTime"] = new \DateTime($this->_propDict["lastActiveDateTime"]);
                return $this->_propDict["lastActiveDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActiveDateTime
    *
    * @param \DateTime $val The lastActiveDateTime
    *
    * @return HistoryItem
    */
    public function setLastActiveDateTime($val)
    {
        $this->_propDict["lastActiveDateTime"] = $val;
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
    * @return HistoryItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return HistoryItem
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the startedDateTime
    *
    * @return \DateTime The startedDateTime
    */
    public function getStartedDateTime()
    {
        if (array_key_exists("startedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startedDateTime"], "\DateTime")) {
                return $this->_propDict["startedDateTime"];
            } else {
                $this->_propDict["startedDateTime"] = new \DateTime($this->_propDict["startedDateTime"]);
                return $this->_propDict["startedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startedDateTime
    *
    * @param \DateTime $val The startedDateTime
    *
    * @return HistoryItem
    */
    public function setStartedDateTime($val)
    {
        $this->_propDict["startedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userTimezone
    *
    * @return string The userTimezone
    */
    public function getUserTimezone()
    {
        if (array_key_exists("userTimezone", $this->_propDict)) {
            return $this->_propDict["userTimezone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userTimezone
    *
    * @param string $val The userTimezone
    *
    * @return HistoryItem
    */
    public function setUserTimezone($val)
    {
        $this->_propDict["userTimezone"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Incident File
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
* Incident class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Incident extends Entity
{
    /**
    * Gets the assignedTo
    *
    * @return string|null The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedTo
    *
    * @param string $val The assignedTo
    *
    * @return Incident
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the classification
    *
    * @return M365AlertClassification|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\Model\M365AlertClassification") || is_null($this->_propDict["classification"])) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new M365AlertClassification($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classification
    *
    * @param M365AlertClassification $val The classification
    *
    * @return Incident
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    

     /** 
     * Gets the comments
     *
     * @return array|null The comments
     */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
           return $this->_propDict["comments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the comments
    *
    * @param M365AlertComment $val The comments
    *
    * @return Incident
    */
    public function setComments($val)
    {
        $this->_propDict["comments"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * @return Incident
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the determination
    *
    * @return M365AlertDetermination|null The determination
    */
    public function getDetermination()
    {
        if (array_key_exists("determination", $this->_propDict)) {
            if (is_a($this->_propDict["determination"], "\Beta\Microsoft\Graph\Model\M365AlertDetermination") || is_null($this->_propDict["determination"])) {
                return $this->_propDict["determination"];
            } else {
                $this->_propDict["determination"] = new M365AlertDetermination($this->_propDict["determination"]);
                return $this->_propDict["determination"];
            }
        }
        return null;
    }
    
    /**
    * Sets the determination
    *
    * @param M365AlertDetermination $val The determination
    *
    * @return Incident
    */
    public function setDetermination($val)
    {
        $this->_propDict["determination"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Incident
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the incidentWebUrl
    *
    * @return string|null The incidentWebUrl
    */
    public function getIncidentWebUrl()
    {
        if (array_key_exists("incidentWebUrl", $this->_propDict)) {
            return $this->_propDict["incidentWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the incidentWebUrl
    *
    * @param string $val The incidentWebUrl
    *
    * @return Incident
    */
    public function setIncidentWebUrl($val)
    {
        $this->_propDict["incidentWebUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdateDateTime
    *
    * @return \DateTime|null The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime") || is_null($this->_propDict["lastUpdateDateTime"])) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdateDateTime
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return Incident
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the redirectIncidentId
    *
    * @return string|null The redirectIncidentId
    */
    public function getRedirectIncidentId()
    {
        if (array_key_exists("redirectIncidentId", $this->_propDict)) {
            return $this->_propDict["redirectIncidentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the redirectIncidentId
    *
    * @param string $val The redirectIncidentId
    *
    * @return Incident
    */
    public function setRedirectIncidentId($val)
    {
        $this->_propDict["redirectIncidentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the severity
    *
    * @return M365AlertSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\M365AlertSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new M365AlertSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the severity
    *
    * @param M365AlertSeverity $val The severity
    *
    * @return Incident
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return IncidentStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\IncidentStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new IncidentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param IncidentStatus $val The status
    *
    * @return Incident
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
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
    * @return Incident
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
}

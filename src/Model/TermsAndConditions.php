<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditions File
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
* TermsAndConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TermsAndConditions extends Entity
{
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
    * @return TermsAndConditions
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
    * @return TermsAndConditions
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    * @return TermsAndConditions
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return TermsAndConditions
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    *
    * @param string $val The title
    *
    * @return TermsAndConditions
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the bodyText
    *
    * @return string The bodyText
    */
    public function getBodyText()
    {
        if (array_key_exists("bodyText", $this->_propDict)) {
            return $this->_propDict["bodyText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bodyText
    *
    * @param string $val The bodyText
    *
    * @return TermsAndConditions
    */
    public function setBodyText($val)
    {
        $this->_propDict["bodyText"] = $val;
        return $this;
    }
    
    /**
    * Gets the acceptanceStatement
    *
    * @return string The acceptanceStatement
    */
    public function getAcceptanceStatement()
    {
        if (array_key_exists("acceptanceStatement", $this->_propDict)) {
            return $this->_propDict["acceptanceStatement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the acceptanceStatement
    *
    * @param string $val The acceptanceStatement
    *
    * @return TermsAndConditions
    */
    public function setAcceptanceStatement($val)
    {
        $this->_propDict["acceptanceStatement"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return TermsAndConditions
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param TermsAndConditionsAssignment $val The assignments
    *
    * @return TermsAndConditions
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the acceptanceStatuses
     *
     * @return array The acceptanceStatuses
     */
    public function getAcceptanceStatuses()
    {
        if (array_key_exists("acceptanceStatuses", $this->_propDict)) {
           return $this->_propDict["acceptanceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the acceptanceStatuses
    *
    * @param TermsAndConditionsAcceptanceStatus $val The acceptanceStatuses
    *
    * @return TermsAndConditions
    */
    public function setAcceptanceStatuses($val)
    {
		$this->_propDict["acceptanceStatuses"] = $val;
        return $this;
    }
    
}
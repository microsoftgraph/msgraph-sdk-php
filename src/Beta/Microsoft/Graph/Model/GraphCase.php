<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphCase File
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
* GraphCase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphCase extends Entity
{
    /**
    * Gets the closedBy
    *
    * @return IdentitySet The closedBy
    */
    public function getClosedBy()
    {
        if (array_key_exists("closedBy", $this->_propDict)) {
            if (is_a($this->_propDict["closedBy"], "Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["closedBy"];
            } else {
                $this->_propDict["closedBy"] = new IdentitySet($this->_propDict["closedBy"]);
                return $this->_propDict["closedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedBy
    *
    * @param IdentitySet $val The closedBy
    *
    * @return Case
    */
    public function setClosedBy($val)
    {
        $this->_propDict["closedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the closedDateTime
    *
    * @return \DateTime The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedDateTime
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return Case
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
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
    * @return Case
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return Case
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return Case
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return Case
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return Case
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
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
    * @return Case
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return CaseStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Beta\Microsoft\Graph\Model\CaseStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CaseStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param CaseStatus $val The status
    *
    * @return Case
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the custodians
     *
     * @return array The custodians
     */
    public function getCustodians()
    {
        if (array_key_exists("custodians", $this->_propDict)) {
           return $this->_propDict["custodians"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the custodians
    *
    * @param Custodian $val The custodians
    *
    * @return Case
    */
    public function setCustodians($val)
    {
		$this->_propDict["custodians"] = $val;
        return $this;
    }
    

     /** 
     * Gets the legalholds
     *
     * @return array The legalholds
     */
    public function getLegalholds()
    {
        if (array_key_exists("legalholds", $this->_propDict)) {
           return $this->_propDict["legalholds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the legalholds
    *
    * @param Legalhold $val The legalholds
    *
    * @return Case
    */
    public function setLegalholds($val)
    {
		$this->_propDict["legalholds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param CaseOperation $val The operations
    *
    * @return Case
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reviewSets
     *
     * @return array The reviewSets
     */
    public function getReviewSets()
    {
        if (array_key_exists("reviewSets", $this->_propDict)) {
           return $this->_propDict["reviewSets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewSets
    *
    * @param ReviewSet $val The reviewSets
    *
    * @return Case
    */
    public function setReviewSets($val)
    {
		$this->_propDict["reviewSets"] = $val;
        return $this;
    }
    
}
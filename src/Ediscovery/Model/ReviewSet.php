<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReviewSet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Ediscovery\Model;

/**
* ReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReviewSet extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdBy
    * The user who created the review set. Read-only.
    *
    * @return \Microsoft\Graph\Model\IdentitySet|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict) && !is_null($this->_propDict["createdBy"])) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The user who created the review set. Read-only.
    *
    * @param \Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return ReviewSet
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The datetime when the review set was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
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
    * The datetime when the review set was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ReviewSet
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The review set name. The name is unique with a maximum limit of 64 characters.
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
    * The review set name. The name is unique with a maximum limit of 64 characters.
    *
    * @param string $val The displayName
    *
    * @return ReviewSet
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the queries
    * Read-only. Nullable.
     *
     * @return ReviewSetQuery[]|null The queries
     */
    public function getQueries()
    {
        if (array_key_exists('queries', $this->_propDict) && !is_null($this->_propDict['queries'])) {
            $queries = [];
            if (count($this->_propDict['queries']) > 0 && is_a($this->_propDict['queries'][0], 'ReviewSetQuery')) {
                return $this->_propDict['queries'];
            }
            foreach ($this->_propDict['queries'] as $singleValue) {
                $queries []= new ReviewSetQuery($singleValue);
            }
            $this->_propDict['queries'] = $queries;
            return $this->_propDict['queries'];
        }
        return null;
    }
    
    /** 
    * Sets the queries
    * Read-only. Nullable.
    *
    * @param ReviewSetQuery[] $val The queries
    *
    * @return ReviewSet
    */
    public function setQueries($val)
    {
        $this->_propDict["queries"] = $val;
        return $this;
    }
    
}

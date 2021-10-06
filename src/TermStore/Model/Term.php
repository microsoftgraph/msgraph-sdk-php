<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Term File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\TermStore\Model;

/**
* Term class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Term extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the createdDateTime
    * Date and time of term creation. Read-only.
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
    * Date and time of term creation. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Term
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the descriptions
    * Description about term that is dependent on the languageTag.
     *
     * @return LocalizedDescription[]|null The descriptions
     */
    public function getDescriptions()
    {
        if (array_key_exists('descriptions', $this->_propDict) && !is_null($this->_propDict['descriptions'])) {
            $descriptions = [];
            if (count($this->_propDict['descriptions']) > 0 && is_a($this->_propDict['descriptions'][0], 'LocalizedDescription')) {
                return $this->_propDict['descriptions'];
            }
            foreach ($this->_propDict['descriptions'] as $singleValue) {
                $descriptions []= new LocalizedDescription($singleValue);
            }
            $this->_propDict['descriptions'] = $descriptions;
            return $this->_propDict['descriptions'];
        }
        return null;
    }
    
    /** 
    * Sets the descriptions
    * Description about term that is dependent on the languageTag.
    *
    * @param LocalizedDescription[] $val The descriptions
    *
    * @return Term
    */
    public function setDescriptions($val)
    {
        $this->_propDict["descriptions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the labels
    * Label metadata for a term.
     *
     * @return LocalizedLabel[]|null The labels
     */
    public function getLabels()
    {
        if (array_key_exists('labels', $this->_propDict) && !is_null($this->_propDict['labels'])) {
            $labels = [];
            if (count($this->_propDict['labels']) > 0 && is_a($this->_propDict['labels'][0], 'LocalizedLabel')) {
                return $this->_propDict['labels'];
            }
            foreach ($this->_propDict['labels'] as $singleValue) {
                $labels []= new LocalizedLabel($singleValue);
            }
            $this->_propDict['labels'] = $labels;
            return $this->_propDict['labels'];
        }
        return null;
    }
    
    /** 
    * Sets the labels
    * Label metadata for a term.
    *
    * @param LocalizedLabel[] $val The labels
    *
    * @return Term
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last date and time of term modification. Read-only.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict) && !is_null($this->_propDict["lastModifiedDateTime"])) {
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
    * Last date and time of term modification. Read-only.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Term
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the termProperties
    * Collection of properties on the term.
     *
     * @return \Microsoft\Graph\Model\KeyValue[]|null The termProperties
     */
    public function getTermProperties()
    {
        if (array_key_exists('properties', $this->_propDict) && !is_null($this->_propDict['properties'])) {
            $properties = [];
            if (count($this->_propDict['properties']) > 0 && is_a($this->_propDict['properties'][0], '\Microsoft\Graph\Model\KeyValue')) {
                return $this->_propDict['properties'];
            }
            foreach ($this->_propDict['properties'] as $singleValue) {
                $properties []= new \Microsoft\Graph\Model\KeyValue($singleValue);
            }
            $this->_propDict['properties'] = $properties;
            return $this->_propDict['properties'];
        }
        return null;
    }
    
    /** 
    * Sets the termProperties
    * Collection of properties on the term.
    *
    * @param \Microsoft\Graph\Model\KeyValue[] $val The termProperties
    *
    * @return Term
    */
    public function setTermProperties($val)
    {
        $this->_propDict["properties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the children
    * Children of current term.
     *
     * @return Term[]|null The children
     */
    public function getChildren()
    {
        if (array_key_exists('children', $this->_propDict) && !is_null($this->_propDict['children'])) {
            $children = [];
            if (count($this->_propDict['children']) > 0 && is_a($this->_propDict['children'][0], 'Term')) {
                return $this->_propDict['children'];
            }
            foreach ($this->_propDict['children'] as $singleValue) {
                $children []= new Term($singleValue);
            }
            $this->_propDict['children'] = $children;
            return $this->_propDict['children'];
        }
        return null;
    }
    
    /** 
    * Sets the children
    * Children of current term.
    *
    * @param Term[] $val The children
    *
    * @return Term
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
        return $this;
    }
    

     /** 
     * Gets the relations
    * To indicate which terms are related to the current term as either pinned or reused.
     *
     * @return Relation[]|null The relations
     */
    public function getRelations()
    {
        if (array_key_exists('relations', $this->_propDict) && !is_null($this->_propDict['relations'])) {
            $relations = [];
            if (count($this->_propDict['relations']) > 0 && is_a($this->_propDict['relations'][0], 'Relation')) {
                return $this->_propDict['relations'];
            }
            foreach ($this->_propDict['relations'] as $singleValue) {
                $relations []= new Relation($singleValue);
            }
            $this->_propDict['relations'] = $relations;
            return $this->_propDict['relations'];
        }
        return null;
    }
    
    /** 
    * Sets the relations
    * To indicate which terms are related to the current term as either pinned or reused.
    *
    * @param Relation[] $val The relations
    *
    * @return Term
    */
    public function setRelations($val)
    {
        $this->_propDict["relations"] = $val;
        return $this;
    }
    
    /**
    * Gets the set
    * The [set] in which the term is created.
    *
    * @return Set|null The set
    */
    public function getSet()
    {
        if (array_key_exists("set", $this->_propDict) && !is_null($this->_propDict["set"])) {
            if (is_a($this->_propDict["set"], "\Microsoft\Graph\TermStore\Model\Set")) {
                return $this->_propDict["set"];
            } else {
                $this->_propDict["set"] = new Set($this->_propDict["set"]);
                return $this->_propDict["set"];
            }
        }
        return null;
    }
    
    /**
    * Sets the set
    * The [set] in which the term is created.
    *
    * @param Set $val The set
    *
    * @return Term
    */
    public function setSet($val)
    {
        $this->_propDict["set"] = $val;
        return $this;
    }
    
}

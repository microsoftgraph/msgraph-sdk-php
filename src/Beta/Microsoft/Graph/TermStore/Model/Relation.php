<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Relation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\TermStore\Model;

/**
* Relation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Relation extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the relationship
    *
    * @return RelationType The relationship
    */
    public function getRelationship()
    {
        if (array_key_exists("relationship", $this->_propDict)) {
            if (is_a($this->_propDict["relationship"], "Beta\Microsoft\Graph\TermStore\Model\RelationType")) {
                return $this->_propDict["relationship"];
            } else {
                $this->_propDict["relationship"] = new RelationType($this->_propDict["relationship"]);
                return $this->_propDict["relationship"];
            }
        }
        return null;
    }
    
    /**
    * Sets the relationship
    *
    * @param RelationType $val The relationship
    *
    * @return Relation
    */
    public function setRelationship($val)
    {
        $this->_propDict["relationship"] = $val;
        return $this;
    }
    
    /**
    * Gets the fromTerm
    *
    * @return Term The fromTerm
    */
    public function getFromTerm()
    {
        if (array_key_exists("fromTerm", $this->_propDict)) {
            if (is_a($this->_propDict["fromTerm"], "Beta\Microsoft\Graph\TermStore\Model\Term")) {
                return $this->_propDict["fromTerm"];
            } else {
                $this->_propDict["fromTerm"] = new Term($this->_propDict["fromTerm"]);
                return $this->_propDict["fromTerm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fromTerm
    *
    * @param Term $val The fromTerm
    *
    * @return Relation
    */
    public function setFromTerm($val)
    {
        $this->_propDict["fromTerm"] = $val;
        return $this;
    }
    
    /**
    * Gets the set
    *
    * @return Set The set
    */
    public function getSet()
    {
        if (array_key_exists("set", $this->_propDict)) {
            if (is_a($this->_propDict["set"], "Beta\Microsoft\Graph\TermStore\Model\Set")) {
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
    *
    * @param Set $val The set
    *
    * @return Relation
    */
    public function setSet($val)
    {
        $this->_propDict["set"] = $val;
        return $this;
    }
    
    /**
    * Gets the toTerm
    *
    * @return Term The toTerm
    */
    public function getToTerm()
    {
        if (array_key_exists("toTerm", $this->_propDict)) {
            if (is_a($this->_propDict["toTerm"], "Beta\Microsoft\Graph\TermStore\Model\Term")) {
                return $this->_propDict["toTerm"];
            } else {
                $this->_propDict["toTerm"] = new Term($this->_propDict["toTerm"]);
                return $this->_propDict["toTerm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the toTerm
    *
    * @param Term $val The toTerm
    *
    * @return Relation
    */
    public function setToTerm($val)
    {
        $this->_propDict["toTerm"] = $val;
        return $this;
    }
    
}
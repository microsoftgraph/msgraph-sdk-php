<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalStep File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ApprovalStep class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalStep extends Entity
{
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
    * @return ApprovalStep
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedBy
    *
    * @return Identity The reviewedBy
    */
    public function getReviewedBy()
    {
        if (array_key_exists("reviewedBy", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedBy"], "Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["reviewedBy"];
            } else {
                $this->_propDict["reviewedBy"] = new Identity($this->_propDict["reviewedBy"]);
                return $this->_propDict["reviewedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedBy
    *
    * @param Identity $val The reviewedBy
    *
    * @return ApprovalStep
    */
    public function setReviewedBy($val)
    {
        $this->_propDict["reviewedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewedDateTime
    *
    * @return \DateTime The reviewedDateTime
    */
    public function getReviewedDateTime()
    {
        if (array_key_exists("reviewedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["reviewedDateTime"], "\DateTime")) {
                return $this->_propDict["reviewedDateTime"];
            } else {
                $this->_propDict["reviewedDateTime"] = new \DateTime($this->_propDict["reviewedDateTime"]);
                return $this->_propDict["reviewedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewedDateTime
    *
    * @param \DateTime $val The reviewedDateTime
    *
    * @return ApprovalStep
    */
    public function setReviewedDateTime($val)
    {
        $this->_propDict["reviewedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reviewResult
    *
    * @return string The reviewResult
    */
    public function getReviewResult()
    {
        if (array_key_exists("reviewResult", $this->_propDict)) {
            return $this->_propDict["reviewResult"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reviewResult
    *
    * @param string $val The reviewResult
    *
    * @return ApprovalStep
    */
    public function setReviewResult($val)
    {
        $this->_propDict["reviewResult"] = $val;
        return $this;
    }
    
    /**
    * Gets the justification
    *
    * @return string The justification
    */
    public function getJustification()
    {
        if (array_key_exists("justification", $this->_propDict)) {
            return $this->_propDict["justification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the justification
    *
    * @param string $val The justification
    *
    * @return ApprovalStep
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
}
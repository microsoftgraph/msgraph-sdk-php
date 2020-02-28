<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThreatAssessmentRequest File
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
* ThreatAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ThreatAssessmentRequest extends Entity
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
    * @return ThreatAssessmentRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentType
    *
    * @return ThreatAssessmentContentType The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "Microsoft\Graph\Model\ThreatAssessmentContentType")) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ThreatAssessmentContentType($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentType
    *
    * @param ThreatAssessmentContentType $val The contentType
    *
    * @return ThreatAssessmentRequest
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the expectedAssessment
    *
    * @return ThreatExpectedAssessment The expectedAssessment
    */
    public function getExpectedAssessment()
    {
        if (array_key_exists("expectedAssessment", $this->_propDict)) {
            if (is_a($this->_propDict["expectedAssessment"], "Microsoft\Graph\Model\ThreatExpectedAssessment")) {
                return $this->_propDict["expectedAssessment"];
            } else {
                $this->_propDict["expectedAssessment"] = new ThreatExpectedAssessment($this->_propDict["expectedAssessment"]);
                return $this->_propDict["expectedAssessment"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expectedAssessment
    *
    * @param ThreatExpectedAssessment $val The expectedAssessment
    *
    * @return ThreatAssessmentRequest
    */
    public function setExpectedAssessment($val)
    {
        $this->_propDict["expectedAssessment"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    *
    * @return ThreatCategory The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "Microsoft\Graph\Model\ThreatCategory")) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ThreatCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }
    
    /**
    * Sets the category
    *
    * @param ThreatCategory $val The category
    *
    * @return ThreatAssessmentRequest
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return ThreatAssessmentStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\ThreatAssessmentStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ThreatAssessmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param ThreatAssessmentStatus $val The status
    *
    * @return ThreatAssessmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestSource
    *
    * @return ThreatAssessmentRequestSource The requestSource
    */
    public function getRequestSource()
    {
        if (array_key_exists("requestSource", $this->_propDict)) {
            if (is_a($this->_propDict["requestSource"], "Microsoft\Graph\Model\ThreatAssessmentRequestSource")) {
                return $this->_propDict["requestSource"];
            } else {
                $this->_propDict["requestSource"] = new ThreatAssessmentRequestSource($this->_propDict["requestSource"]);
                return $this->_propDict["requestSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestSource
    *
    * @param ThreatAssessmentRequestSource $val The requestSource
    *
    * @return ThreatAssessmentRequest
    */
    public function setRequestSource($val)
    {
        $this->_propDict["requestSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param IdentitySet $val The createdBy
    *
    * @return ThreatAssessmentRequest
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the results
     *
     * @return array The results
     */
    public function getResults()
    {
        if (array_key_exists("results", $this->_propDict)) {
           return $this->_propDict["results"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the results
    *
    * @param ThreatAssessmentResult $val The results
    *
    * @return ThreatAssessmentRequest
    */
    public function setResults($val)
    {
		$this->_propDict["results"] = $val;
        return $this;
    }
    
}
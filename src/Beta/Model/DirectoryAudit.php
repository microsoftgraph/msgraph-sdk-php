<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryAudit File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* DirectoryAudit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DirectoryAudit extends Entity
{
    /**
    * Gets the category
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the category
    *
    * @param string $val The category
    *
    * @return DirectoryAudit
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the correlationId
    *
    * @param string $val The correlationId
    *
    * @return DirectoryAudit
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the result
    *
    * @return OperationResult The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "Microsoft\Graph\Beta\Model\OperationResult")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new OperationResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    *
    * @param OperationResult $val The result
    *
    * @return DirectoryAudit
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
    /**
    * Gets the resultReason
    *
    * @return string The resultReason
    */
    public function getResultReason()
    {
        if (array_key_exists("resultReason", $this->_propDict)) {
            return $this->_propDict["resultReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resultReason
    *
    * @param string $val The resultReason
    *
    * @return DirectoryAudit
    */
    public function setResultReason($val)
    {
        $this->_propDict["resultReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDisplayName
    *
    * @return string The activityDisplayName
    */
    public function getActivityDisplayName()
    {
        if (array_key_exists("activityDisplayName", $this->_propDict)) {
            return $this->_propDict["activityDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityDisplayName
    *
    * @param string $val The activityDisplayName
    *
    * @return DirectoryAudit
    */
    public function setActivityDisplayName($val)
    {
        $this->_propDict["activityDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityDateTime
    *
    * @return \DateTime The activityDateTime
    */
    public function getActivityDateTime()
    {
        if (array_key_exists("activityDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["activityDateTime"], "\DateTime")) {
                return $this->_propDict["activityDateTime"];
            } else {
                $this->_propDict["activityDateTime"] = new \DateTime($this->_propDict["activityDateTime"]);
                return $this->_propDict["activityDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activityDateTime
    *
    * @param \DateTime $val The activityDateTime
    *
    * @return DirectoryAudit
    */
    public function setActivityDateTime($val)
    {
        $this->_propDict["activityDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedBy
    *
    * @return AuditActivityInitiator The initiatedBy
    */
    public function getInitiatedBy()
    {
        if (array_key_exists("initiatedBy", $this->_propDict)) {
            if (is_a($this->_propDict["initiatedBy"], "Microsoft\Graph\Beta\Model\AuditActivityInitiator")) {
                return $this->_propDict["initiatedBy"];
            } else {
                $this->_propDict["initiatedBy"] = new AuditActivityInitiator($this->_propDict["initiatedBy"]);
                return $this->_propDict["initiatedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the initiatedBy
    *
    * @param AuditActivityInitiator $val The initiatedBy
    *
    * @return DirectoryAudit
    */
    public function setInitiatedBy($val)
    {
        $this->_propDict["initiatedBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetResources
     *
     * @return array The targetResources
     */
    public function getTargetResources()
    {
        if (array_key_exists("targetResources", $this->_propDict)) {
           return $this->_propDict["targetResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetResources
    *
    * @param TargetResource $val The targetResources
    *
    * @return DirectoryAudit
    */
    public function setTargetResources($val)
    {
		$this->_propDict["targetResources"] = $val;
        return $this;
    }
    
    /**
    * Gets the loggedByService
    *
    * @return string The loggedByService
    */
    public function getLoggedByService()
    {
        if (array_key_exists("loggedByService", $this->_propDict)) {
            return $this->_propDict["loggedByService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loggedByService
    *
    * @param string $val The loggedByService
    *
    * @return DirectoryAudit
    */
    public function setLoggedByService($val)
    {
        $this->_propDict["loggedByService"] = $val;
        return $this;
    }
    

     /** 
     * Gets the additionalDetails
     *
     * @return array The additionalDetails
     */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
           return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the additionalDetails
    *
    * @param KeyValue $val The additionalDetails
    *
    * @return DirectoryAudit
    */
    public function setAdditionalDetails($val)
    {
		$this->_propDict["additionalDetails"] = $val;
        return $this;
    }
    
}
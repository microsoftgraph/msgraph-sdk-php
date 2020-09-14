<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequest File
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
* AccessPackageAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequest extends Entity
{
    /**
    * Gets the completedDate
    *
    * @return \DateTime The completedDate
    */
    public function getCompletedDate()
    {
        if (array_key_exists("completedDate", $this->_propDict)) {
            if (is_a($this->_propDict["completedDate"], "\DateTime")) {
                return $this->_propDict["completedDate"];
            } else {
                $this->_propDict["completedDate"] = new \DateTime($this->_propDict["completedDate"]);
                return $this->_propDict["completedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDate
    *
    * @param \DateTime $val The completedDate
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setCompletedDate($val)
    {
        $this->_propDict["completedDate"] = $val;
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
    * @return AccessPackageAssignmentRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
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
    * @return AccessPackageAssignmentRequest
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isValidationOnly
    *
    * @return bool The isValidationOnly
    */
    public function getIsValidationOnly()
    {
        if (array_key_exists("isValidationOnly", $this->_propDict)) {
            return $this->_propDict["isValidationOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isValidationOnly
    *
    * @param bool $val The isValidationOnly
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setIsValidationOnly($val)
    {
        $this->_propDict["isValidationOnly"] = boolval($val);
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
    * @return AccessPackageAssignmentRequest
    */
    public function setJustification($val)
    {
        $this->_propDict["justification"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestState
    *
    * @return string The requestState
    */
    public function getRequestState()
    {
        if (array_key_exists("requestState", $this->_propDict)) {
            return $this->_propDict["requestState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestState
    *
    * @param string $val The requestState
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestState($val)
    {
        $this->_propDict["requestState"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestStatus
    *
    * @return string The requestStatus
    */
    public function getRequestStatus()
    {
        if (array_key_exists("requestStatus", $this->_propDict)) {
            return $this->_propDict["requestStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestStatus
    *
    * @param string $val The requestStatus
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestStatus($val)
    {
        $this->_propDict["requestStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestType
    *
    * @return string The requestType
    */
    public function getRequestType()
    {
        if (array_key_exists("requestType", $this->_propDict)) {
            return $this->_propDict["requestType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestType
    *
    * @param string $val The requestType
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestType($val)
    {
        $this->_propDict["requestType"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedule
    *
    * @return RequestSchedule The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "Beta\Microsoft\Graph\Model\RequestSchedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new RequestSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedule
    *
    * @param RequestSchedule $val The schedule
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackage
    *
    * @return AccessPackage The accessPackage
    */
    public function getAccessPackage()
    {
        if (array_key_exists("accessPackage", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackage"], "Beta\Microsoft\Graph\Model\AccessPackage")) {
                return $this->_propDict["accessPackage"];
            } else {
                $this->_propDict["accessPackage"] = new AccessPackage($this->_propDict["accessPackage"]);
                return $this->_propDict["accessPackage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackage
    *
    * @param AccessPackage $val The accessPackage
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageAssignment
    *
    * @return AccessPackageAssignment The accessPackageAssignment
    */
    public function getAccessPackageAssignment()
    {
        if (array_key_exists("accessPackageAssignment", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageAssignment"], "Beta\Microsoft\Graph\Model\AccessPackageAssignment")) {
                return $this->_propDict["accessPackageAssignment"];
            } else {
                $this->_propDict["accessPackageAssignment"] = new AccessPackageAssignment($this->_propDict["accessPackageAssignment"]);
                return $this->_propDict["accessPackageAssignment"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageAssignment
    *
    * @param AccessPackageAssignment $val The accessPackageAssignment
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setAccessPackageAssignment($val)
    {
        $this->_propDict["accessPackageAssignment"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestor
    *
    * @return AccessPackageSubject The requestor
    */
    public function getRequestor()
    {
        if (array_key_exists("requestor", $this->_propDict)) {
            if (is_a($this->_propDict["requestor"], "Beta\Microsoft\Graph\Model\AccessPackageSubject")) {
                return $this->_propDict["requestor"];
            } else {
                $this->_propDict["requestor"] = new AccessPackageSubject($this->_propDict["requestor"]);
                return $this->_propDict["requestor"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestor
    *
    * @param AccessPackageSubject $val The requestor
    *
    * @return AccessPackageAssignmentRequest
    */
    public function setRequestor($val)
    {
        $this->_propDict["requestor"] = $val;
        return $this;
    }
    
}
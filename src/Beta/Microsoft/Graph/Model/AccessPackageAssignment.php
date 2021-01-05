<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignment File
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
* AccessPackageAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignment extends Entity
{
    /**
    * Gets the accessPackageId
    *
    * @return string The accessPackageId
    */
    public function getAccessPackageId()
    {
        if (array_key_exists("accessPackageId", $this->_propDict)) {
            return $this->_propDict["accessPackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessPackageId
    *
    * @param string $val The accessPackageId
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageId($val)
    {
        $this->_propDict["accessPackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentPolicyId
    *
    * @return string The assignmentPolicyId
    */
    public function getAssignmentPolicyId()
    {
        if (array_key_exists("assignmentPolicyId", $this->_propDict)) {
            return $this->_propDict["assignmentPolicyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentPolicyId
    *
    * @param string $val The assignmentPolicyId
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentPolicyId($val)
    {
        $this->_propDict["assignmentPolicyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentState
    *
    * @return string The assignmentState
    */
    public function getAssignmentState()
    {
        if (array_key_exists("assignmentState", $this->_propDict)) {
            return $this->_propDict["assignmentState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentState
    *
    * @param string $val The assignmentState
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentStatus
    *
    * @return string The assignmentStatus
    */
    public function getAssignmentStatus()
    {
        if (array_key_exists("assignmentStatus", $this->_propDict)) {
            return $this->_propDict["assignmentStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentStatus
    *
    * @param string $val The assignmentStatus
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentStatus($val)
    {
        $this->_propDict["assignmentStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the catalogId
    *
    * @return string The catalogId
    */
    public function getCatalogId()
    {
        if (array_key_exists("catalogId", $this->_propDict)) {
            return $this->_propDict["catalogId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogId
    *
    * @param string $val The catalogId
    *
    * @return AccessPackageAssignment
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
        return $this;
    }
    
    /**
    * Gets the expiredDateTime
    *
    * @return \DateTime The expiredDateTime
    */
    public function getExpiredDateTime()
    {
        if (array_key_exists("expiredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiredDateTime"], "\DateTime")) {
                return $this->_propDict["expiredDateTime"];
            } else {
                $this->_propDict["expiredDateTime"] = new \DateTime($this->_propDict["expiredDateTime"]);
                return $this->_propDict["expiredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiredDateTime
    *
    * @param \DateTime $val The expiredDateTime
    *
    * @return AccessPackageAssignment
    */
    public function setExpiredDateTime($val)
    {
        $this->_propDict["expiredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isExtended
    *
    * @return bool The isExtended
    */
    public function getIsExtended()
    {
        if (array_key_exists("isExtended", $this->_propDict)) {
            return $this->_propDict["isExtended"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExtended
    *
    * @param bool $val The isExtended
    *
    * @return AccessPackageAssignment
    */
    public function setIsExtended($val)
    {
        $this->_propDict["isExtended"] = boolval($val);
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
    * @return AccessPackageAssignment
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetId
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetId
    *
    * @param string $val The targetId
    *
    * @return AccessPackageAssignment
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
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
    * @return AccessPackageAssignment
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageAssignmentPolicy
    *
    * @return AccessPackageAssignmentPolicy The accessPackageAssignmentPolicy
    */
    public function getAccessPackageAssignmentPolicy()
    {
        if (array_key_exists("accessPackageAssignmentPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageAssignmentPolicy"], "Beta\Microsoft\Graph\Model\AccessPackageAssignmentPolicy")) {
                return $this->_propDict["accessPackageAssignmentPolicy"];
            } else {
                $this->_propDict["accessPackageAssignmentPolicy"] = new AccessPackageAssignmentPolicy($this->_propDict["accessPackageAssignmentPolicy"]);
                return $this->_propDict["accessPackageAssignmentPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageAssignmentPolicy
    *
    * @param AccessPackageAssignmentPolicy $val The accessPackageAssignmentPolicy
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentPolicy($val)
    {
        $this->_propDict["accessPackageAssignmentPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentRequests
     *
     * @return array The accessPackageAssignmentRequests
     */
    public function getAccessPackageAssignmentRequests()
    {
        if (array_key_exists("accessPackageAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentRequests
    *
    * @param AccessPackageAssignmentRequest $val The accessPackageAssignmentRequests
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentRequests($val)
    {
		$this->_propDict["accessPackageAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentResourceRoles
     *
     * @return array The accessPackageAssignmentResourceRoles
     */
    public function getAccessPackageAssignmentResourceRoles()
    {
        if (array_key_exists("accessPackageAssignmentResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentResourceRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentResourceRoles
    *
    * @param AccessPackageAssignmentResourceRole $val The accessPackageAssignmentResourceRoles
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentResourceRoles($val)
    {
		$this->_propDict["accessPackageAssignmentResourceRoles"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    *
    * @return AccessPackageSubject The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "Beta\Microsoft\Graph\Model\AccessPackageSubject")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new AccessPackageSubject($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    *
    * @param AccessPackageSubject $val The target
    *
    * @return AccessPackageAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
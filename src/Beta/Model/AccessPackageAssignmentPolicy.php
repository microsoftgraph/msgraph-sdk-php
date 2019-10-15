<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentPolicy File
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
* AccessPackageAssignmentPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AccessPackageAssignmentPolicy extends Entity
{
    /**
    * Gets the userType
    *
    * @return string The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            return $this->_propDict["userType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userType
    *
    * @param string $val The userType
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    
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
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackageId($val)
    {
        $this->_propDict["accessPackageId"] = $val;
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
    * @return AccessPackageAssignmentPolicy
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
    * @return AccessPackageAssignmentPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDenyPolicy
    *
    * @return bool The isDenyPolicy
    */
    public function getIsDenyPolicy()
    {
        if (array_key_exists("isDenyPolicy", $this->_propDict)) {
            return $this->_propDict["isDenyPolicy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDenyPolicy
    *
    * @param bool $val The isDenyPolicy
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsDenyPolicy($val)
    {
        $this->_propDict["isDenyPolicy"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isAllUsersScope
    *
    * @return bool The isAllUsersScope
    */
    public function getIsAllUsersScope()
    {
        if (array_key_exists("isAllUsersScope", $this->_propDict)) {
            return $this->_propDict["isAllUsersScope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAllUsersScope
    *
    * @param bool $val The isAllUsersScope
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsAllUsersScope($val)
    {
        $this->_propDict["isAllUsersScope"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the canExtend
    *
    * @return bool The canExtend
    */
    public function getCanExtend()
    {
        if (array_key_exists("canExtend", $this->_propDict)) {
            return $this->_propDict["canExtend"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canExtend
    *
    * @param bool $val The canExtend
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCanExtend($val)
    {
        $this->_propDict["canExtend"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isApprovalRequired
    *
    * @return bool The isApprovalRequired
    */
    public function getIsApprovalRequired()
    {
        if (array_key_exists("isApprovalRequired", $this->_propDict)) {
            return $this->_propDict["isApprovalRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isApprovalRequired
    *
    * @param bool $val The isApprovalRequired
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsApprovalRequired($val)
    {
        $this->_propDict["isApprovalRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isApprovalRequiredForExtension
    *
    * @return bool The isApprovalRequiredForExtension
    */
    public function getIsApprovalRequiredForExtension()
    {
        if (array_key_exists("isApprovalRequiredForExtension", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForExtension"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isApprovalRequiredForExtension
    *
    * @param bool $val The isApprovalRequiredForExtension
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsApprovalRequiredForExtension($val)
    {
        $this->_propDict["isApprovalRequiredForExtension"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isApproverJustificationRequired
    *
    * @return bool The isApproverJustificationRequired
    */
    public function getIsApproverJustificationRequired()
    {
        if (array_key_exists("isApproverJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isApproverJustificationRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isApproverJustificationRequired
    *
    * @param bool $val The isApproverJustificationRequired
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsApproverJustificationRequired($val)
    {
        $this->_propDict["isApproverJustificationRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the approvalTimeOutInDays
    *
    * @return int The approvalTimeOutInDays
    */
    public function getApprovalTimeOutInDays()
    {
        if (array_key_exists("approvalTimeOutInDays", $this->_propDict)) {
            return $this->_propDict["approvalTimeOutInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the approvalTimeOutInDays
    *
    * @param int $val The approvalTimeOutInDays
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setApprovalTimeOutInDays($val)
    {
        $this->_propDict["approvalTimeOutInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isRequestorJustificationRequired
    *
    * @return bool The isRequestorJustificationRequired
    */
    public function getIsRequestorJustificationRequired()
    {
        if (array_key_exists("isRequestorJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isRequestorJustificationRequired"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRequestorJustificationRequired
    *
    * @param bool $val The isRequestorJustificationRequired
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setIsRequestorJustificationRequired($val)
    {
        $this->_propDict["isRequestorJustificationRequired"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the durationInDays
    *
    * @return int The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the durationInDays
    *
    * @param int $val The durationInDays
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = intval($val);
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
    * @return AccessPackageAssignmentPolicy
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    *
    * @return string The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            return $this->_propDict["createdBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the createdBy
    *
    * @param string $val The createdBy
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
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
    * @return AccessPackageAssignmentPolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedBy
    *
    * @return string The modifiedBy
    */
    public function getModifiedBy()
    {
        if (array_key_exists("modifiedBy", $this->_propDict)) {
            return $this->_propDict["modifiedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modifiedBy
    *
    * @param string $val The modifiedBy
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setModifiedBy($val)
    {
        $this->_propDict["modifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the subjectsScope
     *
     * @return array The subjectsScope
     */
    public function getSubjectsScope()
    {
        if (array_key_exists("subjectsScope", $this->_propDict)) {
           return $this->_propDict["subjectsScope"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the subjectsScope
    *
    * @param AccessPackageSubject $val The subjectsScope
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setSubjectsScope($val)
    {
		$this->_propDict["subjectsScope"] = $val;
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
            if (is_a($this->_propDict["accessPackage"], "Microsoft\Graph\Beta\Model\AccessPackage")) {
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
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageCatalog
    *
    * @return AccessPackageCatalog The accessPackageCatalog
    */
    public function getAccessPackageCatalog()
    {
        if (array_key_exists("accessPackageCatalog", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageCatalog"], "Microsoft\Graph\Beta\Model\AccessPackageCatalog")) {
                return $this->_propDict["accessPackageCatalog"];
            } else {
                $this->_propDict["accessPackageCatalog"] = new AccessPackageCatalog($this->_propDict["accessPackageCatalog"]);
                return $this->_propDict["accessPackageCatalog"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageCatalog
    *
    * @param AccessPackageCatalog $val The accessPackageCatalog
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setAccessPackageCatalog($val)
    {
        $this->_propDict["accessPackageCatalog"] = $val;
        return $this;
    }
    

     /** 
     * Gets the approvers
     *
     * @return array The approvers
     */
    public function getApprovers()
    {
        if (array_key_exists("approvers", $this->_propDict)) {
           return $this->_propDict["approvers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the approvers
    *
    * @param AccessPackageSubject $val The approvers
    *
    * @return AccessPackageAssignmentPolicy
    */
    public function setApprovers($val)
    {
		$this->_propDict["approvers"] = $val;
        return $this;
    }
    
}
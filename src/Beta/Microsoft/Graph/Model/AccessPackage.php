<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackage File
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
* AccessPackage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackage extends Entity
{
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
    * @return AccessPackage
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
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
    * @return AccessPackage
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
    * @return AccessPackage
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
    * @return AccessPackage
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
    * @return AccessPackage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isHidden
    *
    * @return bool The isHidden
    */
    public function getIsHidden()
    {
        if (array_key_exists("isHidden", $this->_propDict)) {
            return $this->_propDict["isHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isHidden
    *
    * @param bool $val The isHidden
    *
    * @return AccessPackage
    */
    public function setIsHidden($val)
    {
        $this->_propDict["isHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isRoleScopesVisible
    *
    * @return bool The isRoleScopesVisible
    */
    public function getIsRoleScopesVisible()
    {
        if (array_key_exists("isRoleScopesVisible", $this->_propDict)) {
            return $this->_propDict["isRoleScopesVisible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRoleScopesVisible
    *
    * @param bool $val The isRoleScopesVisible
    *
    * @return AccessPackage
    */
    public function setIsRoleScopesVisible($val)
    {
        $this->_propDict["isRoleScopesVisible"] = boolval($val);
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
    * @return AccessPackage
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
    * @return AccessPackage
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentPolicies
     *
     * @return array The accessPackageAssignmentPolicies
     */
    public function getAccessPackageAssignmentPolicies()
    {
        if (array_key_exists("accessPackageAssignmentPolicies", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentPolicies
    *
    * @param AccessPackageAssignmentPolicy $val The accessPackageAssignmentPolicies
    *
    * @return AccessPackage
    */
    public function setAccessPackageAssignmentPolicies($val)
    {
		$this->_propDict["accessPackageAssignmentPolicies"] = $val;
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
            if (is_a($this->_propDict["accessPackageCatalog"], "Beta\Microsoft\Graph\Model\AccessPackageCatalog")) {
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
    * @return AccessPackage
    */
    public function setAccessPackageCatalog($val)
    {
        $this->_propDict["accessPackageCatalog"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceRoleScopes
     *
     * @return array The accessPackageResourceRoleScopes
     */
    public function getAccessPackageResourceRoleScopes()
    {
        if (array_key_exists("accessPackageResourceRoleScopes", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRoleScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceRoleScopes
    *
    * @param AccessPackageResourceRoleScope $val The accessPackageResourceRoleScopes
    *
    * @return AccessPackage
    */
    public function setAccessPackageResourceRoleScopes($val)
    {
		$this->_propDict["accessPackageResourceRoleScopes"] = $val;
        return $this;
    }
    
}
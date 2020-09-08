<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageCatalog File
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
* AccessPackageCatalog class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageCatalog extends Entity
{
    /**
    * Gets the catalogStatus
    *
    * @return string The catalogStatus
    */
    public function getCatalogStatus()
    {
        if (array_key_exists("catalogStatus", $this->_propDict)) {
            return $this->_propDict["catalogStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogStatus
    *
    * @param string $val The catalogStatus
    *
    * @return AccessPackageCatalog
    */
    public function setCatalogStatus($val)
    {
        $this->_propDict["catalogStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the catalogType
    *
    * @return string The catalogType
    */
    public function getCatalogType()
    {
        if (array_key_exists("catalogType", $this->_propDict)) {
            return $this->_propDict["catalogType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogType
    *
    * @param string $val The catalogType
    *
    * @return AccessPackageCatalog
    */
    public function setCatalogType($val)
    {
        $this->_propDict["catalogType"] = $val;
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
    * @return AccessPackageCatalog
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
    * @return AccessPackageCatalog
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
    * @return AccessPackageCatalog
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
    * @return AccessPackageCatalog
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isExternallyVisible
    *
    * @return bool The isExternallyVisible
    */
    public function getIsExternallyVisible()
    {
        if (array_key_exists("isExternallyVisible", $this->_propDict)) {
            return $this->_propDict["isExternallyVisible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExternallyVisible
    *
    * @param bool $val The isExternallyVisible
    *
    * @return AccessPackageCatalog
    */
    public function setIsExternallyVisible($val)
    {
        $this->_propDict["isExternallyVisible"] = boolval($val);
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
    * @return AccessPackageCatalog
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
    * @return AccessPackageCatalog
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceRoles
     *
     * @return array The accessPackageResourceRoles
     */
    public function getAccessPackageResourceRoles()
    {
        if (array_key_exists("accessPackageResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceRoles
    *
    * @param AccessPackageResourceRole $val The accessPackageResourceRoles
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResourceRoles($val)
    {
		$this->_propDict["accessPackageResourceRoles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResources
     *
     * @return array The accessPackageResources
     */
    public function getAccessPackageResources()
    {
        if (array_key_exists("accessPackageResources", $this->_propDict)) {
           return $this->_propDict["accessPackageResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResources
    *
    * @param AccessPackageResource $val The accessPackageResources
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResources($val)
    {
		$this->_propDict["accessPackageResources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageResourceScopes
     *
     * @return array The accessPackageResourceScopes
     */
    public function getAccessPackageResourceScopes()
    {
        if (array_key_exists("accessPackageResourceScopes", $this->_propDict)) {
           return $this->_propDict["accessPackageResourceScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageResourceScopes
    *
    * @param AccessPackageResourceScope $val The accessPackageResourceScopes
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackageResourceScopes($val)
    {
		$this->_propDict["accessPackageResourceScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackages
     *
     * @return array The accessPackages
     */
    public function getAccessPackages()
    {
        if (array_key_exists("accessPackages", $this->_propDict)) {
           return $this->_propDict["accessPackages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackages
    *
    * @param AccessPackage $val The accessPackages
    *
    * @return AccessPackageCatalog
    */
    public function setAccessPackages($val)
    {
		$this->_propDict["accessPackages"] = $val;
        return $this;
    }
    
}
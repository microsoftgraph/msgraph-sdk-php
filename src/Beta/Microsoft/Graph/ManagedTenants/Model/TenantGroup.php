<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* TenantGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantGroup extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the allTenantsIncluded
    *
    * @return bool|null The allTenantsIncluded
    */
    public function getAllTenantsIncluded()
    {
        if (array_key_exists("allTenantsIncluded", $this->_propDict)) {
            return $this->_propDict["allTenantsIncluded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allTenantsIncluded
    *
    * @param bool $val The allTenantsIncluded
    *
    * @return TenantGroup
    */
    public function setAllTenantsIncluded($val)
    {
        $this->_propDict["allTenantsIncluded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
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
    * @return TenantGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementActions
     *
     * @return array|null The managementActions
     */
    public function getManagementActions()
    {
        if (array_key_exists("managementActions", $this->_propDict)) {
           return $this->_propDict["managementActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementActions
    *
    * @param ManagementActionInfo $val The managementActions
    *
    * @return TenantGroup
    */
    public function setManagementActions($val)
    {
        $this->_propDict["managementActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementIntents
     *
     * @return array|null The managementIntents
     */
    public function getManagementIntents()
    {
        if (array_key_exists("managementIntents", $this->_propDict)) {
           return $this->_propDict["managementIntents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managementIntents
    *
    * @param ManagementIntentInfo $val The managementIntents
    *
    * @return TenantGroup
    */
    public function setManagementIntents($val)
    {
        $this->_propDict["managementIntents"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantIds
    *
    * @return string|null The tenantIds
    */
    public function getTenantIds()
    {
        if (array_key_exists("tenantIds", $this->_propDict)) {
            return $this->_propDict["tenantIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantIds
    *
    * @param string $val The tenantIds
    *
    * @return TenantGroup
    */
    public function setTenantIds($val)
    {
        $this->_propDict["tenantIds"] = $val;
        return $this;
    }
    
}

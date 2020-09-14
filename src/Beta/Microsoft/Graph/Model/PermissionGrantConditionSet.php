<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionGrantConditionSet File
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
* PermissionGrantConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionGrantConditionSet extends Entity
{
    /**
    * Gets the clientApplicationIds
    *
    * @return string The clientApplicationIds
    */
    public function getClientApplicationIds()
    {
        if (array_key_exists("clientApplicationIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationIds
    *
    * @param string $val The clientApplicationIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationIds($val)
    {
        $this->_propDict["clientApplicationIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientApplicationPublisherIds
    *
    * @return string The clientApplicationPublisherIds
    */
    public function getClientApplicationPublisherIds()
    {
        if (array_key_exists("clientApplicationPublisherIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationPublisherIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationPublisherIds
    *
    * @param string $val The clientApplicationPublisherIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationPublisherIds($val)
    {
        $this->_propDict["clientApplicationPublisherIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientApplicationsFromVerifiedPublisherOnly
    *
    * @return bool The clientApplicationsFromVerifiedPublisherOnly
    */
    public function getClientApplicationsFromVerifiedPublisherOnly()
    {
        if (array_key_exists("clientApplicationsFromVerifiedPublisherOnly", $this->_propDict)) {
            return $this->_propDict["clientApplicationsFromVerifiedPublisherOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationsFromVerifiedPublisherOnly
    *
    * @param bool $val The clientApplicationsFromVerifiedPublisherOnly
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationsFromVerifiedPublisherOnly($val)
    {
        $this->_propDict["clientApplicationsFromVerifiedPublisherOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the clientApplicationTenantIds
    *
    * @return string The clientApplicationTenantIds
    */
    public function getClientApplicationTenantIds()
    {
        if (array_key_exists("clientApplicationTenantIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationTenantIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationTenantIds
    *
    * @param string $val The clientApplicationTenantIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationTenantIds($val)
    {
        $this->_propDict["clientApplicationTenantIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionClassification
    *
    * @return string The permissionClassification
    */
    public function getPermissionClassification()
    {
        if (array_key_exists("permissionClassification", $this->_propDict)) {
            return $this->_propDict["permissionClassification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionClassification
    *
    * @param string $val The permissionClassification
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissionClassification($val)
    {
        $this->_propDict["permissionClassification"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissions
    *
    * @return string The permissions
    */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict)) {
            return $this->_propDict["permissions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissions
    *
    * @param string $val The permissions
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissions($val)
    {
        $this->_propDict["permissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionType
    *
    * @return PermissionType The permissionType
    */
    public function getPermissionType()
    {
        if (array_key_exists("permissionType", $this->_propDict)) {
            if (is_a($this->_propDict["permissionType"], "Beta\Microsoft\Graph\Model\PermissionType")) {
                return $this->_propDict["permissionType"];
            } else {
                $this->_propDict["permissionType"] = new PermissionType($this->_propDict["permissionType"]);
                return $this->_propDict["permissionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permissionType
    *
    * @param PermissionType $val The permissionType
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissionType($val)
    {
        $this->_propDict["permissionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceApplication
    *
    * @return string The resourceApplication
    */
    public function getResourceApplication()
    {
        if (array_key_exists("resourceApplication", $this->_propDict)) {
            return $this->_propDict["resourceApplication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceApplication
    *
    * @param string $val The resourceApplication
    *
    * @return PermissionGrantConditionSet
    */
    public function setResourceApplication($val)
    {
        $this->_propDict["resourceApplication"] = $val;
        return $this;
    }
    
}
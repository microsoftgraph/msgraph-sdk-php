<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateDetailedInfo File
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
* ManagementTemplateDetailedInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateDetailedInfo extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the category
    *
    * @return ManagementCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new ManagementCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param ManagementCategory $val The value to assign to the category
    *
    * @return ManagementTemplateDetailedInfo The ManagementTemplateDetailedInfo
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return ManagementTemplateDetailedInfo
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the managementTemplateId
    *
    * @return string|null The managementTemplateId
    */
    public function getManagementTemplateId()
    {
        if (array_key_exists("managementTemplateId", $this->_propDict)) {
            return $this->_propDict["managementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementTemplateId
    *
    * @param string $val The value of the managementTemplateId
    *
    * @return ManagementTemplateDetailedInfo
    */
    public function setManagementTemplateId($val)
    {
        $this->_propDict["managementTemplateId"] = $val;
        return $this;
    }
}

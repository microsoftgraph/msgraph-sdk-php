<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementTemplateStep File
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
* ManagementTemplateStep class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementTemplateStep extends \Beta\Microsoft\Graph\Model\Entity
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
    * @param ManagementCategory $val The category
    *
    * @return ManagementTemplateStep
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string|null The description
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
    * @return ManagementTemplateStep
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
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
    * @return ManagementTemplateStep
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementPortal
    *
    * @return string|null The managementPortal
    */
    public function getManagementPortal()
    {
        if (array_key_exists("managementPortal", $this->_propDict)) {
            return $this->_propDict["managementPortal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managementPortal
    *
    * @param string $val The managementPortal
    *
    * @return ManagementTemplateStep
    */
    public function setManagementPortal($val)
    {
        $this->_propDict["managementPortal"] = $val;
        return $this;
    }
    
    /**
    * Gets the portalLink
    *
    * @return string|null The portalLink
    */
    public function getPortalLink()
    {
        if (array_key_exists("portalLink", $this->_propDict)) {
            return $this->_propDict["portalLink"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the portalLink
    *
    * @param string $val The portalLink
    *
    * @return ManagementTemplateStep
    */
    public function setPortalLink($val)
    {
        $this->_propDict["portalLink"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    *
    * @param int $val The priority
    *
    * @return ManagementTemplateStep
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the provider
    *
    * @return ManagementProvider|null The provider
    */
    public function getProvider()
    {
        if (array_key_exists("provider", $this->_propDict)) {
            if (is_a($this->_propDict["provider"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementProvider") || is_null($this->_propDict["provider"])) {
                return $this->_propDict["provider"];
            } else {
                $this->_propDict["provider"] = new ManagementProvider($this->_propDict["provider"]);
                return $this->_propDict["provider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the provider
    *
    * @param ManagementProvider $val The provider
    *
    * @return ManagementTemplateStep
    */
    public function setProvider($val)
    {
        $this->_propDict["provider"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementTemplate
    *
    * @return ManagementTemplate|null The managementTemplate
    */
    public function getManagementTemplate()
    {
        if (array_key_exists("managementTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["managementTemplate"], "\Beta\Microsoft\Graph\ManagedTenants\Model\ManagementTemplate") || is_null($this->_propDict["managementTemplate"])) {
                return $this->_propDict["managementTemplate"];
            } else {
                $this->_propDict["managementTemplate"] = new ManagementTemplate($this->_propDict["managementTemplate"]);
                return $this->_propDict["managementTemplate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managementTemplate
    *
    * @param ManagementTemplate $val The managementTemplate
    *
    * @return ManagementTemplateStep
    */
    public function setManagementTemplate($val)
    {
        $this->_propDict["managementTemplate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the stepVersions
     *
     * @return array|null The stepVersions
     */
    public function getStepVersions()
    {
        if (array_key_exists("stepVersions", $this->_propDict)) {
           return $this->_propDict["stepVersions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the stepVersions
    *
    * @param ManagementTemplateStepVersion $val The stepVersions
    *
    * @return ManagementTemplateStep
    */
    public function setStepVersions($val)
    {
        $this->_propDict["stepVersions"] = $val;
        return $this;
    }
    
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleSetting File
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
* GovernanceRoleSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleSetting extends Entity
{
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return GovernanceRoleSetting
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    *
    * @return string The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleDefinitionId
    *
    * @param string $val The roleDefinitionId
    *
    * @return GovernanceRoleSetting
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefault
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    *
    * @param bool $val The isDefault
    *
    * @return GovernanceRoleSetting
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return GovernanceRoleSetting
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedBy
    *
    * @return string The lastUpdatedBy
    */
    public function getLastUpdatedBy()
    {
        if (array_key_exists("lastUpdatedBy", $this->_propDict)) {
            return $this->_propDict["lastUpdatedBy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastUpdatedBy
    *
    * @param string $val The lastUpdatedBy
    *
    * @return GovernanceRoleSetting
    */
    public function setLastUpdatedBy($val)
    {
        $this->_propDict["lastUpdatedBy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the adminEligibleSettings
     *
     * @return array The adminEligibleSettings
     */
    public function getAdminEligibleSettings()
    {
        if (array_key_exists("adminEligibleSettings", $this->_propDict)) {
           return $this->_propDict["adminEligibleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the adminEligibleSettings
    *
    * @param GovernanceRuleSetting $val The adminEligibleSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setAdminEligibleSettings($val)
    {
		$this->_propDict["adminEligibleSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the adminMemberSettings
     *
     * @return array The adminMemberSettings
     */
    public function getAdminMemberSettings()
    {
        if (array_key_exists("adminMemberSettings", $this->_propDict)) {
           return $this->_propDict["adminMemberSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the adminMemberSettings
    *
    * @param GovernanceRuleSetting $val The adminMemberSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setAdminMemberSettings($val)
    {
		$this->_propDict["adminMemberSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userEligibleSettings
     *
     * @return array The userEligibleSettings
     */
    public function getUserEligibleSettings()
    {
        if (array_key_exists("userEligibleSettings", $this->_propDict)) {
           return $this->_propDict["userEligibleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userEligibleSettings
    *
    * @param GovernanceRuleSetting $val The userEligibleSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setUserEligibleSettings($val)
    {
		$this->_propDict["userEligibleSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userMemberSettings
     *
     * @return array The userMemberSettings
     */
    public function getUserMemberSettings()
    {
        if (array_key_exists("userMemberSettings", $this->_propDict)) {
           return $this->_propDict["userMemberSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userMemberSettings
    *
    * @param GovernanceRuleSetting $val The userMemberSettings
    *
    * @return GovernanceRoleSetting
    */
    public function setUserMemberSettings($val)
    {
		$this->_propDict["userMemberSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    *
    * @return GovernanceRoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "Beta\Microsoft\Graph\Model\GovernanceRoleDefinition")) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new GovernanceRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    *
    * @param GovernanceRoleDefinition $val The roleDefinition
    *
    * @return GovernanceRoleSetting
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    *
    * @return GovernanceResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GovernanceResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    *
    * @param GovernanceResource $val The resource
    *
    * @return GovernanceRoleSetting
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceResource File
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
* GovernanceResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GovernanceResource extends Entity
{
    /**
    * Gets the externalId
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return GovernanceResource
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return GovernanceResource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
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
    * @return GovernanceResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return GovernanceResource
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredDateTime
    *
    * @return \DateTime The registeredDateTime
    */
    public function getRegisteredDateTime()
    {
        if (array_key_exists("registeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registeredDateTime"], "\DateTime")) {
                return $this->_propDict["registeredDateTime"];
            } else {
                $this->_propDict["registeredDateTime"] = new \DateTime($this->_propDict["registeredDateTime"]);
                return $this->_propDict["registeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registeredDateTime
    *
    * @param \DateTime $val The registeredDateTime
    *
    * @return GovernanceResource
    */
    public function setRegisteredDateTime($val)
    {
        $this->_propDict["registeredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredRoot
    *
    * @return string The registeredRoot
    */
    public function getRegisteredRoot()
    {
        if (array_key_exists("registeredRoot", $this->_propDict)) {
            return $this->_propDict["registeredRoot"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registeredRoot
    *
    * @param string $val The registeredRoot
    *
    * @return GovernanceResource
    */
    public function setRegisteredRoot($val)
    {
        $this->_propDict["registeredRoot"] = $val;
        return $this;
    }
    
    /**
    * Gets the parent
    *
    * @return GovernanceResource The parent
    */
    public function getParent()
    {
        if (array_key_exists("parent", $this->_propDict)) {
            if (is_a($this->_propDict["parent"], "Microsoft\Graph\Beta\Model\GovernanceResource")) {
                return $this->_propDict["parent"];
            } else {
                $this->_propDict["parent"] = new GovernanceResource($this->_propDict["parent"]);
                return $this->_propDict["parent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parent
    *
    * @param GovernanceResource $val The parent
    *
    * @return GovernanceResource
    */
    public function setParent($val)
    {
        $this->_propDict["parent"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    *
    * @param GovernanceRoleDefinition $val The roleDefinitions
    *
    * @return GovernanceResource
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    *
    * @param GovernanceRoleAssignment $val The roleAssignments
    *
    * @return GovernanceResource
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
     *
     * @return array The roleAssignmentRequests
     */
    public function getRoleAssignmentRequests()
    {
        if (array_key_exists("roleAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["roleAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentRequests
    *
    * @param GovernanceRoleAssignmentRequest $val The roleAssignmentRequests
    *
    * @return GovernanceResource
    */
    public function setRoleAssignmentRequests($val)
    {
		$this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleSettings
     *
     * @return array The roleSettings
     */
    public function getRoleSettings()
    {
        if (array_key_exists("roleSettings", $this->_propDict)) {
           return $this->_propDict["roleSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleSettings
    *
    * @param GovernanceRoleSetting $val The roleSettings
    *
    * @return GovernanceResource
    */
    public function setRoleSettings($val)
    {
		$this->_propDict["roleSettings"] = $val;
        return $this;
    }
    
}
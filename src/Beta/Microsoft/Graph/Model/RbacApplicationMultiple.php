<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplicationMultiple File
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
* RbacApplicationMultiple class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplicationMultiple extends Entity
{

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
    * @param UnifiedRoleDefinition $val The roleDefinitions
    *
    * @return RbacApplicationMultiple
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
    * @param UnifiedRoleAssignmentMultiple $val The roleAssignments
    *
    * @return RbacApplicationMultiple
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    
}
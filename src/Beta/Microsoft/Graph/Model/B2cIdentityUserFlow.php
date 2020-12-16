<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* B2cIdentityUserFlow File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* B2cIdentityUserFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class B2cIdentityUserFlow extends IdentityUserFlow
{

     /** 
     * Gets the identityProviders
     *
     * @return array The identityProviders
     */
    public function getIdentityProviders()
    {
        if (array_key_exists("identityProviders", $this->_propDict)) {
           return $this->_propDict["identityProviders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the identityProviders
    *
    * @param IdentityProvider $val The identityProviders
    *
    * @return B2cIdentityUserFlow
    */
    public function setIdentityProviders($val)
    {
		$this->_propDict["identityProviders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userAttributeAssignments
     *
     * @return array The userAttributeAssignments
     */
    public function getUserAttributeAssignments()
    {
        if (array_key_exists("userAttributeAssignments", $this->_propDict)) {
           return $this->_propDict["userAttributeAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userAttributeAssignments
    *
    * @param IdentityUserFlowAttributeAssignment $val The userAttributeAssignments
    *
    * @return B2cIdentityUserFlow
    */
    public function setUserAttributeAssignments($val)
    {
		$this->_propDict["userAttributeAssignments"] = $val;
        return $this;
    }
    
}
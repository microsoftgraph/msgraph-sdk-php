<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlowAttributeAssignment File
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
* IdentityUserFlowAttributeAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlowAttributeAssignment extends Entity
{
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
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOptional
    *
    * @return bool The isOptional
    */
    public function getIsOptional()
    {
        if (array_key_exists("isOptional", $this->_propDict)) {
            return $this->_propDict["isOptional"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOptional
    *
    * @param bool $val The isOptional
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setIsOptional($val)
    {
        $this->_propDict["isOptional"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requiresVerification
    *
    * @return bool The requiresVerification
    */
    public function getRequiresVerification()
    {
        if (array_key_exists("requiresVerification", $this->_propDict)) {
            return $this->_propDict["requiresVerification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requiresVerification
    *
    * @param bool $val The requiresVerification
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setRequiresVerification($val)
    {
        $this->_propDict["requiresVerification"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the userAttributeValues
     *
     * @return array The userAttributeValues
     */
    public function getUserAttributeValues()
    {
        if (array_key_exists("userAttributeValues", $this->_propDict)) {
           return $this->_propDict["userAttributeValues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userAttributeValues
    *
    * @param UserAttributeValuesItem $val The userAttributeValues
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserAttributeValues($val)
    {
		$this->_propDict["userAttributeValues"] = $val;
        return $this;
    }
    
    /**
    * Gets the userInputType
    *
    * @return IdentityUserFlowAttributeInputType The userInputType
    */
    public function getUserInputType()
    {
        if (array_key_exists("userInputType", $this->_propDict)) {
            if (is_a($this->_propDict["userInputType"], "Beta\Microsoft\Graph\Model\IdentityUserFlowAttributeInputType")) {
                return $this->_propDict["userInputType"];
            } else {
                $this->_propDict["userInputType"] = new IdentityUserFlowAttributeInputType($this->_propDict["userInputType"]);
                return $this->_propDict["userInputType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userInputType
    *
    * @param IdentityUserFlowAttributeInputType $val The userInputType
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserInputType($val)
    {
        $this->_propDict["userInputType"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAttribute
    *
    * @return IdentityUserFlowAttribute The userAttribute
    */
    public function getUserAttribute()
    {
        if (array_key_exists("userAttribute", $this->_propDict)) {
            if (is_a($this->_propDict["userAttribute"], "Beta\Microsoft\Graph\Model\IdentityUserFlowAttribute")) {
                return $this->_propDict["userAttribute"];
            } else {
                $this->_propDict["userAttribute"] = new IdentityUserFlowAttribute($this->_propDict["userAttribute"]);
                return $this->_propDict["userAttribute"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userAttribute
    *
    * @param IdentityUserFlowAttribute $val The userAttribute
    *
    * @return IdentityUserFlowAttributeAssignment
    */
    public function setUserAttribute($val)
    {
        $this->_propDict["userAttribute"] = $val;
        return $this;
    }
    
}
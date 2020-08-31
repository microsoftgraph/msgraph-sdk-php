<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RelatedPerson File
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
* RelatedPerson class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RelatedPerson extends Entity
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
    * @param string $val The value of the displayName
    *
    * @return RelatedPerson
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the relationship
    *
    * @return PersonRelationship The relationship
    */
    public function getRelationship()
    {
        if (array_key_exists("relationship", $this->_propDict)) {
            if (is_a($this->_propDict["relationship"], "Beta\Microsoft\Graph\Model\PersonRelationship")) {
                return $this->_propDict["relationship"];
            } else {
                $this->_propDict["relationship"] = new PersonRelationship($this->_propDict["relationship"]);
                return $this->_propDict["relationship"];
            }
        }
        return null;
    }

    /**
    * Sets the relationship
    *
    * @param PersonRelationship $val The value to assign to the relationship
    *
    * @return RelatedPerson The RelatedPerson
    */
    public function setRelationship($val)
    {
        $this->_propDict["relationship"] = $val;
         return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return RelatedPerson
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}

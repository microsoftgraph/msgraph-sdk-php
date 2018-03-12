<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Policy File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Policy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Policy extends DirectoryObject
{
    /**
    * Gets the alternativeIdentifier
    *
    * @return string The alternativeIdentifier
    */
    public function getAlternativeIdentifier()
    {
        if (array_key_exists("alternativeIdentifier", $this->_propDict)) {
            return $this->_propDict["alternativeIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternativeIdentifier
    *
    * @param string $val The alternativeIdentifier
    *
    * @return Policy
    */
    public function setAlternativeIdentifier($val)
    {
        $this->_propDict["alternativeIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the definition
    *
    * @return string The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            return $this->_propDict["definition"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the definition
    *
    * @param string $val The definition
    *
    * @return Policy
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
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
    * @return Policy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOrganizationDefault
    *
    * @return bool The isOrganizationDefault
    */
    public function getIsOrganizationDefault()
    {
        if (array_key_exists("isOrganizationDefault", $this->_propDict)) {
            return $this->_propDict["isOrganizationDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOrganizationDefault
    *
    * @param bool $val The isOrganizationDefault
    *
    * @return Policy
    */
    public function setIsOrganizationDefault($val)
    {
        $this->_propDict["isOrganizationDefault"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the keyCredentials
     *
     * @return array The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
           return $this->_propDict["keyCredentials"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the keyCredentials
    *
    * @param KeyCredential $val The keyCredentials
    *
    * @return Policy
    */
    public function setKeyCredentials($val)
    {
		$this->_propDict["keyCredentials"] = $val;
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
    * @return Policy
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appliesTo
     *
     * @return array The appliesTo
     */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
           return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliesTo
    *
    * @param DirectoryObject $val The appliesTo
    *
    * @return Policy
    */
    public function setAppliesTo($val)
    {
		$this->_propDict["appliesTo"] = $val;
        return $this;
    }
    
}
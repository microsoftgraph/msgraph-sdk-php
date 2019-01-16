<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitiveType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* SensitiveType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SensitiveType extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return SensitiveType
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
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
    * @return SensitiveType
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the rulePackageId
    *
    * @return string The rulePackageId
    */
    public function getRulePackageId()
    {
        if (array_key_exists("rulePackageId", $this->_propDict)) {
            return $this->_propDict["rulePackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rulePackageId
    *
    * @param string $val The rulePackageId
    *
    * @return SensitiveType
    */
    public function setRulePackageId($val)
    {
        $this->_propDict["rulePackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the rulePackageType
    *
    * @return string The rulePackageType
    */
    public function getRulePackageType()
    {
        if (array_key_exists("rulePackageType", $this->_propDict)) {
            return $this->_propDict["rulePackageType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rulePackageType
    *
    * @param string $val The rulePackageType
    *
    * @return SensitiveType
    */
    public function setRulePackageType($val)
    {
        $this->_propDict["rulePackageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisherName
    *
    * @return string The publisherName
    */
    public function getPublisherName()
    {
        if (array_key_exists("publisherName", $this->_propDict)) {
            return $this->_propDict["publisherName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisherName
    *
    * @param string $val The publisherName
    *
    * @return SensitiveType
    */
    public function setPublisherName($val)
    {
        $this->_propDict["publisherName"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    *
    * @param string $val The state
    *
    * @return SensitiveType
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}
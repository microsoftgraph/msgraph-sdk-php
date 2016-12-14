<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VerifiedDomain File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* VerifiedDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VerifiedDomain extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * VerifiedDomain constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return VerifiedDomain
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the VerifiedDomain
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the capabilities
    *
    * @return string The capabilities
    */
    public function getCapabilities()
    {
        if (array_key_exists("capabilities", $this->_propDict)) {
            return $this->_propDict["capabilities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilities
    *
    * @param string $val The value of the capabilities
    *
    * @return VerifiedDomain
    */
    public function setCapabilities($val)
    {
        $this->_propDict["capabilities"] = $val;
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
    * @param bool $val The value of the isDefault
    *
    * @return VerifiedDomain
    */
    public function setIsDefault($val)
    {
        $this->_propDict["is_default"] = $val;
        return $this;
    }
    
    /**
    * Gets the isInitial
    *
    * @return bool The isInitial
    */
    public function getIsInitial()
    {
        if (array_key_exists("isInitial", $this->_propDict)) {
            return $this->_propDict["isInitial"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInitial
    *
    * @param bool $val The value of the isInitial
    *
    * @return VerifiedDomain
    */
    public function setIsInitial($val)
    {
        $this->_propDict["is_initial"] = $val;
        return $this;
    }
    
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
    * @param string $val The value of the name
    *
    * @return VerifiedDomain
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @param string $val The value of the type
    *
    * @return VerifiedDomain
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}

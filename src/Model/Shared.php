<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Shared File
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
* Shared class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Shared extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * Shared constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return Shared
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the Shared
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the owner
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "IdentitySet")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }

    /**
    * Sets the owner
    *
    * @param IdentitySet $val The value to assign to the owner
    *
    * @return Shared The Shared
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
         return $this;
    }
    
    /**
    * Gets the scope
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scope
    *
    * @param string $val The value of the scope
    *
    * @return Shared
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Property File
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
* Property class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Property extends Entity
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
    * @param string $val The value of the name
    *
    * @return Property
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the isSearchable
    *
    * @return bool The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSearchable
    *
    * @param bool $val The value of the isSearchable
    *
    * @return Property
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = $val;
        return $this;
    }
    /**
    * Gets the isRetrievable
    *
    * @return bool The isRetrievable
    */
    public function getIsRetrievable()
    {
        if (array_key_exists("isRetrievable", $this->_propDict)) {
            return $this->_propDict["isRetrievable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRetrievable
    *
    * @param bool $val The value of the isRetrievable
    *
    * @return Property
    */
    public function setIsRetrievable($val)
    {
        $this->_propDict["isRetrievable"] = $val;
        return $this;
    }
    /**
    * Gets the isQueryable
    *
    * @return bool The isQueryable
    */
    public function getIsQueryable()
    {
        if (array_key_exists("isQueryable", $this->_propDict)) {
            return $this->_propDict["isQueryable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isQueryable
    *
    * @param bool $val The value of the isQueryable
    *
    * @return Property
    */
    public function setIsQueryable($val)
    {
        $this->_propDict["isQueryable"] = $val;
        return $this;
    }
}

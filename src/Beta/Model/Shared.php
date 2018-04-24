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
namespace Microsoft\Graph\Beta\Model;
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
    * Gets the owner
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
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

    /**
    * Gets the sharedBy
    *
    * @return IdentitySet The sharedBy
    */
    public function getSharedBy()
    {
        if (array_key_exists("sharedBy", $this->_propDict)) {
            if (is_a($this->_propDict["sharedBy"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["sharedBy"];
            } else {
                $this->_propDict["sharedBy"] = new IdentitySet($this->_propDict["sharedBy"]);
                return $this->_propDict["sharedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedBy
    *
    * @param IdentitySet $val The value to assign to the sharedBy
    *
    * @return Shared The Shared
    */
    public function setSharedBy($val)
    {
        $this->_propDict["sharedBy"] = $val;
         return $this;
    }

    /**
    * Gets the sharedDateTime
    *
    * @return \DateTime The sharedDateTime
    */
    public function getSharedDateTime()
    {
        if (array_key_exists("sharedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["sharedDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["sharedDateTime"];
            } else {
                $this->_propDict["sharedDateTime"] = new \DateTime($this->_propDict["sharedDateTime"]);
                return $this->_propDict["sharedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedDateTime
    *
    * @param \DateTime $val The value to assign to the sharedDateTime
    *
    * @return Shared The Shared
    */
    public function setSharedDateTime($val)
    {
        $this->_propDict["sharedDateTime"] = $val;
         return $this;
    }
}

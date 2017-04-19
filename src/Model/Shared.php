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
    * Gets the owner
    * The identity of the owner of the shared item. Read-only.
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
    * The identity of the owner of the shared item. Read-only.
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
    * Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
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
    * Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
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

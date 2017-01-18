<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Permission File
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
* Permission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Permission extends Entity
{
    /**
    * Gets the property dictionary of the Permission
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the grantedTo
    *
    * @return IdentitySet The grantedTo
    */
    public function getGrantedTo()
    {
        if (array_key_exists("grantedTo", $this->_propDict)) {
            if (is_a($this->_propDict["grantedTo"], "IdentitySet")) {
                return $this->_propDict["grantedTo"];
            } else {
                $this->_propDict["grantedTo"] = new IdentitySet($this->_propDict["grantedTo"]);
                return $this->_propDict["grantedTo"];
            }
        }
        return null;
    }

    /**
    * Sets the grantedTo
    *
    * @param string $val The grantedTo
    *
    * @return Permission
    */
    public function setGrantedTo($val)
    {
        $this->_propDict["grantedTo"] = $val;
        return $this;
    }

    /**
    * Gets the invitation
    *
    * @return SharingInvitation The invitation
    */
    public function getInvitation()
    {
        if (array_key_exists("invitation", $this->_propDict)) {
            if (is_a($this->_propDict["invitation"], "SharingInvitation")) {
                return $this->_propDict["invitation"];
            } else {
                $this->_propDict["invitation"] = new SharingInvitation($this->_propDict["invitation"]);
                return $this->_propDict["invitation"];
            }
        }
        return null;
    }

    /**
    * Sets the invitation
    *
    * @param string $val The invitation
    *
    * @return Permission
    */
    public function setInvitation($val)
    {
        $this->_propDict["invitation"] = $val;
        return $this;
    }

    /**
    * Gets the inheritedFrom
    *
    * @return ItemReference The inheritedFrom
    */
    public function getInheritedFrom()
    {
        if (array_key_exists("inheritedFrom", $this->_propDict)) {
            if (is_a($this->_propDict["inheritedFrom"], "ItemReference")) {
                return $this->_propDict["inheritedFrom"];
            } else {
                $this->_propDict["inheritedFrom"] = new ItemReference($this->_propDict["inheritedFrom"]);
                return $this->_propDict["inheritedFrom"];
            }
        }
        return null;
    }

    /**
    * Sets the inheritedFrom
    *
    * @param string $val The inheritedFrom
    *
    * @return Permission
    */
    public function setInheritedFrom($val)
    {
        $this->_propDict["inheritedFrom"] = $val;
        return $this;
    }

    /**
    * Gets the link
    *
    * @return SharingLink The link
    */
    public function getLink()
    {
        if (array_key_exists("link", $this->_propDict)) {
            if (is_a($this->_propDict["link"], "SharingLink")) {
                return $this->_propDict["link"];
            } else {
                $this->_propDict["link"] = new SharingLink($this->_propDict["link"]);
                return $this->_propDict["link"];
            }
        }
        return null;
    }

    /**
    * Sets the link
    *
    * @param string $val The link
    *
    * @return Permission
    */
    public function setLink($val)
    {
        $this->_propDict["link"] = $val;
        return $this;
    }

    /**
    * Gets the roles
    *
    * @return string The roles
    */
    public function getRoles()
    {
        if (array_key_exists("roles", $this->_propDict)) {
            return $this->_propDict["roles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roles
    *
    * @param string $val The roles
    *
    * @return Permission
    */
    public function setRoles($val)
    {
        $this->_propDict["roles"] = $val;
        return $this;
    }

    /**
    * Gets the shareId
    *
    * @return string The shareId
    */
    public function getShareId()
    {
        if (array_key_exists("shareId", $this->_propDict)) {
            return $this->_propDict["shareId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shareId
    *
    * @param string $val The shareId
    *
    * @return Permission
    */
    public function setShareId($val)
    {
        $this->_propDict["shareId"] = $val;
        return $this;
    }
}
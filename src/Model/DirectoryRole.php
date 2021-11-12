<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryRole File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* DirectoryRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DirectoryRole extends DirectoryObject
{
    /**
    * Gets the description
    * The description for the directory role. Read-only.
    *
    * @return string|null The description
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
    * The description for the directory role. Read-only.
    *
    * @param string $val The description
    *
    * @return DirectoryRole
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the directory role. Read-only.
    *
    * @return string|null The displayName
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
    * The display name for the directory role. Read-only.
    *
    * @param string $val The displayName
    *
    * @return DirectoryRole
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the roleTemplateId
    * The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only.
    *
    * @return string|null The roleTemplateId
    */
    public function getRoleTemplateId()
    {
        if (array_key_exists("roleTemplateId", $this->_propDict)) {
            return $this->_propDict["roleTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleTemplateId
    * The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only.
    *
    * @param string $val The roleTemplateId
    *
    * @return DirectoryRole
    */
    public function setRoleTemplateId($val)
    {
        $this->_propDict["roleTemplateId"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable.
     *
     * @return DirectoryObject[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
            $members = [];
            if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'DirectoryObject')) {
                return $this->_propDict['members'];
            }
            foreach ($this->_propDict['members'] as $singleValue) {
                $members []= new DirectoryObject($singleValue);
            }
            $this->_propDict['members'] = $members;
            return $this->_propDict['members'];
        }
        return null;
    }

    /**
    * Sets the members
    * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable.
    *
    * @param DirectoryObject[] $val The members
    *
    * @return DirectoryRole
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the scopedMembers
    * Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     *
     * @return ScopedRoleMembership[]|null The scopedMembers
     */
    public function getScopedMembers()
    {
        if (array_key_exists('scopedMembers', $this->_propDict) && !is_null($this->_propDict['scopedMembers'])) {
            $scopedMembers = [];
            if (count($this->_propDict['scopedMembers']) > 0 && is_a($this->_propDict['scopedMembers'][0], 'ScopedRoleMembership')) {
                return $this->_propDict['scopedMembers'];
            }
            foreach ($this->_propDict['scopedMembers'] as $singleValue) {
                $scopedMembers []= new ScopedRoleMembership($singleValue);
            }
            $this->_propDict['scopedMembers'] = $scopedMembers;
            return $this->_propDict['scopedMembers'];
        }
        return null;
    }

    /**
    * Sets the scopedMembers
    * Members of this directory role that are scoped to administrative units. Read-only. Nullable.
    *
    * @param ScopedRoleMembership[] $val The scopedMembers
    *
    * @return DirectoryRole
    */
    public function setScopedMembers($val)
    {
        $this->_propDict["scopedMembers"] = $val;
        return $this;
    }

}

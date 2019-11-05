<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarPermission File
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
* CalendarPermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CalendarPermission extends Entity
{
    /**
    * Gets the emailAddress
    *
    * @return EmailAddress The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "Microsoft\Graph\Beta\Model\EmailAddress")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddress($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddress
    *
    * @param EmailAddress $val The emailAddress
    *
    * @return CalendarPermission
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the isRemovable
    *
    * @return bool The isRemovable
    */
    public function getIsRemovable()
    {
        if (array_key_exists("isRemovable", $this->_propDict)) {
            return $this->_propDict["isRemovable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isRemovable
    *
    * @param bool $val The isRemovable
    *
    * @return CalendarPermission
    */
    public function setIsRemovable($val)
    {
        $this->_propDict["isRemovable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isInsideOrganization
    *
    * @return bool The isInsideOrganization
    */
    public function getIsInsideOrganization()
    {
        if (array_key_exists("isInsideOrganization", $this->_propDict)) {
            return $this->_propDict["isInsideOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInsideOrganization
    *
    * @param bool $val The isInsideOrganization
    *
    * @return CalendarPermission
    */
    public function setIsInsideOrganization($val)
    {
        $this->_propDict["isInsideOrganization"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the role
    *
    * @return CalendarRoleType The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "Microsoft\Graph\Beta\Model\CalendarRoleType")) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new CalendarRoleType($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }
    
    /**
    * Sets the role
    *
    * @param CalendarRoleType $val The role
    *
    * @return CalendarPermission
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    

     /** 
     * Gets the allowedRoles
     *
     * @return array The allowedRoles
     */
    public function getAllowedRoles()
    {
        if (array_key_exists("allowedRoles", $this->_propDict)) {
           return $this->_propDict["allowedRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the allowedRoles
    *
    * @param CalendarRoleType $val The allowedRoles
    *
    * @return CalendarPermission
    */
    public function setAllowedRoles($val)
    {
		$this->_propDict["allowedRoles"] = $val;
        return $this;
    }
    
}
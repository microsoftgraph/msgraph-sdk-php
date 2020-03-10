<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppRoleAssignment File
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
* AppRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AppRoleAssignment extends DirectoryObject
{
    /**
    * Gets the appRoleId
    *
    * @return string The appRoleId
    */
    public function getAppRoleId()
    {
        if (array_key_exists("appRoleId", $this->_propDict)) {
            return $this->_propDict["appRoleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appRoleId
    *
    * @param string $val The appRoleId
    *
    * @return AppRoleAssignment
    */
    public function setAppRoleId($val)
    {
        $this->_propDict["appRoleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AppRoleAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalDisplayName
    *
    * @return string The principalDisplayName
    */
    public function getPrincipalDisplayName()
    {
        if (array_key_exists("principalDisplayName", $this->_propDict)) {
            return $this->_propDict["principalDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalDisplayName
    *
    * @param string $val The principalDisplayName
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalDisplayName($val)
    {
        $this->_propDict["principalDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalId
    *
    * @return string The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalId
    *
    * @param string $val The principalId
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalType
    *
    * @return string The principalType
    */
    public function getPrincipalType()
    {
        if (array_key_exists("principalType", $this->_propDict)) {
            return $this->_propDict["principalType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalType
    *
    * @param string $val The principalType
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalType($val)
    {
        $this->_propDict["principalType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceDisplayName
    *
    * @return string The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceDisplayName
    *
    * @param string $val The resourceDisplayName
    *
    * @return AppRoleAssignment
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return AppRoleAssignment
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
}
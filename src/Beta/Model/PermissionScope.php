<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionScope File
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
* PermissionScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PermissionScope extends Entity
{
    /**
    * Gets the adminConsentDescription
    *
    * @return string The adminConsentDescription
    */
    public function getAdminConsentDescription()
    {
        if (array_key_exists("adminConsentDescription", $this->_propDict)) {
            return $this->_propDict["adminConsentDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the adminConsentDescription
    *
    * @param string $val The value of the adminConsentDescription
    *
    * @return PermissionScope
    */
    public function setAdminConsentDescription($val)
    {
        $this->_propDict["adminConsentDescription"] = $val;
        return $this;
    }
    /**
    * Gets the adminConsentDisplayName
    *
    * @return string The adminConsentDisplayName
    */
    public function getAdminConsentDisplayName()
    {
        if (array_key_exists("adminConsentDisplayName", $this->_propDict)) {
            return $this->_propDict["adminConsentDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the adminConsentDisplayName
    *
    * @param string $val The value of the adminConsentDisplayName
    *
    * @return PermissionScope
    */
    public function setAdminConsentDisplayName($val)
    {
        $this->_propDict["adminConsentDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return PermissionScope
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The value of the isEnabled
    *
    * @return PermissionScope
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the origin
    *
    * @return string The origin
    */
    public function getOrigin()
    {
        if (array_key_exists("origin", $this->_propDict)) {
            return $this->_propDict["origin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the origin
    *
    * @param string $val The value of the origin
    *
    * @return PermissionScope
    */
    public function setOrigin($val)
    {
        $this->_propDict["origin"] = $val;
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
    * @return PermissionScope
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the userConsentDescription
    *
    * @return string The userConsentDescription
    */
    public function getUserConsentDescription()
    {
        if (array_key_exists("userConsentDescription", $this->_propDict)) {
            return $this->_propDict["userConsentDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userConsentDescription
    *
    * @param string $val The value of the userConsentDescription
    *
    * @return PermissionScope
    */
    public function setUserConsentDescription($val)
    {
        $this->_propDict["userConsentDescription"] = $val;
        return $this;
    }
    /**
    * Gets the userConsentDisplayName
    *
    * @return string The userConsentDisplayName
    */
    public function getUserConsentDisplayName()
    {
        if (array_key_exists("userConsentDisplayName", $this->_propDict)) {
            return $this->_propDict["userConsentDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userConsentDisplayName
    *
    * @param string $val The value of the userConsentDisplayName
    *
    * @return PermissionScope
    */
    public function setUserConsentDisplayName($val)
    {
        $this->_propDict["userConsentDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the value
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param string $val The value of the value
    *
    * @return PermissionScope
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}

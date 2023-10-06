<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpRole File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* GcpRole class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpRole extends Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return GcpRole
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    *
    * @param string $val The externalId
    *
    * @return GcpRole
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the gcpRoleType
    *
    * @return GcpRoleType|null The gcpRoleType
    */
    public function getGcpRoleType()
    {
        if (array_key_exists("gcpRoleType", $this->_propDict)) {
            if (is_a($this->_propDict["gcpRoleType"], "\Beta\Microsoft\Graph\Model\GcpRoleType") || is_null($this->_propDict["gcpRoleType"])) {
                return $this->_propDict["gcpRoleType"];
            } else {
                $this->_propDict["gcpRoleType"] = new GcpRoleType($this->_propDict["gcpRoleType"]);
                return $this->_propDict["gcpRoleType"];
            }
        }
        return null;
    }

    /**
    * Sets the gcpRoleType
    *
    * @param GcpRoleType $val The gcpRoleType
    *
    * @return GcpRole
    */
    public function setGcpRoleType($val)
    {
        $this->_propDict["gcpRoleType"] = $val;
        return $this;
    }


     /**
     * Gets the scopes
     *
     * @return array|null The scopes
     */
    public function getScopes()
    {
        if (array_key_exists("scopes", $this->_propDict)) {
           return $this->_propDict["scopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scopes
    *
    * @param GcpScope[] $val The scopes
    *
    * @return GcpRole
    */
    public function setScopes($val)
    {
        $this->_propDict["scopes"] = $val;
        return $this;
    }

}

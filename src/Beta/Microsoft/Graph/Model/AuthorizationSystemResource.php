<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemResource File
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
* AuthorizationSystemResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemResource extends Entity
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
    * @return AuthorizationSystemResource
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
    * @return AuthorizationSystemResource
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceType
    *
    * @return string|null The resourceType
    */
    public function getResourceType()
    {
        if (array_key_exists("resourceType", $this->_propDict)) {
            return $this->_propDict["resourceType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceType
    *
    * @param string $val The resourceType
    *
    * @return AuthorizationSystemResource
    */
    public function setResourceType($val)
    {
        $this->_propDict["resourceType"] = $val;
        return $this;
    }

    /**
    * Gets the authorizationSystem
    *
    * @return AuthorizationSystem|null The authorizationSystem
    */
    public function getAuthorizationSystem()
    {
        if (array_key_exists("authorizationSystem", $this->_propDict)) {
            if (is_a($this->_propDict["authorizationSystem"], "\Beta\Microsoft\Graph\Model\AuthorizationSystem") || is_null($this->_propDict["authorizationSystem"])) {
                return $this->_propDict["authorizationSystem"];
            } else {
                $this->_propDict["authorizationSystem"] = new AuthorizationSystem($this->_propDict["authorizationSystem"]);
                return $this->_propDict["authorizationSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the authorizationSystem
    *
    * @param AuthorizationSystem $val The authorizationSystem
    *
    * @return AuthorizationSystemResource
    */
    public function setAuthorizationSystem($val)
    {
        $this->_propDict["authorizationSystem"] = $val;
        return $this;
    }

}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemIdentity File
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
* AuthorizationSystemIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemIdentity extends Entity
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
    * @return AuthorizationSystemIdentity
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
    * @return AuthorizationSystemIdentity
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return AuthorizationSystemIdentitySource|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemIdentitySource") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new AuthorizationSystemIdentitySource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param AuthorizationSystemIdentitySource $val The source
    *
    * @return AuthorizationSystemIdentity
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
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
    * @return AuthorizationSystemIdentity
    */
    public function setAuthorizationSystem($val)
    {
        $this->_propDict["authorizationSystem"] = $val;
        return $this;
    }

}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OAuth2PermissionGrant File
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
* OAuth2PermissionGrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OAuth2PermissionGrant extends Entity
{
    /**
    * Gets the clientId
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientId
    *
    * @param string $val The clientId
    *
    * @return OAuth2PermissionGrant
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    
    /**
    * Gets the consentType
    *
    * @return string The consentType
    */
    public function getConsentType()
    {
        if (array_key_exists("consentType", $this->_propDict)) {
            return $this->_propDict["consentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consentType
    *
    * @param string $val The consentType
    *
    * @return OAuth2PermissionGrant
    */
    public function setConsentType($val)
    {
        $this->_propDict["consentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the expiryTime
    *
    * @return \DateTime The expiryTime
    */
    public function getExpiryTime()
    {
        if (array_key_exists("expiryTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryTime"], "\DateTime")) {
                return $this->_propDict["expiryTime"];
            } else {
                $this->_propDict["expiryTime"] = new \DateTime($this->_propDict["expiryTime"]);
                return $this->_propDict["expiryTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiryTime
    *
    * @param \DateTime $val The expiryTime
    *
    * @return OAuth2PermissionGrant
    */
    public function setExpiryTime($val)
    {
        $this->_propDict["expiryTime"] = $val;
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
    * @return OAuth2PermissionGrant
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
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
    * @return OAuth2PermissionGrant
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
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
    * @param string $val The scope
    *
    * @return OAuth2PermissionGrant
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the startTime
    *
    * @return \DateTime The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\DateTime")) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new \DateTime($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startTime
    *
    * @param \DateTime $val The startTime
    *
    * @return OAuth2PermissionGrant
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
        return $this;
    }
    
}
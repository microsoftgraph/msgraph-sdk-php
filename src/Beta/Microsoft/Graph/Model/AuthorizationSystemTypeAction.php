<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystemTypeAction File
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
* AuthorizationSystemTypeAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystemTypeAction extends Entity
{
    /**
    * Gets the actionType
    *
    * @return AuthorizationSystemActionType|null The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            if (is_a($this->_propDict["actionType"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemActionType") || is_null($this->_propDict["actionType"])) {
                return $this->_propDict["actionType"];
            } else {
                $this->_propDict["actionType"] = new AuthorizationSystemActionType($this->_propDict["actionType"]);
                return $this->_propDict["actionType"];
            }
        }
        return null;
    }

    /**
    * Sets the actionType
    *
    * @param AuthorizationSystemActionType $val The actionType
    *
    * @return AuthorizationSystemTypeAction
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
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
    * @return AuthorizationSystemTypeAction
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the resourceTypes
    *
    * @return array|null The resourceTypes
    */
    public function getResourceTypes()
    {
        if (array_key_exists("resourceTypes", $this->_propDict)) {
            return $this->_propDict["resourceTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceTypes
    *
    * @param string[] $val The resourceTypes
    *
    * @return AuthorizationSystemTypeAction
    */
    public function setResourceTypes($val)
    {
        $this->_propDict["resourceTypes"] = $val;
        return $this;
    }

    /**
    * Gets the severity
    *
    * @return AuthorizationSystemActionSeverity|null The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            if (is_a($this->_propDict["severity"], "\Beta\Microsoft\Graph\Model\AuthorizationSystemActionSeverity") || is_null($this->_propDict["severity"])) {
                return $this->_propDict["severity"];
            } else {
                $this->_propDict["severity"] = new AuthorizationSystemActionSeverity($this->_propDict["severity"]);
                return $this->_propDict["severity"];
            }
        }
        return null;
    }

    /**
    * Sets the severity
    *
    * @param AuthorizationSystemActionSeverity $val The severity
    *
    * @return AuthorizationSystemTypeAction
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = $val;
        return $this;
    }

}

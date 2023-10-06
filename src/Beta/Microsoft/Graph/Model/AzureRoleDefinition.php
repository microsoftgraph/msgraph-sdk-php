<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureRoleDefinition File
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
* AzureRoleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureRoleDefinition extends Entity
{
    /**
    * Gets the assignableScopes
    *
    * @return array|null The assignableScopes
    */
    public function getAssignableScopes()
    {
        if (array_key_exists("assignableScopes", $this->_propDict)) {
            return $this->_propDict["assignableScopes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignableScopes
    *
    * @param string[] $val The assignableScopes
    *
    * @return AzureRoleDefinition
    */
    public function setAssignableScopes($val)
    {
        $this->_propDict["assignableScopes"] = $val;
        return $this;
    }

    /**
    * Gets the azureRoleDefinitionType
    *
    * @return AzureRoleDefinitionType|null The azureRoleDefinitionType
    */
    public function getAzureRoleDefinitionType()
    {
        if (array_key_exists("azureRoleDefinitionType", $this->_propDict)) {
            if (is_a($this->_propDict["azureRoleDefinitionType"], "\Beta\Microsoft\Graph\Model\AzureRoleDefinitionType") || is_null($this->_propDict["azureRoleDefinitionType"])) {
                return $this->_propDict["azureRoleDefinitionType"];
            } else {
                $this->_propDict["azureRoleDefinitionType"] = new AzureRoleDefinitionType($this->_propDict["azureRoleDefinitionType"]);
                return $this->_propDict["azureRoleDefinitionType"];
            }
        }
        return null;
    }

    /**
    * Sets the azureRoleDefinitionType
    *
    * @param AzureRoleDefinitionType $val The azureRoleDefinitionType
    *
    * @return AzureRoleDefinition
    */
    public function setAzureRoleDefinitionType($val)
    {
        $this->_propDict["azureRoleDefinitionType"] = $val;
        return $this;
    }

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
    * @return AzureRoleDefinition
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
    * @return AzureRoleDefinition
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

}

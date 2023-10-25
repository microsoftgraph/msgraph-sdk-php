<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtensionProperty File
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
* ExtensionProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExtensionProperty extends DirectoryObject
{
    /**
    * Gets the appDisplayName
    * Display name of the application object on which this extension property is defined. Read-only.
    *
    * @return string|null The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appDisplayName
    * Display name of the application object on which this extension property is defined. Read-only.
    *
    * @param string $val The appDisplayName
    *
    * @return ExtensionProperty
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the dataType
    * Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
    *
    * @return string|null The dataType
    */
    public function getDataType()
    {
        if (array_key_exists("dataType", $this->_propDict)) {
            return $this->_propDict["dataType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataType
    * Specifies the data type of the value the extension property can hold. Following values are supported. Not nullable. Binary - 256 bytes maximumBooleanDateTime - Must be specified in ISO 8601 format. Will be stored in UTC.Integer - 32-bit value.LargeInteger - 64-bit value.String - 256 characters maximum
    *
    * @param string $val The dataType
    *
    * @return ExtensionProperty
    */
    public function setDataType($val)
    {
        $this->_propDict["dataType"] = $val;
        return $this;
    }

    /**
    * Gets the isMultiValued
    * Defines the directory extension as a multi-valued property. When true, the directory extension property can store a collection of objects of the dataType; for example, a collection of integers. The default value is false.
    *
    * @return bool|null The isMultiValued
    */
    public function getIsMultiValued()
    {
        if (array_key_exists("isMultiValued", $this->_propDict)) {
            return $this->_propDict["isMultiValued"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMultiValued
    * Defines the directory extension as a multi-valued property. When true, the directory extension property can store a collection of objects of the dataType; for example, a collection of integers. The default value is false.
    *
    * @param bool $val The isMultiValued
    *
    * @return ExtensionProperty
    */
    public function setIsMultiValued($val)
    {
        $this->_propDict["isMultiValued"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isSyncedFromOnPremises
    * Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only.
    *
    * @return bool|null The isSyncedFromOnPremises
    */
    public function getIsSyncedFromOnPremises()
    {
        if (array_key_exists("isSyncedFromOnPremises", $this->_propDict)) {
            return $this->_propDict["isSyncedFromOnPremises"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSyncedFromOnPremises
    * Indicates if this extension property was synced from on-premises active directory using Microsoft Entra Connect. Read-only.
    *
    * @param bool $val The isSyncedFromOnPremises
    *
    * @return ExtensionProperty
    */
    public function setIsSyncedFromOnPremises($val)
    {
        $this->_propDict["isSyncedFromOnPremises"] = boolval($val);
        return $this;
    }

    /**
    * Gets the name
    * Name of the extension property. Not nullable. Supports $filter (eq).
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the extension property. Not nullable. Supports $filter (eq).
    *
    * @param string $val The name
    *
    * @return ExtensionProperty
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the targetObjects
    * Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
    *
    * @return array|null The targetObjects
    */
    public function getTargetObjects()
    {
        if (array_key_exists("targetObjects", $this->_propDict)) {
            return $this->_propDict["targetObjects"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetObjects
    * Following values are supported. Not nullable. UserGroupAdministrativeUnitApplicationDeviceOrganization
    *
    * @param string[] $val The targetObjects
    *
    * @return ExtensionProperty
    */
    public function setTargetObjects($val)
    {
        $this->_propDict["targetObjects"] = $val;
        return $this;
    }

}

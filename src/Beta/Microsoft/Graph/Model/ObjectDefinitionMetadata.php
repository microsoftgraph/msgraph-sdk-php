<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectDefinitionMetadata File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ObjectDefinitionMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObjectDefinitionMetadata extends Enum
{
    /**
    * The Enum ObjectDefinitionMetadata
    */
    const PROPERTY_NAME_ACCOUNT_ENABLED = "propertyNameAccountEnabled";
    const PROPERTY_NAME_SOFT_DELETED = "propertyNameSoftDeleted";
    const IS_SOFT_DELETION_SUPPORTED = "isSoftDeletionSupported";
    const IS_SYNCHRONIZE_ALL_SUPPORTED = "isSynchronizeAllSupported";
    const CONNECTOR_DATA_STORAGE_REQUIRED = "connectorDataStorageRequired";
    const EXTENSIONS = "extensions";
    const BASE_OBJECT_NAME = "baseObjectName";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DirectoryDefinitionDiscoverabilities File
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

use Microsoft\Graph\Core\Enum;

/**
* DirectoryDefinitionDiscoverabilities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DirectoryDefinitionDiscoverabilities extends Enum
{
    /**
    * The Enum DirectoryDefinitionDiscoverabilities
    */
    const NONE = "none";
    const ATTRIBUTE_NAMES = "attributeNames";
    const ATTRIBUTE_DATA_TYPES = "attributeDataTypes";
    const ATTRIBUTE_READ_ONLY = "attributeReadOnly";
    const REFERENCE_ATTRIBUTES = "referenceAttributes";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
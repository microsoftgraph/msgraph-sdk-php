<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataCollectionScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

use Microsoft\Graph\Core\Enum;

/**
* DataCollectionScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataCollectionScope extends Enum
{
    /**
    * The Enum DataCollectionScope
    */
    const ALL_VERSIONS = "allVersions";
    const CONVERSATIONS = "conversations";
    const LINKED_FILES = "linkedFiles";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
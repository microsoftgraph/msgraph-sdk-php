<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PropertyType File
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
* PropertyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PropertyType extends Enum
{
    /**
    * The Enum PropertyType
    */
    const GRAPHSTRING = "string";
    const INT64 = "int64";
    const DOUBLE = "double";
    const DATE_TIME = "dateTime";
    const BOOLEAN = "boolean";
    const COLLECTION(STRING) = "collection(String)";
    const COLLECTION(INT64) = "collection(Int64)";
    const COLLECTION(DOUBLE) = "collection(Double)";
    const COLLECTION(DATE_TIME) = "collection(DateTime)";
}
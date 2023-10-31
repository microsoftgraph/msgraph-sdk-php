<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GcpAccessType File
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
* GcpAccessType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GcpAccessType extends Enum
{
    /**
    * The Enum GcpAccessType
    */
    const GRAPHPUBLIC = "public";
    const SUBJECT_TO_OBJECT_ACLS = "subjectToObjectAcls";
    const GRAPHPRIVATE = "private";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

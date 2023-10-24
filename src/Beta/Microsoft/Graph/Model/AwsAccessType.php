<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsAccessType File
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
* AwsAccessType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsAccessType extends Enum
{
    /**
    * The Enum AwsAccessType
    */
    const GRAPHPUBLIC = "public";
    const RESTRICTED = "restricted";
    const CROSS_ACCOUNT = "crossAccount";
    const GRAPHPRIVATE = "private";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

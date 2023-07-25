<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HuntingRuleRunStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

use Microsoft\Graph\Core\Enum;

/**
* HuntingRuleRunStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HuntingRuleRunStatus extends Enum
{
    /**
    * The Enum HuntingRuleRunStatus
    */
    const RUNNING = "running";
    const COMPLETED = "completed";
    const FAILED = "failed";
    const PARTIALLY_FAILED = "partiallyFailed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

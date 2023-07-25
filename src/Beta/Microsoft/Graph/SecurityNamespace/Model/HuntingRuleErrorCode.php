<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HuntingRuleErrorCode File
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
* HuntingRuleErrorCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HuntingRuleErrorCode extends Enum
{
    /**
    * The Enum HuntingRuleErrorCode
    */
    const QUERY_EXECUTION_FAILED = "queryExecutionFailed";
    const QUERY_EXECUTION_THROTTLING = "queryExecutionThrottling";
    const QUERY_EXCEEDED_RESULT_SIZE = "queryExceededResultSize";
    const QUERY_LIMITS_EXCEEDED = "queryLimitsExceeded";
    const QUERY_TIMEOUT = "queryTimeout";
    const ALERT_CREATION_FAILED = "alertCreationFailed";
    const ALERT_REPORT_NOT_FOUND = "alertReportNotFound";
    const PARTIAL_ROWS_FAILED = "partialRowsFailed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

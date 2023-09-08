<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotUserlessEnrollmentStatus File
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
* WindowsAutopilotUserlessEnrollmentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotUserlessEnrollmentStatus extends Enum
{
    /**
    * The Enum WindowsAutopilotUserlessEnrollmentStatus
    */
    const UNKNOWN = "unknown";
    const ALLOWED = "allowed";
    const BLOCKED = "blocked";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

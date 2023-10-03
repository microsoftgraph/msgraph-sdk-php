<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndUserNotificationPreference File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* EndUserNotificationPreference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndUserNotificationPreference extends Enum
{
    /**
    * The Enum EndUserNotificationPreference
    */
    const UNKNOWN = "unknown";
    const MICROSOFT = "microsoft";
    const CUSTOM = "custom";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndUserNotificationSettingType File
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
* EndUserNotificationSettingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndUserNotificationSettingType extends Enum
{
    /**
    * The Enum EndUserNotificationSettingType
    */
    const UNKNOWN = "unknown";
    const NO_TRAINING = "noTraining";
    const TRAINING_SELECTED = "trainingSelected";
    const NO_NOTIFICATION = "noNotification";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

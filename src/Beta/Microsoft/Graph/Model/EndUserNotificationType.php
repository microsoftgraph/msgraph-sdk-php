<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndUserNotificationType File
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
* EndUserNotificationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndUserNotificationType extends Enum
{
    /**
    * The Enum EndUserNotificationType
    */
    const UNKNOWN = "unknown";
    const POSITIVE_REINFORCEMENT = "positiveReinforcement";
    const NO_TRAINING = "noTraining";
    const TRAINING_ASSIGNMENT = "trainingAssignment";
    const TRAINING_REMINDER = "trainingReminder";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

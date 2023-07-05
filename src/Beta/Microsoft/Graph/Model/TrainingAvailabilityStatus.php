<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingAvailabilityStatus File
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
* TrainingAvailabilityStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingAvailabilityStatus extends Enum
{
    /**
    * The Enum TrainingAvailabilityStatus
    */
    const UNKNOWN = "unknown";
    const NOT_AVAILABLE = "notAvailable";
    const AVAILABLE = "available";
    const ARCHIVE = "archive";
    const DELETE = "delete";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

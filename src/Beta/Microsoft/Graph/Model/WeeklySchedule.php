<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WeeklySchedule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WeeklySchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WeeklySchedule extends Enum
{
    /**
    * The Enum WeeklySchedule
    */
    const USER_DEFINED = "userDefined";
    const EVERYDAY = "everyday";
    const SUNDAY = "sunday";
    const MONDAY = "monday";
    const TUESDAY = "tuesday";
    const WEDNESDAY = "wednesday";
    const THURSDAY = "thursday";
    const FRIDAY = "friday";
    const SATURDAY = "saturday";
    const NO_SCHEDULED_SCAN = "noScheduledScan";
}
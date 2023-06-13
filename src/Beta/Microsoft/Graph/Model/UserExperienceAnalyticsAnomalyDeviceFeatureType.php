<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAnomalyDeviceFeatureType File
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
* UserExperienceAnalyticsAnomalyDeviceFeatureType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAnomalyDeviceFeatureType extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsAnomalyDeviceFeatureType
    */
    const MANUFACTURER = "manufacturer";
    const MODEL = "model";
    const OS_VERSION = "osVersion";
    const APPLICATION = "application";
    const DRIVER = "driver";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

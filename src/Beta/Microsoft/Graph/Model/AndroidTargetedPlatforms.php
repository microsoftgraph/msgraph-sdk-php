<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidTargetedPlatforms File
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
* AndroidTargetedPlatforms class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidTargetedPlatforms extends Enum
{
    /**
    * The Enum AndroidTargetedPlatforms
    */
    const ANDROID_DEVICE_ADMINISTRATOR = "androidDeviceAdministrator";
    const ANDROID_OPEN_SOURCE_PROJECT = "androidOpenSourceProject";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

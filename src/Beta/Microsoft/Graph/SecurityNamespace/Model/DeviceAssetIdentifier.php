<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAssetIdentifier File
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
* DeviceAssetIdentifier class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAssetIdentifier extends Enum
{
    /**
    * The Enum DeviceAssetIdentifier
    */
    const DEVICE_ID = "deviceId";
    const DEVICE_NAME = "deviceName";
    const REMOTE_DEVICE_NAME = "remoteDeviceName";
    const TARGET_DEVICE_NAME = "targetDeviceName";
    const DESTINATION_DEVICE_NAME = "destinationDeviceName";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

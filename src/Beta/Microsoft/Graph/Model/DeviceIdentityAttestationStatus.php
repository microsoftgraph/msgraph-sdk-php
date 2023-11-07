<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceIdentityAttestationStatus File
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
* DeviceIdentityAttestationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceIdentityAttestationStatus extends Enum
{
    /**
    * The Enum DeviceIdentityAttestationStatus
    */
    const UNKNOWN = "unknown";
    const TRUSTED = "trusted";
    const UN_TRUSTED = "unTrusted";
    const NOT_SUPPORTED = "notSupported";
    const INCOMPLETE_DATA = "incompleteData";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

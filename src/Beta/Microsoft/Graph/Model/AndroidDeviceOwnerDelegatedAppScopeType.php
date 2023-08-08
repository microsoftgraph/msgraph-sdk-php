<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerDelegatedAppScopeType File
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
* AndroidDeviceOwnerDelegatedAppScopeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerDelegatedAppScopeType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerDelegatedAppScopeType
    */
    const UNSPECIFIED = "unspecified";
    const CERTIFICATE_INSTALL = "certificateInstall";
    const CAPTURE_NETWORK_ACTIVITY_LOG = "captureNetworkActivityLog";
    const CAPTURE_SECURITY_LOG = "captureSecurityLog";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

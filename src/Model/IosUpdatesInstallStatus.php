<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosUpdatesInstallStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* IosUpdatesInstallStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class IosUpdatesInstallStatus extends Enum
{
    /**
    * The Enum IosUpdatesInstallStatus
    */
    const SUCCESS = "success";
    const AVAILABLE = "available";
    const IDLE = "idle";
    const DOWNLOADING = "downloading";
    const DOWNLOAD_FAILED = "downloadFailed";
    const DOWNLOAD_REQUIRES_COMPUTER = "downloadRequiresComputer";
    const DOWNLOAD_INSUFFICIENT_SPACE = "downloadInsufficientSpace";
    const DOWNLOAD_INSUFFICIENT_POWER = "downloadInsufficientPower";
    const DOWNLOAD_INSUFFICIENT_NETWORK = "downloadInsufficientNetwork";
    const INSTALLING = "installing";
    const INSTALL_INSUFFICIENT_SPACE = "installInsufficientSpace";
    const INSTALL_INSUFFICIENT_POWER = "installInsufficientPower";
    const INSTALL_PHONE_CALL_IN_PROGRESS = "installPhoneCallInProgress";
    const INSTALL_FAILED = "installFailed";
    const NOT_SUPPORTED_OPERATION = "notSupportedOperation";
    const SHARED_DEVICE_USER_LOGGED_IN_ERROR = "sharedDeviceUserLoggedInError";
}
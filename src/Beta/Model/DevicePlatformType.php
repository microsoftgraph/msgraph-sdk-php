<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DevicePlatformType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* DevicePlatformType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DevicePlatformType extends Enum
{
    /**
    * The Enum DevicePlatformType
    */
    const ANDROID = "android";
    const ANDROID_FOR_WORK = "androidForWork";
    const I_OS = "iOS";
    const MAC_OS = "macOS";
    const WINDOWS_PHONE81 = "windowsPhone81";
    const WINDOWS81_AND_LATER = "windows81AndLater";
    const WINDOWS10_AND_LATER = "windows10AndLater";
}
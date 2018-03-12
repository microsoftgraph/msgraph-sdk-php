<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceType File
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
* DeviceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceType extends Enum
{
    /**
    * The Enum DeviceType
    */
    const DESKTOP = "desktop";
    const WINDOWS_RT = "windowsRT";
    const WIN_MO6 = "winMO6";
    const NOKIA = "nokia";
    const WINDOWS_PHONE = "windowsPhone";
    const MAC = "mac";
    const WIN_CE = "winCE";
    const WIN_EMBEDDED = "winEmbedded";
    const I_PHONE = "iPhone";
    const I_PAD = "iPad";
    const I_POD = "iPod";
    const ANDROID = "android";
    const I_SOC_CONSUMER = "iSocConsumer";
    const UNIX = "unix";
    const MAC_MDM = "macMDM";
    const HOLO_LENS = "holoLens";
    const SURFACE_HUB = "surfaceHub";
    const ANDROID_FOR_WORK = "androidForWork";
    const ANDROID_ENTERPRISE = "androidEnterprise";
    const BLACKBERRY = "blackberry";
    const PALM = "palm";
    const UNKNOWN = "unknown";
}
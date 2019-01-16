<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeviceHealthState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsDeviceHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsDeviceHealthState extends Enum
{
    /**
    * The Enum WindowsDeviceHealthState
    */
    const CLEAN = "clean";
    const FULL_SCAN_PENDING = "fullScanPending";
    const REBOOT_PENDING = "rebootPending";
    const MANUAL_STEPS_PENDING = "manualStepsPending";
    const OFFLINE_SCAN_PENDING = "offlineScanPending";
    const CRITICAL = "critical";
}
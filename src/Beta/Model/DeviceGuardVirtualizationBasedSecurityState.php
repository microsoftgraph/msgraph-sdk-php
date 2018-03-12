<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardVirtualizationBasedSecurityState File
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
* DeviceGuardVirtualizationBasedSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceGuardVirtualizationBasedSecurityState extends Enum
{
    /**
    * The Enum DeviceGuardVirtualizationBasedSecurityState
    */
    const RUNNING = "running";
    const REBOOT_REQUIRED = "rebootRequired";
    const REQUIRE64_BIT_ARCHITECTURE = "require64BitArchitecture";
    const NOT_LICENSED = "notLicensed";
    const NOT_CONFIGURED = "notConfigured";
    const DOES_NOT_MEET_HARDWARE_REQUIREMENTS = "doesNotMeetHardwareRequirements";
    const OTHER = "other";
}
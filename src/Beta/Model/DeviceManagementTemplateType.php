<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceManagementTemplateType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementTemplateType extends Enum
{
    /**
    * The Enum DeviceManagementTemplateType
    */
    const SECURITY_BASELINE = "securityBaseline";
    const SPECIALIZED_DEVICES = "specializedDevices";
    const ADVANCED_THREAT_PROTECTION_SECURITY_BASELINE = "advancedThreatProtectionSecurityBaseline";
    const DEVICE_CONFIGURATION = "deviceConfiguration";
    const CUSTOM = "custom";
}
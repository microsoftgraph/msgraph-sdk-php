<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FirmwareProtectionType File
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
* FirmwareProtectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FirmwareProtectionType extends Enum
{
    /**
    * The Enum FirmwareProtectionType
    */
    const NOT_APPLICABLE = "notApplicable";
    const SYSTEM_GUARD_SECURE_LAUNCH = "systemGuardSecureLaunch";
    const FIRMWARE_ATTACK_SURFACE_REDUCTION = "firmwareAttackSurfaceReduction";
    const DISABLED = "disabled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FrontlineCloudPcAccessState File
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
* FrontlineCloudPcAccessState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FrontlineCloudPcAccessState extends Enum
{
    /**
    * The Enum FrontlineCloudPcAccessState
    */
    const UNASSIGNED = "unassigned";
    const NO_LICENSES_AVAILABLE = "noLicensesAvailable";
    const ACTIVATION_FAILED = "activationFailed";
    const ACTIVE = "active";
    const ACTIVATING = "activating";
    const STANDBY_MODE = "standbyMode";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

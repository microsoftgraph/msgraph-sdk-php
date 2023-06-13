<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegeManagementElevationType File
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
* PrivilegeManagementElevationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegeManagementElevationType extends Enum
{
    /**
    * The Enum PrivilegeManagementElevationType
    */
    const UNDETERMINED = "undetermined";
    const UNMANAGED_ELEVATION = "unmanagedElevation";
    const ZERO_TOUCH_ELEVATION = "zeroTouchElevation";
    const USER_CONFIRMED_ELEVATION = "userConfirmedElevation";
    const SUPPORT_APPROVED_ELEVATION = "supportApprovedElevation";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

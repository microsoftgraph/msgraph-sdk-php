<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskEventStatus File
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
* RiskEventStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskEventStatus extends Enum
{
    /**
    * The Enum RiskEventStatus
    */
    const ACTIVE = "active";
    const REMEDIATED = "remediated";
    const DISMISSED_AS_FIXED = "dismissedAsFixed";
    const DISMISSED_AS_FALSE_POSITIVE = "dismissedAsFalsePositive";
    const DISMISSED_AS_IGNORE = "dismissedAsIgnore";
    const LOGIN_BLOCKED = "loginBlocked";
    const CLOSED_MFA_AUTO = "closedMfaAuto";
    const CLOSED_MULTIPLE_REASONS = "closedMultipleReasons";
}
<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsRequestOccurrenceStatus File
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
* PermissionsRequestOccurrenceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsRequestOccurrenceStatus extends Enum
{
    /**
    * The Enum PermissionsRequestOccurrenceStatus
    */
    const GRANTING_FAILED = "grantingFailed";
    const GRANTED = "granted";
    const GRANTING = "granting";
    const REVOKED = "revoked";
    const REVOKING = "revoking";
    const REVOKING_FAILED = "revokingFailed";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

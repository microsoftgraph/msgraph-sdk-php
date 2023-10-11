<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionsModificationCapability File
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
* PermissionsModificationCapability class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionsModificationCapability extends Enum
{
    /**
    * The Enum PermissionsModificationCapability
    */
    const ENABLED = "enabled";
    const NOT_CONFIGURED = "notConfigured";
    const NO_RECENT_DATA_COLLECTED = "noRecentDataCollected";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

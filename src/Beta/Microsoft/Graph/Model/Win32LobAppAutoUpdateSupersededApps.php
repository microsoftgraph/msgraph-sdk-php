<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppAutoUpdateSupersededApps File
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
* Win32LobAppAutoUpdateSupersededApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppAutoUpdateSupersededApps extends Enum
{
    /**
    * The Enum Win32LobAppAutoUpdateSupersededApps
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENABLED = "enabled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderSecurityCenterNotificationsFromAppType File
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
* DefenderSecurityCenterNotificationsFromAppType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DefenderSecurityCenterNotificationsFromAppType extends Enum
{
    /**
    * The Enum DefenderSecurityCenterNotificationsFromAppType
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCK_NONCRITICAL_NOTIFICATIONS = "blockNoncriticalNotifications";
    const BLOCK_ALL_NOTIFICATIONS = "blockAllNotifications";
}
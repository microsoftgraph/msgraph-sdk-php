<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsSmartCardRemovalBehaviorType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* LocalSecurityOptionsSmartCardRemovalBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LocalSecurityOptionsSmartCardRemovalBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsSmartCardRemovalBehaviorType
    */
    const LOCK_WORKSTATION = "lockWorkstation";
    const NO_ACTION = "noAction";
    const FORCE_LOGOFF = "forceLogoff";
    const DISCONNECT_REMOTE_DESKTOP_SESSION = "disconnectRemoteDesktopSession";
}
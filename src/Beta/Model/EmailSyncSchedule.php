<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailSyncSchedule File
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
* EmailSyncSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EmailSyncSchedule extends Enum
{
    /**
    * The Enum EmailSyncSchedule
    */
    const USER_DEFINED = "userDefined";
    const AS_MESSAGES_ARRIVE = "asMessagesArrive";
    const MANUAL = "manual";
    const FIFTEEN_MINUTES = "fifteenMinutes";
    const THIRTY_MINUTES = "thirtyMinutes";
    const SIXTY_MINUTES = "sixtyMinutes";
    const BASED_ON_MY_USAGE = "basedOnMyUsage";
}
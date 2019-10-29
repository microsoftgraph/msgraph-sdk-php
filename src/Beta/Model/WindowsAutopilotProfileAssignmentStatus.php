<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotProfileAssignmentStatus File
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
* WindowsAutopilotProfileAssignmentStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsAutopilotProfileAssignmentStatus extends Enum
{
    /**
    * The Enum WindowsAutopilotProfileAssignmentStatus
    */
    const UNKNOWN = "unknown";
    const ASSIGNED_IN_SYNC = "assignedInSync";
    const ASSIGNED_OUT_OF_SYNC = "assignedOutOfSync";
    const ASSIGNED_UNKOWN_SYNC_STATE = "assignedUnkownSyncState";
    const NOT_ASSIGNED = "notAssigned";
    const PENDING = "pending";
    const FAILED = "failed";
}
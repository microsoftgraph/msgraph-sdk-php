<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderMonitorFileActivity File
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
* DefenderMonitorFileActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DefenderMonitorFileActivity extends Enum
{
    /**
    * The Enum DefenderMonitorFileActivity
    */
    const USER_DEFINED = "userDefined";
    const DISABLE = "disable";
    const MONITOR_ALL_FILES = "monitorAllFiles";
    const MONITOR_INCOMING_FILES_ONLY = "monitorIncomingFilesOnly";
    const MONITOR_OUTGOING_FILES_ONLY = "monitorOutgoingFilesOnly";
}
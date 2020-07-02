<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingRequestType File
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
* MeetingRequestType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingRequestType extends Enum
{
    /**
    * The Enum MeetingRequestType
    */
    const NONE = "none";
    const NEW_MEETING_REQUEST = "newMeetingRequest";
    const FULL_UPDATE = "fullUpdate";
    const INFORMATIONAL_UPDATE = "informationalUpdate";
    const SILENT_UPDATE = "silentUpdate";
    const OUTDATED = "outdated";
    const PRINCIPAL_WANTS_COPY = "principalWantsCopy";
}
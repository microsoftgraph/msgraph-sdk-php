<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingMessageType File
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
* MeetingMessageType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MeetingMessageType extends Enum
{
    /**
    * The Enum MeetingMessageType
    */
    const NONE = "none";
    const MEETING_REQUEST = "meetingRequest";
    const MEETING_CANCELLED = "meetingCancelled";
    const MEETING_ACCEPTED = "meetingAccepted";
    const MEETING_TENTATIVELY_ACCEPTED = "meetingTentativelyAccepted";
    const MEETING_DECLINED = "meetingDeclined";
}
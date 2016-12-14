<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingMessageType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* MeetingMessageType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MeetingMessageType extends Enum
{
    /**
    * The Enum MeetingMessageType
    */
    const NONE = "0";
    const MEETING_REQUEST = "1";
    const MEETING_CANCELLED = "2";
    const MEETING_ACCEPTED = "3";
    const MEETING_TENATIVELY_ACCEPTED = "4";
    const MEETING_DECLINED = "5";
}
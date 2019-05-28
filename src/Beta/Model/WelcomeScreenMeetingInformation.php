<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WelcomeScreenMeetingInformation File
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
* WelcomeScreenMeetingInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WelcomeScreenMeetingInformation extends Enum
{
    /**
    * The Enum WelcomeScreenMeetingInformation
    */
    const USER_DEFINED = "userDefined";
    const SHOW_ORGANIZER_AND_TIME_ONLY = "showOrganizerAndTimeOnly";
    const SHOW_ORGANIZER_AND_TIME_AND_SUBJECT = "showOrganizerAndTimeAndSubject";
}
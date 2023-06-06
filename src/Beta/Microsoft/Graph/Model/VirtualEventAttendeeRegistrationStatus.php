<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventAttendeeRegistrationStatus File
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
* VirtualEventAttendeeRegistrationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventAttendeeRegistrationStatus extends Enum
{
    /**
    * The Enum VirtualEventAttendeeRegistrationStatus
    */
    const REGISTERED = "registered";
    const CANCELED = "canceled";
    const WAITLISTED = "waitlisted";
    const PENDING_APPROVAL = "pendingApproval";
    const REJECTED_BY_ORGANIZER = "rejectedByOrganizer";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

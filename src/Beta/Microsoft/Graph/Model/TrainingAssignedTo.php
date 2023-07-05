<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrainingAssignedTo File
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
* TrainingAssignedTo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrainingAssignedTo extends Enum
{
    /**
    * The Enum TrainingAssignedTo
    */
    const NONE = "none";
    const ALL_USERS = "allUsers";
    const CLICKED_PAYLOAD = "clickedPayload";
    const COMPROMISED = "compromised";
    const REPORTED_PHISH = "reportedPhish";
    const READ_BUT_NOT_CLICKED = "readButNotClicked";
    const DID_NOTHING = "didNothing";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SetupStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* SetupStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SetupStatus extends Enum
{
    /**
    * The Enum SetupStatus
    */
    const UNKNOWN = "unknown";
    const NOT_REGISTERED_YET = "notRegisteredYet";
    const REGISTERED_SETUP_NOT_STARTED = "registeredSetupNotStarted";
    const REGISTERED_SETUP_IN_PROGRESS = "registeredSetupInProgress";
    const REGISTRATION_AND_SETUP_COMPLETED = "registrationAndSetupCompleted";
    const REGISTRATION_FAILED = "registrationFailed";
    const REGISTRATION_TIMED_OUT = "registrationTimedOut";
    const DISABLED = "disabled";
}
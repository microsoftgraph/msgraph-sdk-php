<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallState File
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
* CallState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CallState extends Enum
{
    /**
    * The Enum CallState
    */
    const INCOMING = "incoming";
    const ESTABLISHING = "establishing";
    const RINGING = "ringing";
    const ESTABLISHED = "established";
    const HOLD = "hold";
    const TRANSFERRING = "transferring";
    const TRANSFER_ACCEPTED = "transferAccepted";
    const REDIRECTING = "redirecting";
    const TERMINATING = "terminating";
    const TERMINATED = "terminated";
}
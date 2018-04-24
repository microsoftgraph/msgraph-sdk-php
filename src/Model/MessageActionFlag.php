<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageActionFlag File
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
* MessageActionFlag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MessageActionFlag extends Enum
{
    /**
    * The Enum MessageActionFlag
    */
    const ANY = "any";
    const CALL = "call";
    const DO_NOT_FORWARD = "doNotForward";
    const FOLLOW_UP = "followUp";
    const FYI = "fyi";
    const FORWARD = "forward";
    const NO_RESPONSE_NECESSARY = "noResponseNecessary";
    const READ = "read";
    const REPLY = "reply";
    const REPLY_TO_ALL = "replyToAll";
    const REVIEW = "review";
}
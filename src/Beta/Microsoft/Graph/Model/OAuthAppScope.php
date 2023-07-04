<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OAuthAppScope File
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
* OAuthAppScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OAuthAppScope extends Enum
{
    /**
    * The Enum OAuthAppScope
    */
    const UNKNOWN = "unknown";
    const READ_CALENDAR = "readCalendar";
    const READ_CONTACT = "readContact";
    const READ_MAIL = "readMail";
    const READ_ALL_CHAT = "readAllChat";
    const READ_ALL_FILE = "readAllFile";
    const READ_AND_WRITE_MAIL = "readAndWriteMail";
    const SEND_MAIL = "sendMail";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

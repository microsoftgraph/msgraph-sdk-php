<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserDefaultAuthenticationMethodType File
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
* UserDefaultAuthenticationMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserDefaultAuthenticationMethodType extends Enum
{
    /**
    * The Enum UserDefaultAuthenticationMethodType
    */
    const PUSH = "push";
    const OATH = "oath";
    const VOICE_MOBILE = "voiceMobile";
    const VOICE_ALTERNATE_MOBILE = "voiceAlternateMobile";
    const VOICE_OFFICE = "voiceOffice";
    const SMS = "sms";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

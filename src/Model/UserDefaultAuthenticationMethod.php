<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserDefaultAuthenticationMethod File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* UserDefaultAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserDefaultAuthenticationMethod extends Enum
{
    /**
    * The Enum UserDefaultAuthenticationMethod
    */
    const PUSH = "push";
    const OATH = "oath";
    const VOICE_MOBILE = "voiceMobile";
    const VOICE_ALTERNATE_MOBILE = "voiceAlternateMobile";
    const VOICE_OFFICE = "voiceOffice";
    const SMS = "sms";
    const NONE = "none";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

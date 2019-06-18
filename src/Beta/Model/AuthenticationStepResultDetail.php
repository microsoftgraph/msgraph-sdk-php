<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStepResultDetail File
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
* AuthenticationStepResultDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AuthenticationStepResultDetail extends Enum
{
    /**
    * The Enum AuthenticationStepResultDetail
    */
    const METHOD_SUCCEDED = "methodSucceded";
    const USER_IS_BLOCKED = "userIsBlocked";
    const FRAUD_CODE_ENTERED = "fraudCodeEntered";
    const NO_PHONE_INPUT = "noPhoneInput";
    const PHONE_UNREACHABLE = "phoneUnreachable";
    const CLAIM_IN_TOKEN = "claimInToken";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
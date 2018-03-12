<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NonEapAuthenticationMethodForEapTtlsType File
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
* NonEapAuthenticationMethodForEapTtlsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NonEapAuthenticationMethodForEapTtlsType extends Enum
{
    /**
    * The Enum NonEapAuthenticationMethodForEapTtlsType
    */
    const UNENCRYPTED_PASSWORD = "unencryptedPassword";
    const CHALLENGE_HANDSHAKE_AUTHENTICATION_PROTOCOL = "challengeHandshakeAuthenticationProtocol";
    const MICROSOFT_CHAP = "microsoftChap";
    const MICROSOFT_CHAP_VERSION_TWO = "microsoftChapVersionTwo";
}
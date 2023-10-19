<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodPlatform File
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
* AuthenticationMethodPlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodPlatform extends Enum
{
    /**
    * The Enum AuthenticationMethodPlatform
    */
    const UNKNOWN = "unknown";
    const WINDOWS = "windows";
    const MAC_OS = "macOS";
    const I_OS = "iOS";
    const ANDROID = "android";
    const LINUX = "linux";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

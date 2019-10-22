<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessConditions File
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
* ConditionalAccessConditions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessConditions extends Enum
{
    /**
    * The Enum ConditionalAccessConditions
    */
    const NONE = "none";
    const APPLICATION = "application";
    const USERS = "users";
    const DEVICE_PLATFORM = "devicePlatform";
    const LOCATION = "location";
    const CLIENT_TYPE = "clientType";
    const SIGN_IN_RISK = "signInRisk";
    const USER_RISK = "userRisk";
    const TIME = "time";
    const DEVICE_STATE = "deviceState";
    const CLIENT = "client";
}
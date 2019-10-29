<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoutingPolicy File
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
* RoutingPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RoutingPolicy extends Enum
{
    /**
    * The Enum RoutingPolicy
    */
    const NONE = "none";
    const NO_MISSED_CALL = "noMissedCall";
    const DISABLE_FORWARDING_EXCEPT_PHONE = "disableForwardingExceptPhone";
    const DISABLE_FORWARDING = "disableForwarding";
    const PREFER_SKYPE_FOR_BUSINESS = "preferSkypeForBusiness";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
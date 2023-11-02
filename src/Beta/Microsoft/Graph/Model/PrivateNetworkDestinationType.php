<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivateNetworkDestinationType File
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
* PrivateNetworkDestinationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivateNetworkDestinationType extends Enum
{
    /**
    * The Enum PrivateNetworkDestinationType
    */
    const IP_ADDRESS = "ipAddress";
    const IP_RANGE = "ipRange";
    const IP_RANGE_CIDR = "ipRangeCidr";
    const FQDN = "fqdn";
    const DNS_SUFFIX = "dnsSuffix";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkDestinationType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

use Microsoft\Graph\Core\Enum;

/**
* NetworkDestinationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkDestinationType extends Enum
{
    /**
    * The Enum NetworkDestinationType
    */
    const URL = "url";
    const FQDN = "fqdn";
    const IP_ADDRESS = "ipAddress";
    const IP_RANGE = "ipRange";
    const IP_SUBNET = "ipSubnet";
    const WEB_CATEGORY = "webCategory";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeliveryOptimizationMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsDeliveryOptimizationMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsDeliveryOptimizationMode extends Enum
{
    /**
    * The Enum WindowsDeliveryOptimizationMode
    */
    const USER_DEFINED = "userDefined";
    const HTTP_ONLY = "httpOnly";
    const HTTP_WITH_PEERING_NAT = "httpWithPeeringNat";
    const HTTP_WITH_PEERING_PRIVATE_GROUP = "httpWithPeeringPrivateGroup";
    const HTTP_WITH_INTERNET_PEERING = "httpWithInternetPeering";
    const SIMPLE_DOWNLOAD = "simpleDownload";
    const BYPASS_MODE = "bypassMode";
}
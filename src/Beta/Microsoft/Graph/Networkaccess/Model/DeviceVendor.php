<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceVendor File
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
* DeviceVendor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceVendor extends Enum
{
    /**
    * The Enum DeviceVendor
    */
    const BARRACUDA_NETWORKS = "barracudaNetworks";
    const CHECK_POINT = "checkPoint";
    const CISCO_MERAKI = "ciscoMeraki";
    const CITRIX = "citrix";
    const FORTINET = "fortinet";
    const HPE_ARUBA = "hpeAruba";
    const NET_FOUNDRY = "netFoundry";
    const NUAGE = "nuage";
    const OPEN_SYSTEMS = "openSystems";
    const PALO_ALTO_NETWORKS = "paloAltoNetworks";
    const RIVERBED_TECHNOLOGY = "riverbedTechnology";
    const SILVER_PEAK = "silverPeak";
    const VM_WARE_SD_WAN = "vmWareSdWan";
    const VERSA = "versa";
    const OTHER = "other";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

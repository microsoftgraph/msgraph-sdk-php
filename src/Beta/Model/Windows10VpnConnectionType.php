<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnConnectionType File
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
* Windows10VpnConnectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10VpnConnectionType extends Enum
{
    /**
    * The Enum Windows10VpnConnectionType
    */
    const PULSE_SECURE = "pulseSecure";
    const F5_EDGE_CLIENT = "f5EdgeClient";
    const DELL_SONIC_WALL_MOBILE_CONNECT = "dellSonicWallMobileConnect";
    const CHECK_POINT_CAPSULE_VPN = "checkPointCapsuleVpn";
    const AUTOMATIC = "automatic";
    const IK_EV2 = "ikEv2";
    const L2TP = "l2tp";
    const PPTP = "pptp";
    const CITRIX = "citrix";
}
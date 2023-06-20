<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkingProtocol File
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
* NetworkingProtocol class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkingProtocol extends Enum
{
    /**
    * The Enum NetworkingProtocol
    */
    const IP = "ip";
    const ICMP = "icmp";
    const IGMP = "igmp";
    const GGP = "ggp";
    const IPV4 = "ipv4";
    const TCP = "tcp";
    const PUP = "pup";
    const UDP = "udp";
    const IDP = "idp";
    const IPV6 = "ipv6";
    const IPV6_ROUTING_HEADER = "ipv6RoutingHeader";
    const IPV6_FRAGMENT_HEADER = "ipv6FragmentHeader";
    const IP_SEC_ENCAPSULATING_SECURITY_PAYLOAD = "ipSecEncapsulatingSecurityPayload";
    const IP_SEC_AUTHENTICATION_HEADER = "ipSecAuthenticationHeader";
    const ICMP_V6 = "icmpV6";
    const IPV6_NO_NEXT_HEADER = "ipv6NoNextHeader";
    const IPV6_DESTINATION_OPTIONS = "ipv6DestinationOptions";
    const ND = "nd";
    const IPX = "ipx";
    const RAW = "raw";
    const SPX = "spx";
    const SPX_II = "spxII";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

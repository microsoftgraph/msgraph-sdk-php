<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SecurityNetworkProtocol extends Enum {
    public const UNKNOWN = 'unknown';
    public const IP = 'ip';
    public const ICMP = 'icmp';
    public const IGMP = 'igmp';
    public const GGP = 'ggp';
    public const IPV4 = 'ipv4';
    public const TCP = 'tcp';
    public const PUP = 'pup';
    public const UDP = 'udp';
    public const IDP = 'idp';
    public const IPV6 = 'ipv6';
    public const IPV6_ROUTING_HEADER = 'ipv6RoutingHeader';
    public const IPV6_FRAGMENT_HEADER = 'ipv6FragmentHeader';
    public const IP_SEC_ENCAPSULATING_SECURITY_PAYLOAD = 'ipSecEncapsulatingSecurityPayload';
    public const IP_SEC_AUTHENTICATION_HEADER = 'ipSecAuthenticationHeader';
    public const ICMP_V6 = 'icmpV6';
    public const IPV6_NO_NEXT_HEADER = 'ipv6NoNextHeader';
    public const IPV6_DESTINATION_OPTIONS = 'ipv6DestinationOptions';
    public const ND = 'nd';
    public const RAW = 'raw';
    public const IPX = 'ipx';
    public const SPX = 'spx';
    public const SPX_I_I = 'spxII';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

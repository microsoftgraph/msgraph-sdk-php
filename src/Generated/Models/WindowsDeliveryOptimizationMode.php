<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsDeliveryOptimizationMode extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const HTTP_ONLY = 'httpOnly';
    public const HTTP_WITH_PEERING_NAT = 'httpWithPeeringNat';
    public const HTTP_WITH_PEERING_PRIVATE_GROUP = 'httpWithPeeringPrivateGroup';
    public const HTTP_WITH_INTERNET_PEERING = 'httpWithInternetPeering';
    public const SIMPLE_DOWNLOAD = 'simpleDownload';
    public const BYPASS_MODE = 'bypassMode';
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SensorType extends Enum {
    public const AD_CONNECT_INTEGRATED = "adConnectIntegrated";
    public const ADCS_INTEGRATED = "adcsIntegrated";
    public const ADFS_INTEGRATED = "adfsIntegrated";
    public const DOMAIN_CONTROLLER_INTEGRATED = "domainControllerIntegrated";
    public const DOMAIN_CONTROLLER_STANDALONE = "domainControllerStandalone";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

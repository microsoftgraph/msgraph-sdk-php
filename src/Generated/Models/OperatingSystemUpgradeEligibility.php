<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OperatingSystemUpgradeEligibility extends Enum {
    public const UPGRADED = 'upgraded';
    public const UNKNOWN = 'unknown';
    public const NOT_CAPABLE = 'notCapable';
    public const CAPABLE = 'capable';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

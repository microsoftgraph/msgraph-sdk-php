<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SensorHealthStatus extends Enum {
    public const HEALTHY = "healthy";
    public const NOT_HEALTHY_LOW = "notHealthyLow";
    public const NOT_HEALTHY_MEDIUM = "notHealthyMedium";
    public const NOT_HEALTHY_HIGH = "notHealthyHigh";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

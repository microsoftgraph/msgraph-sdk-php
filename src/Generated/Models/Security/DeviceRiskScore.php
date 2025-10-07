<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceRiskScore extends Enum {
    public const NONE = "none";
    public const INFORMATIONAL = "informational";
    public const LOW = "low";
    public const MEDIUM = "medium";
    public const HIGH = "high";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

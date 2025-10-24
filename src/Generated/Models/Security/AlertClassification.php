<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AlertClassification extends Enum {
    public const UNKNOWN = "unknown";
    public const FALSE_POSITIVE = "falsePositive";
    public const TRUE_POSITIVE = "truePositive";
    public const INFORMATIONAL_EXPECTED_ACTIVITY = "informationalExpectedActivity";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

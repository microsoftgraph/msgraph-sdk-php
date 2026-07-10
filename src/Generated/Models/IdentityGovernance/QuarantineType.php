<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class QuarantineType extends Enum {
    public const NOT_QUARANTINED = "notQuarantined";
    public const COUNT_BASED_THRESHOLD_EXCEEDED = "countBasedThresholdExceeded";
    public const PERCENTAGE_BASED_THRESHOLD_EXCEEDED = "percentageBasedThresholdExceeded";
    public const MULTIPLE_CONDITIONS_EXCEEDED = "multipleConditionsExceeded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

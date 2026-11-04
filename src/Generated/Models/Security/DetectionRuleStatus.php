<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DetectionRuleStatus extends Enum {
    public const ENABLED = "enabled";
    public const DISABLED = "disabled";
    public const AUTO_DISABLED = "autoDisabled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

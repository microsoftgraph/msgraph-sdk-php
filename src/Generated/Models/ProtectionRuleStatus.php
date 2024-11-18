<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtectionRuleStatus extends Enum {
    public const DRAFT = "draft";
    public const ACTIVE = "active";
    public const COMPLETED = "completed";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

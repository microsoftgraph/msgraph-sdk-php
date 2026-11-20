<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RetentionPeriodChangeStatus extends Enum {
    public const NONE = "none";
    public const IN_PROGRESS = "inProgress";
    public const FAILED = "failed";
    public const COMPLETED = "completed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcOnPremisesConnectionStatus extends Enum {
    public const PENDING = "pending";
    public const RUNNING = "running";
    public const PASSED = "passed";
    public const FAILED = "failed";
    public const WARNING = "warning";
    public const INFORMATIONAL = "informational";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

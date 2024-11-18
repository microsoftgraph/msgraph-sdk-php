<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SimulationAutomationRunStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const RUNNING = "running";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const SKIPPED = "skipped";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrintJobProcessingState extends Enum {
    public const UNKNOWN = "unknown";
    public const PENDING = "pending";
    public const PROCESSING = "processing";
    public const PAUSED = "paused";
    public const STOPPED = "stopped";
    public const COMPLETED = "completed";
    public const CANCELED = "canceled";
    public const ABORTED = "aborted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

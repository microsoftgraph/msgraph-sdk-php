<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamsAsyncOperationStatus extends Enum {
    public const INVALID = "invalid";
    public const NOT_STARTED = "notStarted";
    public const IN_PROGRESS = "inProgress";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

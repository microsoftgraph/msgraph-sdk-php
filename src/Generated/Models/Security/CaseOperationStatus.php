<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class CaseOperationStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const SUBMISSION_FAILED = "submissionFailed";
    public const RUNNING = "running";
    public const SUCCEEDED = "succeeded";
    public const PARTIALLY_SUCCEEDED = "partiallySucceeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\\Graph\\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecycleWorkflowProcessingStatus extends Enum {
    public const QUEUED = "queued";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const CANCELED = "canceled";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

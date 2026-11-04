<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CrossTenantMigrationJobStatus extends Enum {
    public const SUBMITTED = "submitted";
    public const APPROVED = "approved";
    public const PROCESSING = "processing";
    public const CUTTING_OVER = "cuttingOver";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const FAILED = "failed";
    public const CANCELLED = "cancelled";
    public const PENDING_CANCEL = "pendingCancel";
    public const ADMIN_ACTION_REQUIRED = "adminActionRequired";
    public const VALIDATE_SUBMITTED = "validateSubmitted";
    public const VALIDATE_PROCESSING = "validateProcessing";
    public const VALIDATE_IN_PROGRESS = "validateInProgress";
    public const VALIDATE_PASSED = "validatePassed";
    public const VALIDATE_FAILED = "validateFailed";
    public const PENDING_DELETE = "pendingDelete";
    public const DELETED = "deleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

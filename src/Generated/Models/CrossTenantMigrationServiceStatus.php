<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CrossTenantMigrationServiceStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const VALID = "valid";
    public const INVALID = "invalid";
    public const ERROR = "error";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const CANCELLED = "cancelled";
    public const PENDING_CANCEL = "pendingCancel";
    public const SYNCING = "syncing";
    public const SYNCED = "synced";
    public const FINALIZING = "finalizing";
    public const FORCE_COMPLETE = "forceComplete";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

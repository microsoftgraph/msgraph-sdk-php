<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RestoreSessionStatus extends Enum {
    public const DRAFT = 'draft';
    public const ACTIVATING = 'activating';
    public const ACTIVE = 'active';
    public const COMPLETED_WITH_ERROR = 'completedWithError';
    public const COMPLETED = 'completed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const FAILED = 'failed';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TrainingStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const ASSIGNED = 'assigned';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const OVERDUE = 'overdue';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

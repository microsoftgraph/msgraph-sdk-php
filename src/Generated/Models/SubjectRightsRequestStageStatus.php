<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectRightsRequestStageStatus extends Enum {
    public const NOT_STARTED = 'notStarted';
    public const CURRENT = 'current';
    public const COMPLETED = 'completed';
    public const FAILED = 'failed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

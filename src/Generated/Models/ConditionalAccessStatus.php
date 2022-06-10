<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessStatus extends Enum {
    public const SUCCESS = 'success';
    public const FAILURE = 'failure';
    public const NOT_APPLIED = 'notApplied';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

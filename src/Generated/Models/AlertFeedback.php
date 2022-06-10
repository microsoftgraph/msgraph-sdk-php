<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AlertFeedback extends Enum {
    public const UNKNOWN = 'unknown';
    public const TRUE_POSITIVE = 'truePositive';
    public const FALSE_POSITIVE = 'falsePositive';
    public const BENIGN_POSITIVE = 'benignPositive';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

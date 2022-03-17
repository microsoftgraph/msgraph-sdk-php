<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AppliedConditionalAccessPolicyResult extends Enum {
    public const SUCCESS = 'success';
    public const FAILURE = 'failure';
    public const NOT_APPLIED = 'notApplied';
    public const NOT_ENABLED = 'notEnabled';
    public const UNKNOWN = 'unknown';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppliedConditionalAccessPolicyResult extends Enum {
    public const SUCCESS = "success";
    public const FAILURE = "failure";
    public const NOT_APPLIED = "notApplied";
    public const NOT_ENABLED = "notEnabled";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const REPORT_ONLY_SUCCESS = "reportOnlySuccess";
    public const REPORT_ONLY_FAILURE = "reportOnlyFailure";
    public const REPORT_ONLY_NOT_APPLIED = "reportOnlyNotApplied";
    public const REPORT_ONLY_INTERRUPTED = "reportOnlyInterrupted";
}

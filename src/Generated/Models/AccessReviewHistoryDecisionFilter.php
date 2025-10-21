<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewHistoryDecisionFilter extends Enum {
    public const APPROVE = "approve";
    public const DENY = "deny";
    public const NOT_REVIEWED = "notReviewed";
    public const DONT_KNOW = "dontKnow";
    public const NOT_NOTIFIED = "notNotified";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

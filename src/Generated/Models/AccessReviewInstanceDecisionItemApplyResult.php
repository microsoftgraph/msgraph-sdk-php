<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewInstanceDecisionItemApplyResult extends Enum {
    public const NEW = "new";
    public const APPLIED_SUCCESSFULLY = "appliedSuccessfully";
    public const APPLIED_WITH_UNKNOWN_FAILURE = "appliedWithUnknownFailure";
    public const APPLIED_SUCCESSFULLY_BUT_OBJECT_NOT_FOUND = "appliedSuccessfullyButObjectNotFound";
    public const APPLY_NOT_SUPPORTED = "applyNotSupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

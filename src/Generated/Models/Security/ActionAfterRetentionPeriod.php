<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ActionAfterRetentionPeriod extends Enum {
    public const NONE = "none";
    public const DELETE = "delete";
    public const START_DISPOSITION_REVIEW = "startDispositionReview";
    public const RELABEL = "relabel";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

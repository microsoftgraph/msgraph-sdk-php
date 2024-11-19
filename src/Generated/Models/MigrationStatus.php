<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MigrationStatus extends Enum {
    public const READY = "ready";
    public const NEEDS_REVIEW = "needsReview";
    public const ADDITIONAL_STEPS_REQUIRED = "additionalStepsRequired";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

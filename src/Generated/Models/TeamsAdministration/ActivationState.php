<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationState extends Enum {
    public const ACTIVATED = "activated";
    public const ASSIGNMENT_PENDING = "assignmentPending";
    public const ASSIGNMENT_FAILED = "assignmentFailed";
    public const UPDATE_PENDING = "updatePending";
    public const UPDATE_FAILED = "updateFailed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

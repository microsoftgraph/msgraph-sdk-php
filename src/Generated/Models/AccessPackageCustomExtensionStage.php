<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageCustomExtensionStage extends Enum {
    public const ASSIGNMENT_REQUEST_CREATED = "assignmentRequestCreated";
    public const ASSIGNMENT_REQUEST_APPROVED = "assignmentRequestApproved";
    public const ASSIGNMENT_REQUEST_GRANTED = "assignmentRequestGranted";
    public const ASSIGNMENT_REQUEST_REMOVED = "assignmentRequestRemoved";
    public const ASSIGNMENT_FOURTEEN_DAYS_BEFORE_EXPIRATION = "assignmentFourteenDaysBeforeExpiration";
    public const ASSIGNMENT_ONE_DAY_BEFORE_EXPIRATION = "assignmentOneDayBeforeExpiration";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

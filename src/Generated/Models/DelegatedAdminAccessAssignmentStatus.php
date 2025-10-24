<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminAccessAssignmentStatus extends Enum {
    public const PENDING = "pending";
    public const ACTIVE = "active";
    public const DELETING = "deleting";
    public const DELETED = "deleted";
    public const ERROR = "error";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

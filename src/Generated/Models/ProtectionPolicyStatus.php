<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtectionPolicyStatus extends Enum {
    public const INACTIVE = "inactive";
    public const ACTIVE_WITH_ERRORS = "activeWithErrors";
    public const UPDATING = "updating";
    public const ACTIVE = "active";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

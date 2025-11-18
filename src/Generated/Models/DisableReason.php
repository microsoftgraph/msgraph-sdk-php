<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DisableReason extends Enum {
    public const NONE = "none";
    public const INVALID_BILLING_PROFILE = "invalidBillingProfile";
    public const USER_REQUESTED = "userRequested";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewPrincipalScopeType extends Enum {
    public const ALL_USERS = "allUsers";
    public const GUEST_USERS = "guestUsers";
    public const INACTIVE_USERS = "inactiveUsers";
    public const INACTIVE_GUEST_USERS = "inactiveGuestUsers";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

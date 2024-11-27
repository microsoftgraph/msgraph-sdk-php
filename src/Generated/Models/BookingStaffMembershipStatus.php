<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingStaffMembershipStatus extends Enum {
    public const ACTIVE = "active";
    public const PENDING_ACCEPTANCE = "pendingAcceptance";
    public const REJECTED_BY_STAFF = "rejectedByStaff";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

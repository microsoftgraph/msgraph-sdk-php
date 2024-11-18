<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VirtualEventAttendeeRegistrationStatus extends Enum {
    public const REGISTERED = "registered";
    public const CANCELED = "canceled";
    public const WAITLISTED = "waitlisted";
    public const PENDING_APPROVAL = "pendingApproval";
    public const REJECTED_BY_ORGANIZER = "rejectedByOrganizer";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

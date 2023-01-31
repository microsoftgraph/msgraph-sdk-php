<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminRelationshipStatus extends Enum {
    public const ACTIVATING = 'activating';
    public const ACTIVE = 'active';
    public const APPROVAL_PENDING = 'approvalPending';
    public const APPROVED = 'approved';
    public const CREATED = 'created';
    public const EXPIRED = 'expired';
    public const EXPIRING = 'expiring';
    public const TERMINATED = 'terminated';
    public const TERMINATING = 'terminating';
    public const TERMINATION_REQUESTED = 'terminationRequested';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

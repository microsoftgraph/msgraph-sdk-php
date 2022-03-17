<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageRequestState extends Enum {
    public const SUBMITTED = 'submitted';
    public const PENDING_APPROVAL = 'pendingApproval';
    public const DELIVERING = 'delivering';
    public const DELIVERED = 'delivered';
    public const DELIVERY_FAILED = 'deliveryFailed';
    public const DENIED = 'denied';
    public const SCHEDULED = 'scheduled';
    public const CANCELED = 'canceled';
    public const PARTIALLY_DELIVERED = 'partiallyDelivered';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

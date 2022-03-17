<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageAssignmentState extends Enum {
    public const DELIVERING = 'delivering';
    public const PARTIALLY_DELIVERED = 'partiallyDelivered';
    public const DELIVERED = 'delivered';
    public const EXPIRED = 'expired';
    public const DELIVERY_FAILED = 'deliveryFailed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeliveryAction extends Enum {
    public const UNKNOWN = "unknown";
    public const DELIVERED_TO_JUNK = "deliveredToJunk";
    public const DELIVERED = "delivered";
    public const BLOCKED = "blocked";
    public const REPLACED = "replaced";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

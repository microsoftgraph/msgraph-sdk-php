<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExchangeMessageTraceStatus extends Enum {
    public const GETTING_STATUS = "gettingStatus";
    public const PENDING = "pending";
    public const FAILED = "failed";
    public const DELIVERED = "delivered";
    public const EXPANDED = "expanded";
    public const QUARANTINED = "quarantined";
    public const FILTERED_AS_SPAM = "filteredAsSpam";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

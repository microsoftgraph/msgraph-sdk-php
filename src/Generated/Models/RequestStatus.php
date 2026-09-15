<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RequestStatus extends Enum {
    public const PENDING = "pending";
    public const ACCEPTED = "accepted";
    public const REJECTED = "rejected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

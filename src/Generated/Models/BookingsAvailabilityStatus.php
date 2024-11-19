<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingsAvailabilityStatus extends Enum {
    public const AVAILABLE = "available";
    public const BUSY = "busy";
    public const SLOTS_AVAILABLE = "slotsAvailable";
    public const OUT_OF_OFFICE = "outOfOffice";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

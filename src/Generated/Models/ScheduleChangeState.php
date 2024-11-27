<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ScheduleChangeState extends Enum {
    public const PENDING = "pending";
    public const APPROVED = "approved";
    public const DECLINED = "declined";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

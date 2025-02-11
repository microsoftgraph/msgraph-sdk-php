<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TimeCardState extends Enum {
    public const CLOCKED_IN = "clockedIn";
    public const ON_BREAK = "onBreak";
    public const CLOCKED_OUT = "clockedOut";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

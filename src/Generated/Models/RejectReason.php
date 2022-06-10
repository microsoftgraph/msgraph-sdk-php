<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RejectReason extends Enum {
    public const NONE = 'none';
    public const BUSY = 'busy';
    public const FORBIDDEN = 'forbidden';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

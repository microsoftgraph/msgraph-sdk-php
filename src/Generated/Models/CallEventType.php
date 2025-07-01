<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallEventType extends Enum {
    public const CALL_STARTED = "callStarted";
    public const CALL_ENDED = "callEnded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const ROSTER_UPDATED = "rosterUpdated";
}

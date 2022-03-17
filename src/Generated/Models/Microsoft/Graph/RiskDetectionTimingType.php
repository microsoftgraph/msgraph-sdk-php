<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class RiskDetectionTimingType extends Enum {
    public const NOT_DEFINED = 'notDefined';
    public const REALTIME = 'realtime';
    public const NEAR_REALTIME = 'nearRealtime';
    public const OFFLINE = 'offline';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class TimelineEventType extends Enum {
    public const ORIGINAL_DELIVERY = "originalDelivery";
    public const SYSTEM_TIME_TRAVEL = "systemTimeTravel";
    public const DYNAMIC_DELIVERY = "dynamicDelivery";
    public const USER_URL_CLICK = "userUrlClick";
    public const REPROCESSED = "reprocessed";
    public const ZAP = "zap";
    public const QUARANTINE_RELEASE = "quarantineRelease";
    public const AIR = "air";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

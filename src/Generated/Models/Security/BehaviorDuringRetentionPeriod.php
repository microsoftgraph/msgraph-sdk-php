<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class BehaviorDuringRetentionPeriod extends Enum {
    public const DO_NOT_RETAIN = "doNotRetain";
    public const RETAIN = "retain";
    public const RETAIN_AS_RECORD = "retainAsRecord";
    public const RETAIN_AS_REGULATORY_RECORD = "retainAsRegulatoryRecord";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

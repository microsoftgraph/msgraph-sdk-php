<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ResponseFeedbackType extends Enum {
    public const NONE = "none";
    public const NOT_DETECTED = "notDetected";
    public const VERY_UNPLEASANT = "veryUnpleasant";
    public const UNPLEASANT = "unpleasant";
    public const NEUTRAL = "neutral";
    public const PLEASANT = "pleasant";
    public const VERY_PLEASANT = "veryPleasant";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

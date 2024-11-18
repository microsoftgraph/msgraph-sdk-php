<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DetectionStatus extends Enum {
    public const DETECTED = "detected";
    public const BLOCKED = "blocked";
    public const PREVENTED = "prevented";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

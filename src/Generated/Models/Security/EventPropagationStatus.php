<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EventPropagationStatus extends Enum {
    public const NONE = "none";
    public const IN_PROCESSING = "inProcessing";
    public const FAILED = "failed";
    public const SUCCESS = "success";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

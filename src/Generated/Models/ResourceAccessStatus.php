<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ResourceAccessStatus extends Enum {
    public const NONE = "none";
    public const FAILURE = "failure";
    public const SUCCESS = "success";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

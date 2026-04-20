<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MonitorRunStatus extends Enum {
    public const SUCCESSFUL = "successful";
    public const PARTIALLY_SUCCESSFUL = "partiallySuccessful";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\\Graph\\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectionOperationStatus extends Enum {
    public const UNSPECIFIED = "unspecified";
    public const INPROGRESS = "inprogress";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

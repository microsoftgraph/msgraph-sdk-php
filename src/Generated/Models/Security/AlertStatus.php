<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AlertStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const NEW = "new";
    public const IN_PROGRESS = "inProgress";
    public const RESOLVED = "resolved";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

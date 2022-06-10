<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceUpdateSeverity extends Enum {
    public const NORMAL = 'normal';
    public const HIGH = 'high';
    public const CRITICAL = 'critical';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

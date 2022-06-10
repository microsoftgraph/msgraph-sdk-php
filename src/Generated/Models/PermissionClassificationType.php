<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PermissionClassificationType extends Enum {
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const HIGH = 'high';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

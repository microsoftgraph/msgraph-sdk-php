<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AlertStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const NEW_ALERT = 'newAlert';
    public const IN_PROGRESS = 'inProgress';
    public const RESOLVED = 'resolved';
    public const DISMISSED = 'dismissed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

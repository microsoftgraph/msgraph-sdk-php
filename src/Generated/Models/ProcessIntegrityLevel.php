<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProcessIntegrityLevel extends Enum {
    public const UNKNOWN = 'unknown';
    public const UNTRUSTED = 'untrusted';
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const HIGH = 'high';
    public const SYSTEM = 'system';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

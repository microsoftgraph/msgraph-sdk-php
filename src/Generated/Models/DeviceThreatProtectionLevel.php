<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceThreatProtectionLevel extends Enum {
    public const UNAVAILABLE = 'unavailable';
    public const SECURED = 'secured';
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const HIGH = 'high';
    public const NOT_SET = 'notSet';
}

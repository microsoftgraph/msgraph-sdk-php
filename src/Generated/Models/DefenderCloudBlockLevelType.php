<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderCloudBlockLevelType extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const HIGH = 'high';
    public const HIGH_PLUS = 'highPlus';
    public const ZERO_TOLERANCE = 'zeroTolerance';
}

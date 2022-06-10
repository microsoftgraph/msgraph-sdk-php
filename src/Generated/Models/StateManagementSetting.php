<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class StateManagementSetting extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const BLOCKED = 'blocked';
    public const ALLOWED = 'allowed';
}

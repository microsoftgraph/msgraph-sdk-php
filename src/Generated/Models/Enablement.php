<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Enablement extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
}

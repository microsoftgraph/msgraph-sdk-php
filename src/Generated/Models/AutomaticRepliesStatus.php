<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AutomaticRepliesStatus extends Enum {
    public const DISABLED = 'disabled';
    public const ALWAYS_ENABLED = 'alwaysEnabled';
    public const SCHEDULED = 'scheduled';
}

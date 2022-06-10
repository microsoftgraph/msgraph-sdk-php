<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VppTokenSyncStatus extends Enum {
    public const NONE = 'none';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const FAILED = 'failed';
}

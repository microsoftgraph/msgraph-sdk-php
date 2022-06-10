<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OperationStatus extends Enum {
    public const NOT_STARTED = 'NotStarted';
    public const RUNNING = 'Running';
    public const COMPLETED = 'Completed';
    public const FAILED = 'Failed';
}

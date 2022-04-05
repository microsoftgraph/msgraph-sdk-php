<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EnrollmentState extends Enum {
    public const UNKNOWN = 'unknown';
    public const ENROLLED = 'enrolled';
    public const PENDING_RESET = 'pendingReset';
    public const FAILED = 'failed';
    public const NOT_CONTACTED = 'notContacted';
}

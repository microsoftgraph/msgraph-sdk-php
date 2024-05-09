<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EducationSubmissionStatus extends Enum {
    public const WORKING = 'working';
    public const SUBMITTED = 'submitted';
    public const RELEASED = 'released';
    public const RETURNED = 'returned';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const REASSIGNED = 'reassigned';
    public const EXCUSED = 'excused';
}

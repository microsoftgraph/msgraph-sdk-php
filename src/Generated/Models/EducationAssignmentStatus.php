<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EducationAssignmentStatus extends Enum {
    public const DRAFT = 'draft';
    public const PUBLISHED = 'published';
    public const ASSIGNED = 'assigned';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

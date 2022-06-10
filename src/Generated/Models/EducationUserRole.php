<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EducationUserRole extends Enum {
    public const STUDENT = 'student';
    public const TEACHER = 'teacher';
    public const NONE = 'none';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

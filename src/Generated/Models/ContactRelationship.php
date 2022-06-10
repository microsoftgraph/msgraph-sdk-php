<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ContactRelationship extends Enum {
    public const PARENT = 'parent';
    public const RELATIVE = 'relative';
    public const AIDE = 'aide';
    public const DOCTOR = 'doctor';
    public const GUARDIAN = 'guardian';
    public const CHILD = 'child';
    public const OTHER = 'other';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

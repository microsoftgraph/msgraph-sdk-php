<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecurrenceRangeType extends Enum {
    public const END_DATE = 'endDate';
    public const NO_END = 'noEnd';
    public const NUMBERED = 'numbered';
}

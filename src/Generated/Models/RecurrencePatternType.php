<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecurrencePatternType extends Enum {
    public const DAILY = 'daily';
    public const WEEKLY = 'weekly';
    public const ABSOLUTE_MONTHLY = 'absoluteMonthly';
    public const RELATIVE_MONTHLY = 'relativeMonthly';
    public const ABSOLUTE_YEARLY = 'absoluteYearly';
    public const RELATIVE_YEARLY = 'relativeYearly';
}

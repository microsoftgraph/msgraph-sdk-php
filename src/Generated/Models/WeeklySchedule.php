<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WeeklySchedule extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const EVERYDAY = 'everyday';
    public const SUNDAY = 'sunday';
    public const MONDAY = 'monday';
    public const TUESDAY = 'tuesday';
    public const WEDNESDAY = 'wednesday';
    public const THURSDAY = 'thursday';
    public const FRIDAY = 'friday';
    public const SATURDAY = 'saturday';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DataRetentionLevel extends Enum {
    public const NONE = "none";
    public const DATA_RETAINED = "dataRetained";
    public const DELETED_IMMEDIATELY = "deletedImmediately";
    public const DELETED_WITHIN1_MONTH = "deletedWithin1Month";
    public const DELETED_WITHIN2_WEEKS = "deletedWithin2Weeks";
    public const DELETED_WITHIN3_MONTHS = "deletedWithin3Months";
    public const DELETED_WITHIN_MORE_THAN3_MONTHS = "deletedWithinMoreThan3Months";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

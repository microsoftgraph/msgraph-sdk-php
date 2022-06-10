<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceUpdateCategory extends Enum {
    public const PREVENT_OR_FIX_ISSUE = 'preventOrFixIssue';
    public const PLAN_FOR_CHANGE = 'planForChange';
    public const STAY_INFORMED = 'stayInformed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

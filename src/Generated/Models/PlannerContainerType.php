<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlannerContainerType extends Enum {
    public const GROUP = 'group';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const ROSTER = 'roster';
}

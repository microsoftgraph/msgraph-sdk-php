<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PostType extends Enum {
    public const REGULAR = 'regular';
    public const QUICK = 'quick';
    public const STRATEGIC = 'strategic';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

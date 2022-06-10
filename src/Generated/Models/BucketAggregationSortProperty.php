<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BucketAggregationSortProperty extends Enum {
    public const COUNT = 'count';
    public const KEY_AS_STRING = 'keyAsString';
    public const KEY_AS_NUMBER = 'keyAsNumber';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

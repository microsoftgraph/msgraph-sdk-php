<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RoutingType extends Enum {
    public const FORWARDED = 'forwarded';
    public const LOOKUP = 'lookup';
    public const SELF_FORK = 'selfFork';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

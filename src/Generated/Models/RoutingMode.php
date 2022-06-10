<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RoutingMode extends Enum {
    public const ONE_TO_ONE = 'oneToOne';
    public const MULTICAST = 'multicast';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

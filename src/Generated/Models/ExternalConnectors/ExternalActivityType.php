<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalActivityType extends Enum {
    public const VIEWED = 'viewed';
    public const MODIFIED = 'modified';
    public const CREATED = 'created';
    public const COMMENTED = 'commented';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class AccessType extends Enum {
    public const GRANT = 'grant';
    public const DENY = 'deny';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

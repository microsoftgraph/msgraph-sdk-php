<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectionDirection extends Enum {
    public const UNKNOWN = 'unknown';
    public const INBOUND = 'inbound';
    public const OUTBOUND = 'outbound';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

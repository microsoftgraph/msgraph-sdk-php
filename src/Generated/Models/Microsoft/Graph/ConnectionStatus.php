<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectionStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const ATTEMPTED = 'attempted';
    public const SUCCEEDED = 'succeeded';
    public const BLOCKED = 'blocked';
    public const FAILED = 'failed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

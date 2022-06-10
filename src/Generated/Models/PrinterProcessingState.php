<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrinterProcessingState extends Enum {
    public const UNKNOWN = 'unknown';
    public const IDLE = 'idle';
    public const PROCESSING = 'processing';
    public const STOPPED = 'stopped';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

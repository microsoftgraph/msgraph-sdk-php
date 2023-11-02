<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SimulationStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const DRAFT = 'draft';
    public const RUNNING = 'running';
    public const SCHEDULED = 'scheduled';
    public const SUCCEEDED = 'succeeded';
    public const FAILED = 'failed';
    public const CANCELLED = 'cancelled';
    public const EXCLUDED = 'excluded';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

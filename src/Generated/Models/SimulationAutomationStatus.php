<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SimulationAutomationStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const DRAFT = 'draft';
    public const NOT_RUNNING = 'notRunning';
    public const RUNNING = 'running';
    public const COMPLETED = 'completed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

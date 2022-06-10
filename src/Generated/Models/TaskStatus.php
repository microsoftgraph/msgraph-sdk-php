<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TaskStatus extends Enum {
    public const NOT_STARTED = 'notStarted';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const WAITING_ON_OTHERS = 'waitingOnOthers';
    public const DEFERRED = 'deferred';
}

<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ScheduleChangeRequestActor extends Enum {
    public const SENDER = 'sender';
    public const RECIPIENT = 'recipient';
    public const MANAGER = 'manager';
    public const SYSTEM = 'system';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

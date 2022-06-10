<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OnlineMeetingRole extends Enum {
    public const ATTENDEE = 'attendee';
    public const PRESENTER = 'presenter';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const PRODUCER = 'producer';
}

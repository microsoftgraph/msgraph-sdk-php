<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivityType extends Enum {
    public const SIGNIN = 'signin';
    public const USER = 'user';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

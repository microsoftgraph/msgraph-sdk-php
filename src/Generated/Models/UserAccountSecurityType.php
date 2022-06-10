<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserAccountSecurityType extends Enum {
    public const UNKNOWN = 'unknown';
    public const STANDARD = 'standard';
    public const POWER = 'power';
    public const ADMINISTRATOR = 'administrator';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

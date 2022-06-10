<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationMethodTargetType extends Enum {
    public const USER = 'user';
    public const GROUP = 'group';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TargettedUserType extends Enum {
    public const UNKNOWN = 'unknown';
    public const CLICKED = 'clicked';
    public const COMPROMISED = 'compromised';
    public const ALL_USERS = 'allUsers';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

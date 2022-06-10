<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamVisibilityType extends Enum {
    public const ESCAPED_PRIVATE = 'private';
    public const ESCAPED_PUBLIC = 'public';
    public const HIDDEN_MEMBERSHIP = 'hiddenMembership';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SiteLockState extends Enum {
    public const UNLOCKED = "unlocked";
    public const LOCKED_READ_ONLY = "lockedReadOnly";
    public const LOCKED_NO_ACCESS = "lockedNoAccess";
    public const LOCKED_NO_ADDITIONS = "lockedNoAdditions";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

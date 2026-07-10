<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Enum;

class RecoveryAction extends Enum {
    public const SOFT_DELETE = "softDelete";
    public const UPDATE = "update";
    public const RESTORE = "restore";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

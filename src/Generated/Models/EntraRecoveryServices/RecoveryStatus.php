<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Kiota\Abstractions\Enum;

class RecoveryStatus extends Enum {
    public const INITIALIZED = "initialized";
    public const RUNNING = "running";
    public const SUCCESSFUL = "successful";
    public const FAILED = "failed";
    public const ABANDONED = "abandoned";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const CALCULATING = "calculating";
    public const LOADING_DATA = "loadingData";
}

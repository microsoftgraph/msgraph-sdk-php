<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DataSourceHoldStatus extends Enum {
    public const NOT_APPLIED = "notApplied";
    public const APPLIED = "applied";
    public const APPLYING = "applying";
    public const REMOVING = "removing";
    public const PARTIAL = "partial";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

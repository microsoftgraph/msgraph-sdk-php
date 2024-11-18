<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SiteArchiveStatus extends Enum {
    public const RECENTLY_ARCHIVED = "recentlyArchived";
    public const FULLY_ARCHIVED = "fullyArchived";
    public const REACTIVATING = "reactivating";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

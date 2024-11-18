<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewExpirationBehavior extends Enum {
    public const KEEP_ACCESS = "keepAccess";
    public const REMOVE_ACCESS = "removeAccess";
    public const ACCEPT_ACCESS_RECOMMENDATION = "acceptAccessRecommendation";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

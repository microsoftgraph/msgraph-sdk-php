<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewHistoryStatus extends Enum {
    public const DONE = 'done';
    public const INPROGRESS = 'inprogress';
    public const ERROR = 'error';
    public const REQUESTED = 'requested';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

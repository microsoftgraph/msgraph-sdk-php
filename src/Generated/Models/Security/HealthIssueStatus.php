<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class HealthIssueStatus extends Enum {
    public const OPEN = 'open';
    public const CLOSED = 'closed';
    public const SUPPRESSED = 'suppressed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

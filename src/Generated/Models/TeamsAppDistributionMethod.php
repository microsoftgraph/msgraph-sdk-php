<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamsAppDistributionMethod extends Enum {
    public const STORE = 'store';
    public const ORGANIZATION = 'organization';
    public const SIDELOADED = 'sideloaded';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

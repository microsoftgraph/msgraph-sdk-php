<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MediaState extends Enum {
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

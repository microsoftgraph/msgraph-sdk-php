<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExternalEmailOtpState extends Enum {
    public const ESCAPED_DEFAULT = 'default';
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

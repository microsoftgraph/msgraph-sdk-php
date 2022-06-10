<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class IdentityUserFlowAttributeType extends Enum {
    public const BUILT_IN = 'builtIn';
    public const CUSTOM = 'custom';
    public const REQUIRED = 'required';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

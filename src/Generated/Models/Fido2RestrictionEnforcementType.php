<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Fido2RestrictionEnforcementType extends Enum {
    public const ALLOW = 'allow';
    public const BLOCK = 'block';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

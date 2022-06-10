<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SafeSearchFilterType extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const STRICT = 'strict';
    public const MODERATE = 'moderate';
}

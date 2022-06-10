<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SearchAlterationType extends Enum {
    public const SUGGESTION = 'suggestion';
    public const MODIFICATION = 'modification';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GiphyRatingType extends Enum {
    public const STRICT = 'strict';
    public const MODERATE = 'moderate';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

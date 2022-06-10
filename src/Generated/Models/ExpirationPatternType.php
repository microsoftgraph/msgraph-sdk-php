<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExpirationPatternType extends Enum {
    public const NOT_SPECIFIED = 'notSpecified';
    public const NO_EXPIRATION = 'noExpiration';
    public const AFTER_DATE_TIME = 'afterDateTime';
    public const AFTER_DURATION = 'afterDuration';
}

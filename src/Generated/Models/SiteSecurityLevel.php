<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SiteSecurityLevel extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const LOW = 'low';
    public const MEDIUM_LOW = 'mediumLow';
    public const MEDIUM = 'medium';
    public const MEDIUM_HIGH = 'mediumHigh';
    public const HIGH = 'high';
}

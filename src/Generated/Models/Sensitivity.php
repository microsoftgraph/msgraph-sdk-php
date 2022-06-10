<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Sensitivity extends Enum {
    public const NORMAL = 'normal';
    public const PERSONAL = 'personal';
    public const ESCAPED_PRIVATE = 'private';
    public const CONFIDENTIAL = 'confidential';
}

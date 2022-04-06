<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Sensitivity extends Enum {
    public const NORMAL = 'normal';
    public const PERSONAL = 'personal';
    public const ESCAPED_PRIVATE = 'EscapedPrivate';
    public const CONFIDENTIAL = 'confidential';
}

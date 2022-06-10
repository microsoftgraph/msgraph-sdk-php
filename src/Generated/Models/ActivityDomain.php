<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivityDomain extends Enum {
    public const UNKNOWN = 'unknown';
    public const WORK = 'work';
    public const PERSONAL = 'personal';
    public const UNRESTRICTED = 'unrestricted';
}

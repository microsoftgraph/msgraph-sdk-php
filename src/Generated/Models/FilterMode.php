<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FilterMode extends Enum {
    public const ESCAPED_INCLUDE = 'include';
    public const EXCLUDE = 'exclude';
}

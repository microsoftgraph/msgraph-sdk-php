<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VisibilitySetting extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const HIDE = 'hide';
    public const SHOW = 'show';
}

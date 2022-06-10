<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedDeviceOwnerType extends Enum {
    public const UNKNOWN = 'unknown';
    public const COMPANY = 'company';
    public const PERSONAL = 'personal';
}

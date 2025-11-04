<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharedPCAccountDeletionPolicyType extends Enum {
    public const IMMEDIATE = "immediate";
    public const DISK_SPACE_THRESHOLD = "diskSpaceThreshold";
    public const DISK_SPACE_THRESHOLD_OR_INACTIVE_THRESHOLD = "diskSpaceThresholdOrInactiveThreshold";
}

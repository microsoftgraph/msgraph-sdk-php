<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidWorkProfileDefaultAppPermissionPolicyType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const PROMPT = 'prompt';
    public const AUTO_GRANT = 'autoGrant';
    public const AUTO_DENY = 'autoDeny';
}

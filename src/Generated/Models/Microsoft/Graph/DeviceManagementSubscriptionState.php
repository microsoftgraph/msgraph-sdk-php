<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementSubscriptionState extends Enum {
    public const PENDING = 'pending';
    public const ACTIVE = 'active';
    public const WARNING = 'warning';
    public const DISABLED = 'disabled';
    public const DELETED = 'deleted';
    public const BLOCKED = 'blocked';
    public const LOCKED_OUT = 'lockedOut';
}

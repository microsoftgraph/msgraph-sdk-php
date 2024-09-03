<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BackupServiceStatus extends Enum {
    public const DISABLED = 'disabled';
    public const ENABLED = 'enabled';
    public const PROTECTION_CHANGE_LOCKED = 'protectionChangeLocked';
    public const RESTORE_LOCKED = 'restoreLocked';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

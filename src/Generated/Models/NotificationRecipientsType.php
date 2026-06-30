<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationRecipientsType extends Enum {
    public const NONE = "none";
    public const GLOBAL_ADMINS = "globalAdmins";
    public const BACKUP_ADMINS = "backupAdmins";
    public const CUSTOM = "custom";
    public const ALL_ADMINS = "allAdmins";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

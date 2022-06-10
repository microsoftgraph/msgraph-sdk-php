<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsUserAccountControlSettings extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const ALWAYS_NOTIFY = 'alwaysNotify';
    public const NOTIFY_ON_APP_CHANGES = 'notifyOnAppChanges';
    public const NOTIFY_ON_APP_CHANGES_WITHOUT_DIMMING = 'notifyOnAppChangesWithoutDimming';
    public const NEVER_NOTIFY = 'neverNotify';
}

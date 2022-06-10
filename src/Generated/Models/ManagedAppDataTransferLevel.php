<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppDataTransferLevel extends Enum {
    public const ALL_APPS = 'allApps';
    public const MANAGED_APPS = 'managedApps';
    public const NONE = 'none';
}

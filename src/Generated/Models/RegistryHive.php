<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RegistryHive extends Enum {
    public const UNKNOWN = 'unknown';
    public const CURRENT_CONFIG = 'currentConfig';
    public const CURRENT_USER = 'currentUser';
    public const LOCAL_MACHINE_SAM = 'localMachineSam';
    public const LOCAL_MACHINE_SECURITY = 'localMachineSecurity';
    public const LOCAL_MACHINE_SOFTWARE = 'localMachineSoftware';
    public const LOCAL_MACHINE_SYSTEM = 'localMachineSystem';
    public const USERS_DEFAULT = 'usersDefault';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppDataEncryptionType extends Enum {
    public const USE_DEVICE_SETTINGS = 'useDeviceSettings';
    public const AFTER_DEVICE_RESTART = 'afterDeviceRestart';
    public const WHEN_DEVICE_LOCKED_EXCEPT_OPEN_FILES = 'whenDeviceLockedExceptOpenFiles';
    public const WHEN_DEVICE_LOCKED = 'whenDeviceLocked';
}

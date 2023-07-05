<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsDeviceHealthState extends Enum {
    public const CLEAN = 'clean';
    public const FULL_SCAN_PENDING = 'fullScanPending';
    public const REBOOT_PENDING = 'rebootPending';
    public const MANUAL_STEPS_PENDING = 'manualStepsPending';
    public const OFFLINE_SCAN_PENDING = 'offlineScanPending';
    public const CRITICAL = 'critical';
}

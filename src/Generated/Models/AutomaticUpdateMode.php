<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AutomaticUpdateMode extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const NOTIFY_DOWNLOAD = 'notifyDownload';
    public const AUTO_INSTALL_AT_MAINTENANCE_TIME = 'autoInstallAtMaintenanceTime';
    public const AUTO_INSTALL_AND_REBOOT_AT_MAINTENANCE_TIME = 'autoInstallAndRebootAtMaintenanceTime';
    public const AUTO_INSTALL_AND_REBOOT_AT_SCHEDULED_TIME = 'autoInstallAndRebootAtScheduledTime';
    public const AUTO_INSTALL_AND_REBOOT_WITHOUT_END_USER_CONTROL = 'autoInstallAndRebootWithoutEndUserControl';
}

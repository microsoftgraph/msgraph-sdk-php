<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserExperienceAnalyticsOperatingSystemRestartCategory extends Enum {
    public const UNKNOWN = "unknown";
    public const RESTART_WITH_UPDATE = "restartWithUpdate";
    public const RESTART_WITHOUT_UPDATE = "restartWithoutUpdate";
    public const BLUE_SCREEN = "blueScreen";
    public const SHUTDOWN_WITH_UPDATE = "shutdownWithUpdate";
    public const SHUTDOWN_WITHOUT_UPDATE = "shutdownWithoutUpdate";
    public const LONG_POWER_BUTTON_PRESS = "longPowerButtonPress";
    public const BOOT_ERROR = "bootError";
    public const UPDATE = "update";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

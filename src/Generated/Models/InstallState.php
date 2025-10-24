<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InstallState extends Enum {
    public const NOT_APPLICABLE = "notApplicable";
    public const INSTALLED = "installed";
    public const FAILED = "failed";
    public const NOT_INSTALLED = "notInstalled";
    public const UNINSTALL_FAILED = "uninstallFailed";
    public const UNKNOWN = "unknown";
}

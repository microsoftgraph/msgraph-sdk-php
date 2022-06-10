<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsUpdateType extends Enum {
    public const USER_DEFINED = 'userDefined';
    public const ALL = 'all';
    public const BUSINESS_READY_ONLY = 'businessReadyOnly';
    public const WINDOWS_INSIDER_BUILD_FAST = 'windowsInsiderBuildFast';
    public const WINDOWS_INSIDER_BUILD_SLOW = 'windowsInsiderBuildSlow';
    public const WINDOWS_INSIDER_BUILD_RELEASE = 'windowsInsiderBuildRelease';
}

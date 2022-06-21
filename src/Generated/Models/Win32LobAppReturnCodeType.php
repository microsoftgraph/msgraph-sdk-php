<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Win32LobAppReturnCodeType extends Enum {
    public const FAILED = 'failed';
    public const SUCCESS = 'success';
    public const SOFT_REBOOT = 'softReboot';
    public const HARD_REBOOT = 'hardReboot';
    public const RETRY = 'retry';
}

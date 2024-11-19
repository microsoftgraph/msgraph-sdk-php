<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderThreatAction extends Enum {
    public const DEVICE_DEFAULT = "deviceDefault";
    public const CLEAN = "clean";
    public const QUARANTINE = "quarantine";
    public const REMOVE = "remove";
    public const ALLOW = "allow";
    public const USER_DEFINED = "userDefined";
    public const BLOCK = "block";
}

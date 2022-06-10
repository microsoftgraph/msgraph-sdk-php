<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SettingSourceType extends Enum {
    public const DEVICE_CONFIGURATION = 'deviceConfiguration';
    public const DEVICE_INTENT = 'deviceIntent';
}

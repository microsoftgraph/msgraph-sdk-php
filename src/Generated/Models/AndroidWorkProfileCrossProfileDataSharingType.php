<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidWorkProfileCrossProfileDataSharingType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const PREVENT_ANY = 'preventAny';
    public const ALLOW_PERSONAL_TO_WORK = 'allowPersonalToWork';
    public const NO_RESTRICTIONS = 'noRestrictions';
}

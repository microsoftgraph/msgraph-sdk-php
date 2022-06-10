<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PermissionType extends Enum {
    public const APPLICATION = 'application';
    public const DELEGATED = 'delegated';
    public const DELEGATED_USER_CONSENTABLE = 'delegatedUserConsentable';
}

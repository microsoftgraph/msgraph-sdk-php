<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessPolicyState extends Enum {
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
    public const ENABLED_FOR_REPORTING_BUT_NOT_ENFORCED = 'enabledForReportingButNotEnforced';
}

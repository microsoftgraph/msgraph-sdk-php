<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ComplianceState extends Enum {
    public const UNKNOWN = 'unknown';
    public const COMPLIANT = 'compliant';
    public const NONCOMPLIANT = 'noncompliant';
    public const CONFLICT = 'conflict';
    public const ERROR = 'error';
    public const IN_GRACE_PERIOD = 'inGracePeriod';
    public const CONFIG_MANAGER = 'configManager';
}

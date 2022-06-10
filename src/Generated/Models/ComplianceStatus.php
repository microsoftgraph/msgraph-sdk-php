<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ComplianceStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const NOT_APPLICABLE = 'notApplicable';
    public const COMPLIANT = 'compliant';
    public const REMEDIATED = 'remediated';
    public const NON_COMPLIANT = 'nonCompliant';
    public const ERROR = 'error';
    public const CONFLICT = 'conflict';
    public const NOT_ASSIGNED = 'notAssigned';
}

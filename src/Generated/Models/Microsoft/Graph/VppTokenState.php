<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class VppTokenState extends Enum {
    public const UNKNOWN = 'unknown';
    public const VALID = 'valid';
    public const EXPIRED = 'expired';
    public const INVALID = 'invalid';
    public const ASSIGNED_TO_EXTERNAL_M_D_M = 'assignedToExternalMDM';
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EvidenceRemediationStatus extends Enum {
    public const NONE = "none";
    public const REMEDIATED = "remediated";
    public const PREVENTED = "prevented";
    public const BLOCKED = "blocked";
    public const NOT_FOUND = "notFound";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

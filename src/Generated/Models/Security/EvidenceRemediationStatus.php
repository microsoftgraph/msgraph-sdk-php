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
    public const ACTIVE = "active";
    public const PENDING_APPROVAL = "pendingApproval";
    public const DECLINED = "declined";
    public const UNREMEDIATED = "unremediated";
    public const RUNNING = "running";
    public const PARTIALLY_REMEDIATED = "partiallyRemediated";
}

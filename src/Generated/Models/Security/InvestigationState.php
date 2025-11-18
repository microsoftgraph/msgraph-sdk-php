<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class InvestigationState extends Enum {
    public const UNKNOWN = "unknown";
    public const TERMINATED = "terminated";
    public const SUCCESSFULLY_REMEDIATED = "successfullyRemediated";
    public const BENIGN = "benign";
    public const FAILED = "failed";
    public const PARTIALLY_REMEDIATED = "partiallyRemediated";
    public const RUNNING = "running";
    public const PENDING_APPROVAL = "pendingApproval";
    public const PENDING_RESOURCE = "pendingResource";
    public const QUEUED = "queued";
    public const INNER_FAILURE = "innerFailure";
    public const PREEXISTING_ALERT = "preexistingAlert";
    public const UNSUPPORTED_OS = "unsupportedOs";
    public const UNSUPPORTED_ALERT_TYPE = "unsupportedAlertType";
    public const SUPPRESSED_ALERT = "suppressedAlert";
    public const PARTIALLY_INVESTIGATED = "partiallyInvestigated";
    public const TERMINATED_BY_USER = "terminatedByUser";
    public const TERMINATED_BY_SYSTEM = "terminatedBySystem";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

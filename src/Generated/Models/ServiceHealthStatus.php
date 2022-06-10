<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceHealthStatus extends Enum {
    public const SERVICE_OPERATIONAL = 'serviceOperational';
    public const INVESTIGATING = 'investigating';
    public const RESTORING_SERVICE = 'restoringService';
    public const VERIFYING_SERVICE = 'verifyingService';
    public const SERVICE_RESTORED = 'serviceRestored';
    public const POST_INCIDENT_REVIEW_PUBLISHED = 'postIncidentReviewPublished';
    public const SERVICE_DEGRADATION = 'serviceDegradation';
    public const SERVICE_INTERRUPTION = 'serviceInterruption';
    public const EXTENDED_RECOVERY = 'extendedRecovery';
    public const FALSE_POSITIVE = 'falsePositive';
    public const INVESTIGATION_SUSPENDED = 'investigationSuspended';
    public const RESOLVED = 'resolved';
    public const MITIGATED_EXTERNAL = 'mitigatedExternal';
    public const MITIGATED = 'mitigated';
    public const RESOLVED_EXTERNAL = 'resolvedExternal';
    public const CONFIRMED = 'confirmed';
    public const REPORTED = 'reported';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedDevicePartnerReportedHealthState extends Enum {
    public const UNKNOWN = "unknown";
    public const ACTIVATED = "activated";
    public const DEACTIVATED = "deactivated";
    public const SECURED = "secured";
    public const LOW_SEVERITY = "lowSeverity";
    public const MEDIUM_SEVERITY = "mediumSeverity";
    public const HIGH_SEVERITY = "highSeverity";
    public const UNRESPONSIVE = "unresponsive";
    public const COMPROMISED = "compromised";
    public const MISCONFIGURED = "misconfigured";
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ServiceStatus extends Enum {
    public const STOPPED = "stopped";
    public const STARTING = "starting";
    public const RUNNING = "running";
    public const DISABLED = "disabled";
    public const ONBOARDING = "onboarding";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

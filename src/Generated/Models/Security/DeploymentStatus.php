<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeploymentStatus extends Enum {
    public const UP_TO_DATE = "upToDate";
    public const OUTDATED = "outdated";
    public const UPDATING = "updating";
    public const UPDATE_FAILED = "updateFailed";
    public const NOT_CONFIGURED = "notConfigured";
    public const UNREACHABLE = "unreachable";
    public const DISCONNECTED = "disconnected";
    public const START_FAILURE = "startFailure";
    public const SYNCING = "syncing";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IncidentStatus extends Enum {
    public const ACTIVE = "active";
    public const RESOLVED = "resolved";
    public const IN_PROGRESS = "inProgress";
    public const REDIRECTED = "redirected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const AWAITING_ACTION = "awaitingAction";
}

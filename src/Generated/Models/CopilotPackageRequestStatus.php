<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CopilotPackageRequestStatus extends Enum {
    public const PENDING = "pending";
    public const APPROVED = "approved";
    public const REJECTED = "rejected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

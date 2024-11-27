<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminRelationshipRequestStatus extends Enum {
    public const CREATED = "created";
    public const PENDING = "pending";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

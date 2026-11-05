<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CrossTenantMigrationJobType extends Enum {
    public const VALIDATE = "validate";
    public const MIGRATE = "migrate";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

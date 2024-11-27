<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ServicePrincipalType extends Enum {
    public const UNKNOWN = "unknown";
    public const APPLICATION = "application";
    public const MANAGED_IDENTITY = "managedIdentity";
    public const LEGACY = "legacy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

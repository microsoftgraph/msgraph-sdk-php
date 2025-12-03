<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IdentityProvider extends Enum {
    public const ENTRA_I_D = "entraID";
    public const ACTIVE_DIRECTORY = "activeDirectory";
    public const OKTA = "okta";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

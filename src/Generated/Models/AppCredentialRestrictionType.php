<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppCredentialRestrictionType extends Enum {
    public const PASSWORD_ADDITION = "passwordAddition";
    public const PASSWORD_LIFETIME = "passwordLifetime";
    public const SYMMETRIC_KEY_ADDITION = "symmetricKeyAddition";
    public const SYMMETRIC_KEY_LIFETIME = "symmetricKeyLifetime";
    public const CUSTOM_PASSWORD_ADDITION = "customPasswordAddition";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

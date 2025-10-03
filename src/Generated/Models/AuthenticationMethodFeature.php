<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationMethodFeature extends Enum {
    public const SSPR_REGISTERED = "ssprRegistered";
    public const SSPR_ENABLED = "ssprEnabled";
    public const SSPR_CAPABLE = "ssprCapable";
    public const PASSWORDLESS_CAPABLE = "passwordlessCapable";
    public const MFA_CAPABLE = "mfaCapable";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

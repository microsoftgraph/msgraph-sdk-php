<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class Action extends Enum {
    public const DISABLE = "disable";
    public const ENABLE = "enable";
    public const FORCE_PASSWORD_RESET = "forcePasswordReset";
    public const REVOKE_ALL_SESSIONS = "revokeAllSessions";
    public const REQUIRE_USER_TO_SIGN_IN_AGAIN = "requireUserToSignInAgain";
    public const MARK_USER_AS_COMPROMISED = "markUserAsCompromised";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

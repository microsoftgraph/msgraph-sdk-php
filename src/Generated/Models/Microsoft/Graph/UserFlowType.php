<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class UserFlowType extends Enum {
    public const SIGN_UP = 'signUp';
    public const SIGN_IN = 'signIn';
    public const SIGN_UP_OR_SIGN_IN = 'signUpOrSignIn';
    public const PASSWORD_RESET = 'passwordReset';
    public const PROFILE_UPDATE = 'profileUpdate';
    public const RESOURCE_OWNER = 'resourceOwner';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

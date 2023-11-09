<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationMethodSignInState extends Enum {
    public const NOT_SUPPORTED = 'notSupported';
    public const NOT_ALLOWED_BY_POLICY = 'notAllowedByPolicy';
    public const NOT_ENABLED = 'notEnabled';
    public const PHONE_NUMBER_NOT_UNIQUE = 'phoneNumberNotUnique';
    public const READY = 'ready';
    public const NOT_CONFIGURED = 'notConfigured';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

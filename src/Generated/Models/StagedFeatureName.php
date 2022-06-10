<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class StagedFeatureName extends Enum {
    public const PASSTHROUGH_AUTHENTICATION = 'passthroughAuthentication';
    public const SEAMLESS_SSO = 'seamlessSso';
    public const PASSWORD_HASH_SYNC = 'passwordHashSync';
    public const EMAIL_AS_ALTERNATE_ID = 'emailAsAlternateId';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const CERTIFICATE_BASED_AUTHENTICATION = 'certificateBasedAuthentication';
    public const MULTI_FACTOR_AUTHENTICATION = 'multiFactorAuthentication';
}

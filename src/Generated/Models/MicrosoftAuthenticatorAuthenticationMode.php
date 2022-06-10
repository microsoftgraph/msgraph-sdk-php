<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MicrosoftAuthenticatorAuthenticationMode extends Enum {
    public const DEVICE_BASED_PUSH = 'deviceBasedPush';
    public const PUSH = 'push';
    public const ANY = 'any';
}

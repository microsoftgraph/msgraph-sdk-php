<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationProtocol extends Enum {
    public const WS_FED = 'wsFed';
    public const SAML = 'saml';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

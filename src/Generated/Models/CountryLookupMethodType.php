<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CountryLookupMethodType extends Enum {
    public const CLIENT_IP_ADDRESS = 'clientIpAddress';
    public const AUTHENTICATOR_APP_GPS = 'authenticatorAppGps';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

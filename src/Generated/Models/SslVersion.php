<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SslVersion extends Enum {
    public const NONE = "none";
    public const SSL3_0 = "ssl3_0";
    public const TLS1_0 = "tls1_0";
    public const TLS1_1 = "tls1_1";
    public const TLS1_2 = "tls1_2";
    public const TLS1_3 = "tls1_3";
    public const NOT_SUPPORTED = "notSupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

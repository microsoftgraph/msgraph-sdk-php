<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FirewallCertificateRevocationListCheckMethodType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const NONE = 'none';
    public const ATTEMPT = 'attempt';
    public const ESCAPED_REQUIRE = 'require';
}

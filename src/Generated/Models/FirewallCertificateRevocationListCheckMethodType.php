<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FirewallCertificateRevocationListCheckMethodType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const NONE = 'none';
    public const ATTEMPT = 'attempt';
    public const REQUIRE = 'require';
}

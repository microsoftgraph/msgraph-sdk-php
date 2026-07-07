<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ThreatType extends Enum {
    public const UNKNOWN = "unknown";
    public const SPAM = "spam";
    public const MALWARE = "malware";
    public const PHISH = "phish";
    public const NONE = "none";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

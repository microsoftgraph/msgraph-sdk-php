<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class HostReputationClassification extends Enum {
    public const UNKNOWN = "unknown";
    public const NEUTRAL = "neutral";
    public const SUSPICIOUS = "suspicious";
    public const MALICIOUS = "malicious";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

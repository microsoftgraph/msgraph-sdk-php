<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EvidenceVerdict extends Enum {
    public const UNKNOWN = "unknown";
    public const SUSPICIOUS = "suspicious";
    public const MALICIOUS = "malicious";
    public const NO_THREATS_FOUND = "noThreatsFound";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RiskState extends Enum {
    public const NONE = "none";
    public const CONFIRMED_SAFE = "confirmedSafe";
    public const REMEDIATED = "remediated";
    public const DISMISSED = "dismissed";
    public const AT_RISK = "atRisk";
    public const CONFIRMED_COMPROMISED = "confirmedCompromised";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

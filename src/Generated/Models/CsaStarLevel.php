<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CsaStarLevel extends Enum {
    public const NONE = "none";
    public const ATTESTATION = "attestation";
    public const CERTIFICATION = "certification";
    public const CONTINUOUS_MONITORING = "continuousMonitoring";
    public const C_STAR_ASSESSMENT = "cStarAssessment";
    public const SELF_ASSESSMENT = "selfAssessment";
    public const NOT_SUPPORTED = "notSupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

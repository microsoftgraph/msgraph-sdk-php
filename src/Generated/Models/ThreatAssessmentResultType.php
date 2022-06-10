<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ThreatAssessmentResultType extends Enum {
    public const CHECK_POLICY = 'checkPolicy';
    public const RESCAN = 'rescan';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

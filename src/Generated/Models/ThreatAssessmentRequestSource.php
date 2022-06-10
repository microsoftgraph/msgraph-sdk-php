<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ThreatAssessmentRequestSource extends Enum {
    public const UNDEFINED = 'undefined';
    public const USER = 'user';
    public const ADMINISTRATOR = 'administrator';
}

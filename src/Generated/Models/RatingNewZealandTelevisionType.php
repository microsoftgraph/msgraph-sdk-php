<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingNewZealandTelevisionType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const PARENTAL_GUIDANCE = 'parentalGuidance';
    public const ADULTS = 'adults';
}

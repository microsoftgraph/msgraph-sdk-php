<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingIrelandMoviesType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const PARENTAL_GUIDANCE = 'parentalGuidance';
    public const AGES_ABOVE12 = 'agesAbove12';
    public const AGES_ABOVE15 = 'agesAbove15';
    public const AGES_ABOVE16 = 'agesAbove16';
    public const ADULTS = 'adults';
}

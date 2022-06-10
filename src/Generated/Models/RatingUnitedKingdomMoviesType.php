<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingUnitedKingdomMoviesType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const UNIVERSAL_CHILDREN = 'universalChildren';
    public const PARENTAL_GUIDANCE = 'parentalGuidance';
    public const AGES_ABOVE12_VIDEO = 'agesAbove12Video';
    public const AGES_ABOVE12_CINEMA = 'agesAbove12Cinema';
    public const AGES_ABOVE15 = 'agesAbove15';
    public const ADULTS = 'adults';
}

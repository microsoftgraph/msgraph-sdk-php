<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingNewZealandMoviesType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const PARENTAL_GUIDANCE = 'parentalGuidance';
    public const MATURE = 'mature';
    public const AGES_ABOVE13 = 'agesAbove13';
    public const AGES_ABOVE15 = 'agesAbove15';
    public const AGES_ABOVE16 = 'agesAbove16';
    public const AGES_ABOVE18 = 'agesAbove18';
    public const RESTRICTED = 'restricted';
    public const AGES_ABOVE16_RESTRICTED = 'agesAbove16Restricted';
}

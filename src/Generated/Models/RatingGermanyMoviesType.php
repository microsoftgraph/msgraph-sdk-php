<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingGermanyMoviesType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const AGES_ABOVE6 = 'agesAbove6';
    public const AGES_ABOVE12 = 'agesAbove12';
    public const AGES_ABOVE16 = 'agesAbove16';
    public const ADULTS = 'adults';
}

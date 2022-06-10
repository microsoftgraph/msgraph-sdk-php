<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingAppsType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const AGES_ABOVE4 = 'agesAbove4';
    public const AGES_ABOVE9 = 'agesAbove9';
    public const AGES_ABOVE12 = 'agesAbove12';
    public const AGES_ABOVE17 = 'agesAbove17';
}

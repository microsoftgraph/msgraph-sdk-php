<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingIrelandTelevisionType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const GENERAL = 'general';
    public const CHILDREN = 'children';
    public const YOUNG_ADULTS = 'youngAdults';
    public const PARENTAL_SUPERVISION = 'parentalSupervision';
    public const MATURE = 'mature';
}

<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RatingCanadaTelevisionType extends Enum {
    public const ALL_ALLOWED = 'allAllowed';
    public const ALL_BLOCKED = 'allBlocked';
    public const CHILDREN = 'children';
    public const CHILDREN_ABOVE8 = 'childrenAbove8';
    public const GENERAL = 'general';
    public const PARENTAL_GUIDANCE = 'parentalGuidance';
    public const AGES_ABOVE14 = 'agesAbove14';
    public const AGES_ABOVE18 = 'agesAbove18';
}

<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WebsiteType extends Enum {
    public const OTHER = 'other';
    public const HOME = 'home';
    public const WORK = 'work';
    public const BLOG = 'blog';
    public const PROFILE = 'profile';
}

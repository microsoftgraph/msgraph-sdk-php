<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileAppPublishingState extends Enum {
    public const NOT_PUBLISHED = 'notPublished';
    public const PROCESSING = 'processing';
    public const PUBLISHED = 'published';
}

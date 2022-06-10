<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamsAppPublishingState extends Enum {
    public const SUBMITTED = 'submitted';
    public const REJECTED = 'rejected';
    public const PUBLISHED = 'published';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

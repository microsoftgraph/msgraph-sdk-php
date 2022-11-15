<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EducationFeedbackResourceOutcomeStatus extends Enum {
    public const NOT_PUBLISHED = 'notPublished';
    public const PENDING_PUBLISH = 'pendingPublish';
    public const PUBLISHED = 'published';
    public const FAILED_PUBLISH = 'failedPublish';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

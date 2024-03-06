<?php

namespace Microsoft\Graph\Generated\Models\Search;

use Microsoft\Kiota\Abstractions\Enum;

class AnswerState extends Enum {
    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';
    public const EXCLUDED = 'excluded';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

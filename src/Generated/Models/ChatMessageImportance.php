<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChatMessageImportance extends Enum {
    public const NORMAL = 'normal';
    public const HIGH = 'high';
    public const URGENT = 'urgent';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

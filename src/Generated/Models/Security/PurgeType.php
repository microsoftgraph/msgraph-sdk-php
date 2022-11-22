<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class PurgeType extends Enum {
    public const RECOVERABLE = 'recoverable';
    public const PERMANENTLY_DELETED = 'permanentlyDeleted';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

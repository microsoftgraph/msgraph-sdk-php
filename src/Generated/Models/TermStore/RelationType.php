<?php

namespace Microsoft\Graph\Models\TermStore;

use Microsoft\Kiota\Abstractions\Enum;

class RelationType extends Enum {
    public const PIN = 'pin';
    public const REUSE = 'reuse';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

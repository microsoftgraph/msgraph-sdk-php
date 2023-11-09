<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EventStatusType extends Enum {
    public const PENDING = 'pending';
    public const ERROR = 'error';
    public const SUCCESS = 'success';
    public const NOT_AVALIABLE = 'notAvaliable';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

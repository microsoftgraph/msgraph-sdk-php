<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AnswerInputType extends Enum {
    public const TEXT = 'text';
    public const RADIO_BUTTON = 'radioButton';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

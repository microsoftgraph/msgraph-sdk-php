<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChatType extends Enum {
    public const ONE_ON_ONE = 'oneOnOne';
    public const GROUP = 'group';
    public const MEETING = 'meeting';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

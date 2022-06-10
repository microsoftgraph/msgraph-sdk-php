<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MeetingChatMode extends Enum {
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
    public const LIMITED = 'limited';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

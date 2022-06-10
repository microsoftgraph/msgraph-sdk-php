<?php

namespace Microsoft\Graph\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Enum;

class MediaStreamDirection extends Enum {
    public const CALLER_TO_CALLEE = 'callerToCallee';
    public const CALLEE_TO_CALLER = 'calleeToCaller';
}

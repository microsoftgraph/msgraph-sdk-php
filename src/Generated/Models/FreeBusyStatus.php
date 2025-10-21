<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FreeBusyStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const FREE = "free";
    public const TENTATIVE = "tentative";
    public const BUSY = "busy";
    public const OOF = "oof";
    public const WORKING_ELSEWHERE = "workingElsewhere";
}

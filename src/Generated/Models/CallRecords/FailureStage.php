<?php

namespace Microsoft\\Graph\\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Enum;

class FailureStage extends Enum {
    public const UNKNOWN = "unknown";
    public const CALL_SETUP = "callSetup";
    public const MIDCALL = "midcall";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

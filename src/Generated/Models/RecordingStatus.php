<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecordingStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const NOT_RECORDING = 'notRecording';
    public const RECORDING = 'recording';
    public const FAILED = 'failed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

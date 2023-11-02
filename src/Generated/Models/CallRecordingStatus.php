<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallRecordingStatus extends Enum {
    public const SUCCESS = 'success';
    public const FAILURE = 'failure';
    public const INITIAL = 'initial';
    public const CHUNK_FINISHED = 'chunkFinished';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

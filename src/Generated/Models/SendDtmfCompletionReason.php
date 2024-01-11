<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SendDtmfCompletionReason extends Enum {
    public const UNKNOWN = 'unknown';
    public const COMPLETED_SUCCESSFULLY = 'completedSuccessfully';
    public const MEDIA_OPERATION_CANCELED = 'mediaOperationCanceled';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrintJobStateDetail extends Enum {
    public const UPLOAD_PENDING = "uploadPending";
    public const TRANSFORMING = "transforming";
    public const COMPLETED_SUCCESSFULLY = "completedSuccessfully";
    public const COMPLETED_WITH_WARNINGS = "completedWithWarnings";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const RELEASE_WAIT = "releaseWait";
    public const INTERPRETING = "interpreting";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

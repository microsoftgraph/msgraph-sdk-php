<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ArtifactRestoreStatus extends Enum {
    public const ADDED = "added";
    public const SCHEDULING = "scheduling";
    public const SCHEDULED = "scheduled";
    public const IN_PROGRESS = "inProgress";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

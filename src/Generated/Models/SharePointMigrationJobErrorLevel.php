<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharePointMigrationJobErrorLevel extends Enum {
    public const IMPORTANT = "important";
    public const WARNING = "warning";
    public const ERROR = "error";
    public const FATAL_ERROR = "fatalError";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

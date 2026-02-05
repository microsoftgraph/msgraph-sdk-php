<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ResourceAccessType extends Enum {
    public const NONE = "none";
    public const READ = "read";
    public const WRITE = "write";
    public const CREATE = "create";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CopilotPackageRequestType extends Enum {
    public const PUBLISH = "publish";
    public const ACTIVATE = "activate";
    public const ACCESS = "access";
    public const UPDATE = "update";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

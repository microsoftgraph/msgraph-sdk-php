<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectRightsRequestType extends Enum {
    public const EXPORT = "export";
    public const DELETE = "delete";
    public const ACCESS = "access";
    public const TAG_FOR_ACTION = "tagForAction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcAuditActivityResult extends Enum {
    public const SUCCESS = "success";
    public const CLIENT_ERROR = "clientError";
    public const FAILURE = "failure";
    public const TIMEOUT = "timeout";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

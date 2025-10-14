<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LogonType extends Enum {
    public const UNKNOWN = "unknown";
    public const INTERACTIVE = "interactive";
    public const REMOTE_INTERACTIVE = "remoteInteractive";
    public const NETWORK = "network";
    public const BATCH = "batch";
    public const SERVICE = "service";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessTransferMethods extends Enum {
    public const NONE = "none";
    public const DEVICE_CODE_FLOW = "deviceCodeFlow";
    public const AUTHENTICATION_TRANSFER = "authenticationTransfer";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

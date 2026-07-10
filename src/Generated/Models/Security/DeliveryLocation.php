<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeliveryLocation extends Enum {
    public const UNKNOWN = "unknown";
    public const INBOX_FOLDER = "inbox_folder";
    public const JUNK_FOLDER = "junkFolder";
    public const DELETED_FOLDER = "deletedFolder";
    public const QUARANTINE = "quarantine";
    public const ONPREM_EXTERNAL = "onprem_external";
    public const FAILED = "failed";
    public const DROPPED = "dropped";
    public const OTHERS = "others";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

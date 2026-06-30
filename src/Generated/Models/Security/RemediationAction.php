<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class RemediationAction extends Enum {
    public const MOVE_TO_JUNK = "moveToJunk";
    public const MOVE_TO_INBOX = "moveToInbox";
    public const HARD_DELETE = "hardDelete";
    public const SOFT_DELETE = "softDelete";
    public const MOVE_TO_DELETED_ITEMS = "moveToDeletedItems";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const MOVE_TO_QUARANTINE = "moveToQuarantine";
}

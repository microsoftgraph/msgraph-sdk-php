<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagementState extends Enum {
    public const MANAGED = "managed";
    public const RETIRE_PENDING = "retirePending";
    public const RETIRE_FAILED = "retireFailed";
    public const WIPE_PENDING = "wipePending";
    public const WIPE_FAILED = "wipeFailed";
    public const UNHEALTHY = "unhealthy";
    public const DELETE_PENDING = "deletePending";
    public const RETIRE_ISSUED = "retireIssued";
    public const WIPE_ISSUED = "wipeIssued";
    public const WIPE_CANCELED = "wipeCanceled";
    public const RETIRE_CANCELED = "retireCanceled";
    public const DISCOVERED = "discovered";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

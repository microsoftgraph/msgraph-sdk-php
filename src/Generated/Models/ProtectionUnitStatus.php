<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtectionUnitStatus extends Enum {
    public const PROTECT_REQUESTED = 'protectRequested';
    public const PROTECTED = 'protected';
    public const UNPROTECT_REQUESTED = 'unprotectRequested';
    public const UNPROTECTED = 'unprotected';
    public const REMOVE_REQUESTED = 'removeRequested';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

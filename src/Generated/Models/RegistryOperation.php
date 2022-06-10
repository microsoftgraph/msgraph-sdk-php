<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RegistryOperation extends Enum {
    public const UNKNOWN = 'unknown';
    public const CREATE = 'create';
    public const MODIFY = 'modify';
    public const DELETE = 'delete';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

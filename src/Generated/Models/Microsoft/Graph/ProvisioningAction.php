<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ProvisioningAction extends Enum {
    public const OTHER = 'other';
    public const CREATE = 'create';
    public const DELETE = 'delete';
    public const DISABLE = 'disable';
    public const UPDATE = 'update';
    public const STAGED_DELETE = 'stagedDelete';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ProvisioningStatusErrorCategory extends Enum {
    public const FAILURE = 'failure';
    public const NON_SERVICE_FAILURE = 'nonServiceFailure';
    public const SUCCESS = 'success';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

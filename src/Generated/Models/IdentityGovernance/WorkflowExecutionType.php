<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class WorkflowExecutionType extends Enum {
    public const SCHEDULED = 'scheduled';
    public const ON_DEMAND = 'onDemand';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

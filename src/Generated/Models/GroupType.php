<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupType extends Enum {
    public const UNIFIED_GROUPS = 'unifiedGroups';
    public const AZURE_A_D = 'azureAD';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

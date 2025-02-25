<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Enum;

class RuleOperation extends Enum {
    public const NULL = "null";
    public const EQUALS = "equals";
    public const NOT_EQUALS = "notEquals";
    public const CONTAINS = "contains";
    public const NOT_CONTAINS = "notContains";
    public const LESS_THAN = "lessThan";
    public const GREATER_THAN = "greaterThan";
    public const STARTS_WITH = "startsWith";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

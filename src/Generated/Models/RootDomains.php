<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RootDomains extends Enum {
    public const NONE = "none";
    public const ALL = "all";
    public const ALL_FEDERATED = "allFederated";
    public const ALL_MANAGED = "allManaged";
    public const ENUMERATED = "enumerated";
    public const ALL_MANAGED_AND_ENUMERATED_FEDERATED = "allManagedAndEnumeratedFederated";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

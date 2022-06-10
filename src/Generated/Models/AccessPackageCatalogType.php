<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageCatalogType extends Enum {
    public const USER_MANAGED = 'userManaged';
    public const SERVICE_DEFAULT = 'serviceDefault';
    public const SERVICE_MANAGED = 'serviceManaged';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

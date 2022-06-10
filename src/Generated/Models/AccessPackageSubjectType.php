<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageSubjectType extends Enum {
    public const NOT_SPECIFIED = 'notSpecified';
    public const USER = 'user';
    public const SERVICE_PRINCIPAL = 'servicePrincipal';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

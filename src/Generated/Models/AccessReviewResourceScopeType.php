<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewResourceScopeType extends Enum {
    public const GROUP = "group";
    public const CATALOG = "catalog";
    public const SERVICE_PRINCIPAL = "servicePrincipal";
    public const DIRECTORY_ROLE = "directoryRole";
    public const ACCESS_PACKAGE_ASSIGNMENT_POLICY = "accessPackageAssignmentPolicy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

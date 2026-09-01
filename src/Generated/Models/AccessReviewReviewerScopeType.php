<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewReviewerScopeType extends Enum {
    public const USER = "user";
    public const GROUP = "group";
    public const SELF = "self";
    public const MANAGER = "manager";
    public const SPONSOR = "sponsor";
    public const RESOURCE_OWNER = "resourceOwner";
    public const MANAGER_OR_SPONSOR = "managerOrSponsor";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

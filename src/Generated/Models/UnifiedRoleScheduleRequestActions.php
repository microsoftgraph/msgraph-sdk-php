<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UnifiedRoleScheduleRequestActions extends Enum {
    public const ADMIN_ASSIGN = "adminAssign";
    public const ADMIN_UPDATE = "adminUpdate";
    public const ADMIN_REMOVE = "adminRemove";
    public const SELF_ACTIVATE = "selfActivate";
    public const SELF_DEACTIVATE = "selfDeactivate";
    public const ADMIN_EXTEND = "adminExtend";
    public const ADMIN_RENEW = "adminRenew";
    public const SELF_EXTEND = "selfExtend";
    public const SELF_RENEW = "selfRenew";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

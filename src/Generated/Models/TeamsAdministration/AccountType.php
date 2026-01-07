<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Kiota\Abstractions\Enum;

class AccountType extends Enum {
    public const USER = "user";
    public const RESOURCE_ACCOUNT = "resourceAccount";
    public const GUEST = "guest";
    public const SFB_ON_PREM_USER = "sfbOnPremUser";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const INELIGIBLE_USER = "ineligibleUser";
}

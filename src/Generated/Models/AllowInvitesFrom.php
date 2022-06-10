<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AllowInvitesFrom extends Enum {
    public const NONE = 'none';
    public const ADMINS_AND_GUEST_INVITERS = 'adminsAndGuestInviters';
    public const ADMINS_GUEST_INVITERS_AND_ALL_MEMBERS = 'adminsGuestInvitersAndAllMembers';
    public const EVERYONE = 'everyone';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

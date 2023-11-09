<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingStaffRole extends Enum {
    public const GUEST = 'guest';
    public const ADMINISTRATOR = 'administrator';
    public const VIEWER = 'viewer';
    public const EXTERNAL_GUEST = 'externalGuest';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const SCHEDULER = 'scheduler';
    public const TEAM_MEMBER = 'teamMember';
}

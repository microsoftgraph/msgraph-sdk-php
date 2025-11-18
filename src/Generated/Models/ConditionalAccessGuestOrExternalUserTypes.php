<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessGuestOrExternalUserTypes extends Enum {
    public const NONE = "none";
    public const INTERNAL_GUEST = "internalGuest";
    public const B2B_COLLABORATION_GUEST = "b2bCollaborationGuest";
    public const B2B_COLLABORATION_MEMBER = "b2bCollaborationMember";
    public const B2B_DIRECT_CONNECT_USER = "b2bDirectConnectUser";
    public const OTHER_EXTERNAL_USER = "otherExternalUser";
    public const SERVICE_PROVIDER = "serviceProvider";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

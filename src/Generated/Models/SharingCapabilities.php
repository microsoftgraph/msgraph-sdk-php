<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharingCapabilities extends Enum {
    public const DISABLED = "disabled";
    public const EXTERNAL_USER_SHARING_ONLY = "externalUserSharingOnly";
    public const EXTERNAL_USER_AND_GUEST_SHARING = "externalUserAndGuestSharing";
    public const EXISTING_EXTERNAL_USER_SHARING_ONLY = "existingExternalUserSharingOnly";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class OnboardingStatus extends Enum {
    public const INSUFFICIENT_INFO = "insufficientInfo";
    public const ONBOARDED = "onboarded";
    public const CAN_BE_ONBOARDED = "canBeOnboarded";
    public const UNSUPPORTED = "unsupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

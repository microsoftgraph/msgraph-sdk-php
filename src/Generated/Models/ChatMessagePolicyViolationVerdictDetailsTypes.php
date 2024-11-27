<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChatMessagePolicyViolationVerdictDetailsTypes extends Enum {
    public const NONE = "none";
    public const ALLOW_FALSE_POSITIVE_OVERRIDE = "allowFalsePositiveOverride";
    public const ALLOW_OVERRIDE_WITHOUT_JUSTIFICATION = "allowOverrideWithoutJustification";
    public const ALLOW_OVERRIDE_WITH_JUSTIFICATION = "allowOverrideWithJustification";
}
